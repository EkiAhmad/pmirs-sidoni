<?php

namespace App\Helper;

use GuzzleHttp\Client;
use App;
use Illuminate\Support\Facades\DB;

class Helper
{
    public static function url_api($path, $param = null)
    {
        $api_key = 'erpepsimprpimaiy';
        $headers = [
            'Content-Type'  => 'application/json',
            'PMI-API-KEY'   => $api_key,
        ];
        if (config('app.env') == 'local') {

            $url = 'http://128.199.165.95/product/pmi_api_dev/' . $path;
        } else {

            $url = 'http://128.199.165.95/product/pmi_api/' . $path;
        }
        // dd([$url, $param]);
        // dd($path);
        $client    = new Client(['headers' => $headers]);
        if (!empty($param)) {
            $request_status = 'POST';
            $r         = $client->request($request_status, $url, ['form_params' => $param]);
        } else {
            $request_status = 'GET';
            $r         = $client->request($request_status, $url);
        }
        // dd($r);
        $responsed = $r->getBody()->getContents();

        return $responsed;
    }

    public static function get_date_indonesia($date)
    {
        if (empty($date)) {
            return null;
        }
        $day = [
            'Minggu',
            'Senin',
            'Selasa',
            'Rabu',
            'Kamis',
            'Jum`at',
            'Sabtu'
        ];

        $month = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];

        $result = [
            'hari' => $day[date('w', strtotime($date))],
            'tgl' => date('d', strtotime($date)),
            'bulan' => $month[(date('m', strtotime($date)) - 1)],
            'tahun' => date('Y', strtotime($date))
        ];
        return $result;
    }

    public static function is_connected()
    {
        $connected = @fsockopen("www.example.com", 80);
        //website, port  (try 80 or 443)
        if ($connected) {
            $is_conn = true; //action when connected
            fclose($connected);
        } else {
            $is_conn = false; //action in connection failure
        }
        return $is_conn;
    }
    public static function get_pekerjaan(){
        $data = [
            'TNI',
            'POLRI',
            'Peg. Negeri',
            'Peg. Swasta',
            'Mahasiswa',
            'Pelajar',
            'BUMN',
            'Dokter',
            'Wiraswasta',
            'Buruh',
            'Pengajar',
            'Pedagang',
            'Lain-lain'
        ];
        return $data;
    }

    public static function auth_user()
    {
        $data = [
            'Nama' => 'Abuduru',
            'Kode' => '3603DGABD000585',
            'Tglkembali' => '2019-01-20',
            'Tgldonor' => '2019-11-11',
        ];
        $data['tgl_donor'] = date('d M Y', strtotime($data['Tgldonor']));
        // dd($data);

        return $data;
    }

    public static    function get_slug($string)
    {
        $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.

        return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
    }
}
