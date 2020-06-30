<?php

namespace App\Http\Controllers\Pendonor;

use Illuminate\Http\Request;
use App\Helper\Helper_js as js;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Validator;
use App\Helper\Helper;
use PDF;
use DateTime;
use Milon\Barcode\DNS1D;
//load eloquent
use Redirect;
class AgendaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        DB::enableQueryLog();
    }

    protected $title = 'App | Agenda'; //tag title html
    protected $url = 'pendonor.agenda'; //url di route/web(ambil prefixnya)
    protected $breadcumb = 'Agenda Pendonor'; //breadcumb
    protected $prefix_file = 'pendonor/agenda/'; //nama file di resource

    public function index()
    {
        if (session()->has('user') == false) {
            return redirect('pendonor/auth/login')
                ->withError('error');
        }

        //load js yang dipakai, sebelumnya register dlu di Helper_js
        $js = []; //load jsmu
        $data = [
            //bawaan jangan dihapus
            'title' => $this->title,
            'url'   => url($this->url),
            'breadcumb' => $this->breadcumb,
            'js' => js::use_js($js),
            'data' => $this->data()->original,
        ];
        // dd($data);
        return view($this->prefix_file . 'index', $data);
    }
    public function data()
    {
        $get_session = session('user');
        $kode = $get_session['Kode'];
        $path = 'api/v2/beranda/' . $kode;
        $data = json_decode(Helper::url_api($path));
        // dd($data);
        // if ($data->response->status) {
        //         $day = Helper::get_date_indonesia($data->result->data_agenda->date_start);

        // }

        return response()->json($data);
    }

    public function cancel(Request $request)
    {
        $data = $request->all();
        $insert = [
            'pendonor' => $data['pendonor'],
            'kegiatan_id' => $data['kegiatan_id'],
        ];
        // dd($insert);
        $path = 'api/v1/batal_anamnesa';
        $data = json_decode(Helper::url_api($path, $insert));
        // dd($data);
        if ($data->response->status) {
            return redirect('pendonor/kegiatan');
        }
    }

    public function print_anamnesa()
    {
        return view('Pendonor/agenda/print_anamnesa');
    }

    public function data_anamnesa()
    {
        $kode = session('user')['Kode'];
        $path_agenda = 'api/v2/beranda/' . $kode;
        $get_agenda = json_decode(Helper::url_api($path_agenda));
        $get_agenda = $get_agenda->result->data_agenda;
        // dd($get_agenda);
        if (!empty($get_agenda)) {
            $id_kegiatan    = $get_agenda->agenda_kegiatan_id;
            $get_kegiatan =  DB::connection('mysql2')->table('data_kegiatan')->where('kegiatan_id', $id_kegiatan)->select(DB::raw('kegiatan_title, tgl_mulai, tgl_selesai'))->first();

            if (!empty($get_kegiatan)) {
                $jumlah_soal_bawah = 25;
                $jumlah_soal_atas = 25;
                $jumlah_soal_max = $jumlah_soal = DB::connection('mysql2')
                    ->table('data_amenesa_pertanyaan as dap')
                    ->select('dap.pertanyaan_tipe_id')
                    ->join('master_amenesa_tipe as mat', 'dap.pertanyaan_tipe_id', '=', 'mat.tipe_id')
                    ->leftJoin('master_amenesa_kategori as mak', 'dap.pertanyaan_kategori_id', '=', 'mak.kategori_id')
                    ->leftJoin('data_amenesa_jawaban as daj', 'dap.pertanyaan_id', 'daj.jawaban_pertanyaan_id')
                    ->orderBy('dap.pertanyaan_kategori_id', 'asc')
                    ->count();
                $date_TglLhr = DateTime::createFromFormat('Y-m-d', session('user')['TglLhr']);
                $format = $date_TglLhr->format('d-m-y');
                $tanggal_lahir = str_replace("-", "", $format);
                $pertanyaan1 = DB::connection('mysql2')
                    ->select(DB::raw("Select `kategori_judul`, `pertanyaan_isi`, dap.pertanyaan_id,
                            (CASE
                                when '$id_kegiatan' = '0' then '0'
                                else `jawaban_pertanyaan`
                            END) as `jawaban_pertanyaan`
                            from data_amenesa_pertanyaan as dap
                            JOIN `master_amenesa_tipe` as `mat` ON `dap`.`pertanyaan_tipe_id` = `mat`.`tipe_id`
                            LEFT JOIN `master_amenesa_kategori` as `mak` ON `mak`.`kategori_id` = `dap`.`pertanyaan_kategori_id`
                            LEFT JOIN `data_amenesa_jawaban` as `daj` ON `daj`.`jawaban_pertanyaan_id` = `dap`.`pertanyaan_id` AND jawaban_users_id = '$kode'
                            WHERE `dap`.`status` = '1'
                            group by `dap`.pertanyaan_id
                            ORDER BY `dap`.`pertanyaan_id` ASC
                            limit 0, $jumlah_soal_bawah
                             "));

                $pertanyaan2 = DB::connection('mysql2')
                    ->select(DB::raw("Select `kategori_judul`, `pertanyaan_isi`, dap.pertanyaan_id,
                            (CASE
                                when '$id_kegiatan' = '0' then '0'
                                else `jawaban_pertanyaan`
                            END) as `jawaban_pertanyaan`
                            from data_amenesa_pertanyaan as dap
                            JOIN `master_amenesa_tipe` as `mat` ON `dap`.`pertanyaan_tipe_id` = `mat`.`tipe_id`
                            LEFT JOIN `master_amenesa_kategori` as `mak` ON `mak`.`kategori_id` = `dap`.`pertanyaan_kategori_id`
                            LEFT JOIN `data_amenesa_jawaban` as `daj` ON `daj`.`jawaban_pertanyaan_id` = `dap`.`pertanyaan_id` AND jawaban_users_id = '$kode'
                            WHERE `dap`.`status` = '1'
                            group by `dap`.pertanyaan_id
                            ORDER BY `dap`.`pertanyaan_id` ASC
                            limit $jumlah_soal_atas, $jumlah_soal_max
                             "));
                $data['data_akun'] = [
                    'Kode' => session('user')['Kode'],
                    'Kegiatan'    => $get_kegiatan->kegiatan_title,
                    'Nama' => session('user')['Nama'],
                    'TempatLhr' => session('user')['TempatLhr'],
                    'Goldar' => session('user')['GolDarah'],
                    'Rhesus' => session('user')['Rhesus'],
                    'Tanggal' => session('user')['TglLhr'],
                    'Alamat' => session('user')['Alamat'],
                    'Telp' => session('user')['telp2'],
                    'Kelurahan' => session('user')['kelurahan'],
                    'Kecamatan' => session('user')['kecamatan'],
                    'Kota' => session('user')['wilayah'], //kotanya kok aneh ?
                    'Jk' => session('user')['Jk'],
                    'TglLhr' => $tanggal_lahir,
                    // 'Tgl_terkahir_donor' => session('user')['Tgl'],
                    'JumDonor' => session('user')['jumDonor'],
                    'Pekerjaan' => session('user')['Pekerjaan'],
                ];
                // dd($data, session('user'));
                $data['get_data']       = $get_kegiatan;
                $data['tglCetak']       = date('Y-m-d');
                $data['tgl_review']     = date('d-M-y', strtotime($data['tglCetak']));
                $data['tgl_mulai']      = date('d-M-y', strtotime($get_kegiatan->tgl_mulai));
                $data['pekerjaan']      = ['TNI/POLRI', 'Peg. Negeri/Swasta', 'Petani / Buruh', 'Wiraswasta', 'Mahasiswa', 'Pedangang', 'Lain - lain'];
                $data['pertanyaan1']    = $pertanyaan1;
                $data['pertanyaan2']    = $pertanyaan2;
                $data['barcode']        = '<div class="border" style="height:55px;width: auto;padding-top:15px;">
                                                <img alt="' . $kode . '" src="data:image/png;base64,' . DNS1D::getBarcodePNG(session('user')['Kode'], "C128") . '" style="padding-top: 5px;height:20px;width:auto;padding-left:17px">
                                                <p style="text-align:center">' . $kode . '</p>
                                            </div>';


                $pdf = PDF::loadview('pendonor/agenda/print_anamnesa', $data)->setPaper('a4', 'landscape');
                return $pdf->stream();
            } else {
                return Redirect::to('pendonor/agenda')->with('message_agenda', 'Anda tidak memiliki kegiatan');
            }

            // dd($get_session);
        } else {
            return Redirect::to('pendonor/agenda')->with('message_agenda', 'Anda tidak memiliki Agenda');
        }



        // $query = DB::connection('mysql')
        //     ->table('data_amenesa_jawaban')
        //     ->select(DB::raw('jawaban_users_id, kegiatan_title, pertanyaan_isi, jawaban_pertanyaan, tgl_mulai,tgl_selesai'))
        //     ->where('jawaban_users_id', '=', $get_session['Kode'])
        //     ->where('jawaban_event_id', '=', $get_id_kegiatan)
        //     ->join('data_amenesa_pertanyaan', 'jawaban_pertanyaan_id', '=', 'data_amenesa_pertanyaan.pertanyaan_id')
        //     ->join('data_kegiatan', 'jawaban_event_id', '=', 'data_kegiatan.kegiatan_id')
        //     ->get();
        // dd($query, $get_session['Kode'], $get_id_kegiatan);
        // $data['data_akun'] = [];
        // $data['get_data'] = [];
        // $date_TglLhr = DateTime::createFromFormat('Y-m-d', $get_session['TglLhr']);
        // $format = $date_TglLhr->format('d-m-y');
        // $tanggal_lahir = str_replace("-", "", $format);

        // $tgl_review = $query[0]->tgl_selesai;
        // $tgl_mulai  = $query[0]->tgl_mulai;
        // $createDate_review = new DateTime($tgl_review);
        // $createDate_mulai = new DateTime($tgl_mulai);
        // $delete_time_tgl_review = $createDate_review->format('d-M-y');
        // $delete_time_tgl_mulai = $createDate_mulai->format('d-M-y');
        // $data['tgl_review'] = $delete_time_tgl_review;
        // $data['tgl_mulai'] = $delete_time_tgl_mulai;
        // $arr = array(
        //     'Nama'      => $get_session['Nama'],
        //     'Pekerjaan' => $get_session['Pekerjaan'],
        //     'TempatLhr' => $get_session['TempatLhr'],
        //     'telp2'     => $get_session['telp2'],
        //     'Rhesus'    => $get_session['Rhesus'],
        //     'Jk'        => $get_session['Jk'],
        //     'TglLhr'    => $tanggal_lahir,
        //     'GolDarah'  => $get_session['GolDarah'],
        //     'Alamat'    => $get_session['Alamat'],
        //     'kota'      => $get_session['kota'],
        // );

        // foreach ($query as $key => $value) {
        //     array_push($data['get_data'], $value);
        // }
        // array_push($data['data_akun'], $arr);
        // $data['pekerjaan'] = ['TNI/POLRI', 'Peg. Negeri/Swasta', 'Petani / Buruh', 'Wiraswasta', 'Mahasiswa', 'Pedangang', 'Lain - lain'];
        // $data['tglCetak'] = date('Y-m-d');

        // $jumlah_soal = DB::connection('mysql')
        //     ->table('data_amenesa_pertanyaan as dap')
        //     ->select('dap.pertanyaan_tipe_id')
        //     ->join('master_amenesa_tipe as mat', 'dap.pertanyaan_tipe_id', '=', 'mat.tipe_id')
        //     ->leftJoin('master_amenesa_kategori as mak', 'dap.pertanyaan_kategori_id', '=', 'mak.kategori_id')
        //     ->leftJoin('data_amenesa_jawaban as daj', 'dap.pertanyaan_id', 'daj.jawaban_pertanyaan_id')
        //     ->orderBy('dap.pertanyaan_kategori_id', 'asc')
        //     ->get();
        // $jumlah_soal_bawah = 25;
        // $jumlah_soal_atas = 25;
        // $jumlah_soal_max = count($jumlah_soal);
        // $pertanyaan1 = DB::connection('mysql')
        //     ->select(DB::raw("Select `kategori_judul`, `pertanyaan_isi`, dap.pertanyaan_id,
        //                     (CASE
        //                         when '$get_id_kegiatan' = '0' then '0'
        //                         else `jawaban_pertanyaan`
        //                     END) as `jawaban_pertanyaan`
        //                     from data_amenesa_pertanyaan as dap
        //                     JOIN `master_amenesa_tipe` as `mat` ON `dap`.`pertanyaan_tipe_id` = `mat`.`tipe_id`
        //                     LEFT JOIN `master_amenesa_kategori` as `mak` ON `mak`.`kategori_id` = `dap`.`pertanyaan_kategori_id`
        //                     LEFT JOIN `data_amenesa_jawaban` as `daj` ON `daj`.`jawaban_pertanyaan_id` = `dap`.`pertanyaan_id` AND jawaban_users_id = '$kode'
        //                     WHERE `dap`.`status` = '1'
        //                     group by `dap`.pertanyaan_id
        //                     ORDER BY `dap`.`pertanyaan_id` ASC
        //                     limit 0, $jumlah_soal_bawah
        //                      "));

        // $pertanyaan2 = DB::connection('mysql')
        //     ->select(DB::raw("Select `kategori_judul`, `pertanyaan_isi`, dap.pertanyaan_id,
        //                     (CASE
        //                         when '$get_id_kegiatan' = '0' then '0'
        //                         else `jawaban_pertanyaan`
        //                     END) as `jawaban_pertanyaan`
        //                     from data_amenesa_pertanyaan as dap
        //                     JOIN `master_amenesa_tipe` as `mat` ON `dap`.`pertanyaan_tipe_id` = `mat`.`tipe_id`
        //                     LEFT JOIN `master_amenesa_kategori` as `mak` ON `mak`.`kategori_id` = `dap`.`pertanyaan_kategori_id`
        //                     LEFT JOIN `data_amenesa_jawaban` as `daj` ON `daj`.`jawaban_pertanyaan_id` = `dap`.`pertanyaan_id` AND jawaban_users_id = '$kode'
        //                     WHERE `dap`.`status` = '1'
        //                     group by `dap`.pertanyaan_id
        //                     ORDER BY `dap`.`pertanyaan_id` ASC
        //                     limit $jumlah_soal_atas, $jumlah_soal_max
        //                      "));



        // $data['pertanyaan1'] = $pertanyaan1;
        // $data['pertanyaan2'] = $pertanyaan2;
        // $data['barcode']     = '<div class="border" style="height:55px;width: auto;padding-top:15px;">
        //                                         <img alt="' . $kode . '" src="data:image/png;base64,' . DNS1D::getBarcodePNG(session('user')['Kode'], "C128") . '" style="padding-top: 5px;height:20px;width:auto;padding-left:17px">
        //                                         <p style="text-align:center">' . $kode . '</p>
        //                                     </div>';
        // dd($data);
        // echo json_encode($data);
        $pdf = PDF::loadview('pendonor/agenda/print_anamnesa', $data)->setPaper('a4', 'landscape');
        return $pdf->stream();
    }
    public function cetak()
    {
    }
}
