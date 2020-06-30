<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Document</title>
    <style type="text/css">
        @page { margin: 0.5cm 0 1.2cm 0; }
        body {
            font-family: "Times New Roman", Times, serif;
            text-align: justify;
            font-size: 8.2pt;
            margin: 24pt 13.5pt;
        }
        #subHeader{
            font-family: "Times New Roman", Times, serif;
        }
        #page-1{
            font-size: 11px;
            font-family: "Times New Roman", Times, serif;
        }
        #page-2{
            font-size:7pt;
            font-family: "Calibri", sans-serif;
        }

        .flyleaf {
            page-break-after: always;
        }

        #header,
        #footer {
            position: fixed;
            left: 0;
            right: 0;
            color: #000;
            margin: 0 13.5pt;
            /* font-size: 0.9em; */
        }

        #header {
            top: 0px;
            border-bottom: 3px solid #000;
            font-size:9pt;
        }
        #header td + td{
            font-family: "Calibri", sans-serif;
            font-size:7pt;
        }
        #subHeader{
            font-size:9pt;
        }

        #footer {
            bottom: 0;
            border-top: 3px solid #000;
        }

        #header table, #footer table{
            width: 100%;
            border-collapse: collapse;
            border: none;
        }

        #header td,#footer td{
            padding: 0;
            width: 50%;
        }
        /* #footer table.tgl, #footer table.mark, #footer table.counter{
            width: 33.33333333%;
            /* display:inline-block; */
        }
        #footer table.mark{
            width: 80%;
            margin: 4px auto;
            background: ghostwhite;
            border: 1px solid #322c2b;
        }

        .page-number {
            text-align: center;
        }

        .page-number:before {
            content: "Page "counter(page);
        }

        hr {
            page-break-after: always;
            border: 0;
        }
        .text-left {
            text-align: left;
        }

        .text-right {
            text-align: right;
        }

        .text-center {
            text-align: center;
        }
        .divider{
            border-top: 2pt solid #000;
        }
        table{
            width: 100%;
            border-spacing: 0;
            border-collapse: collapse;
            border: none;
            table-layout:fixed;
        }
        td{
            padding: 0;
        }

        table.parent tr td:first-child {
            border-right: 1.5px solid #000;
        }
        table.parent tr td{
            width: 50%;
        }
        table.child th{
            font-weight: 400;
            vertical-align: top;
            height: 16px;
        }
        table.parent table.child td {
            border: none;
        }
        /* table.parent table.child td {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        } */
        ol {
            vertical-align: text-top;
        }
        ol,p{
            margin: 0;
        }
        p{
            line-height: 1.25em;
        }
        .question{
            /* border:none; */
            width: 91%!important;
        }
        .choose{
            width: 3%!important;
        }
        /* .choose:last-child{
            width: 12%!important;
            padding: 0 4%;
        } */
        .border{
            border: 1px solid #322c2b;
        }
        .box{
            margin: 0 14px;
            height: 10px;
        }
        .box span{
            line-height: 5px;
        }
        .padding-top{
            padding-top: 4px;
        }
        .number{
            display: inline-block;
            margin-right: 8px;
            vertical-align:text-bottom;
        }
        .separator{
            padding: 1px 0px;
            font-weight: bold;
            font-style: italic;
        }

        .pageFooter:after {
            counter-increment: halaman;
            content: "Halaman " counter(halaman) " dari 2";
        }
        .padding-inline{
            padding-inline-start: 24px;
            padding-left: 24px;
        }
        .clear { clear: both; }
        .question div span:first-child {
            float: left;
            padding: 0 .2em 0 0;
            margin: 0;
            background: white;
        }
        .question div:after {
            content: "";
            display: block;
            overflow: hidden;
            height: 1em;
            border-bottom: 1px dotted;
        }
        span.symbol{
            font-family: 'DejaVu Sans';
            font-size:10pt;
            padding-left: 5px;
            vertical-align:middle;
        }
        .inline-block{
            display: inline-block;
        }
        .dot, .solid{
            padding:8px 0px;
        }
        .dot{
            border-bottom: 1px dotted!important;
        }
        .solid{
            border-bottom: 1px solid!important;
        }
        .label-box .box, .label-box-reset-right .box{
            display: inline-block;
            width: 17px;
            height: 13px;
            vertical-align: middle;
            position:relative;
        }
        .label-box .box{
            margin: 0 8px;
        }
        .label-box-reset-right .box{
            margin: 0 0 0 8px;
        }
        td.selected{
            position:relative;
        }
        td.selected:after,.label-box .box.selected:after, .label-box-reset-right .box.selected:after{
            font-family: 'DejaVu Sans';
            content: "✕";
            font-size:11pt;
            height: 10px;
            position: absolute;
            width: 15px;
            top: 3px;
            left:50%;
            margin-left: -8px;
            z-index: 99;
            line-height:10px;
        }
        .vertical-top td{
            vertical-align:top;
        }
        .vertical-middle td{
            vertical-align:middle;
        }
        .vertical-bottom td{
            vertical-align:bottom;
        }
        /*  */
        .label-one-table td{
            width: 29%!important;
        }
        .label-one-table td + td + td{
            width: 70%!important;
        }
        /*  */
        .label-one-table td + td, .label-two-table td + td{
            width: 1%!important;
        }
        /*  */
        .label-two-table td{
            width: 58%!important;
        }
        .label-two-table td + td + td{
            width: 41%!important;
        }
        .label-two-table td + td + td table{
            width: 85%!important;
            margin: 0 10px;
        }
    </style>
</head>

<body marginwidth="0" marginheight="0">
        <div id="header">
            <table>
                <tbody>
                    <tr>
                        <td>UNIT DONOR DARAH PMI KABUPATEN TANGERANG</td>
                        <td class="text-right">Jl.Raya Curug KM.02 No.20 RT.03/03 Ds.Kadu Jaya Kec.Curug Kab.Tangerang 15810 Banten</td>
                    </tr>
                    <tr>
                        <td>Formulir Kuesioner dan Informed Consent Donor</td>
                        <td class="text-right">Telp (021)5949 8519, 5949 8520
                                                Email : uddpmi.kab.tangerang@gmail.com</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div id="footer" style="margin-top : 5px;">
        <table>
                <tr>
                    <td style="width: 33.33333333%;">
                        <table>
                            <tr>
                                <td style="width: 28%;">Tanggal Pelaksanaan</td>
                                <td style="width: 1%;">:</td>
                                <td> {{ $tgl_mulai }}</td>
                            </tr>
                            <tr>
                                <td style="width: 28%;">Tanggal <i>Review</i></td>
                                <td style="width: 1%;">:</td>
                                <td> {{ $tgl_review }}</td>
                                <!-- <td style="width:50%" class="text-right pageFooter"> </td> -->
                            </tr>
                        </table>
                    </td>
                    <td style="width: 33.33333333%;">

                          @if (!empty(session('user')['Kode']))


                           <table class="text-center mark">
                                <tr>
                                    <td style="text-overflow: ellipsis; white-space: nowrap; overflow: hidden;" class="{{ !empty($data_akun['Nama']) ? '' : 'dot' }}">
                                        {{ ($data_akun['Nama']) }}

                                    </td>
                                </tr>
                                <tr>
                                    <td class="{{ !empty(session('user')['Kode']) ? '' : 'dot' }}">
                                        {{ session('user')['Kode'] }}
                                    </td>

                                </tr>
                            </table>

                        @endif

                    </td>
                    <td style="width: 33.33333333%;">
                        <table class="counter">
                            <tr>
                                <td rowspan="2" style="width:50%" class="text-right pageFooter"></td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
         <!-- sub header lampiran -->
         <div id="subHeader" style="position: relative;">
            <table width="100%">
                <tbody>
                    <tr>
                        <td class="text-center"style="line-height:17px;padding:4px 0;">DIISI OLEH DONOR<br>MOHON DIISI LENGKAP MENGGUNAKAN HURUF KAPITAL</td>
                    </tr>
                </tbody>
            </table>
            <!-- logo  -->
            <div style="position: absolute; top:0; right:0;">
                <img style="width:100px;" src="data:image/png;base64,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" alt="">
            </div>

        </div>
        <!-- Page 1 -->
        <div id="page-1">
            <table class="parent">
                <tr>
                    <td style="width: 15%; border: 1px solid; padding-left:3px">Tempat Penyumbangan</td>
                    <td style="width: 35%; border: 1px solid;">&nbsp;&nbsp;&nbsp; {{ $get_data->kegiatan_title }}</td>
                    <td style="width: 15%; border: 1px solid; padding-left:3px">Tanggal</td>
                    <td style="width: 35%; border: 1px solid;">&nbsp;&nbsp;&nbsp; {{ $tglCetak }}</td>
                </tr>
            </table>
            <table class="parent" style="table-layout: fixed;width:100%;">
                <tr>
                    <td id="kiri" class="padding-top" style="width:50%;">
                        <table class="child" cellspacing="0">
                            <tr>
                                <td>
                                    <table class="vertical-top">
                                        <tr>
                                            <td>No. KTP/SIM/Paspor</td>
                                            <td style="width:1%">:</td>
                                            <td>
                                                <table style="width:90%;margin:0 8px;">
                                                    <tr>
                                                        <td class="dot"></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Nama Lengkap</td>
                                            <td style="width:1%">:</td>
                                            <td>
                                                <table style="width:90%;margin:0 8px;">
                                                    <tr>
                                                        <td class="{{ !empty($data_akun['Nama']) ? '' : 'dot' }} ">
                                                           {{ ($data_akun['Nama']) }}
                                                        </td>

                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>

                                           @php
                                            if(!empty($data_akun['Alamat'])){
                                                echo '<tr>
                                                        <td>Alamat Rumah</td>
                                                        <td style="width:1%">:</td>
                                                        <td style="word-wrap : break-word;padding:0 8px;">'.$data_akun['Alamat'].'</td>
                                                    </tr>';
                                            }else{
                                                echo '<tr>
                                                        <td>Alamat Rumah</td>
                                                        <td style="width:1%">:</td>
                                                        <td>
                                                            <table style="width:90%;margin:0 8px;">
                                                                <tr>
                                                                    <td class="dot"></td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>&nbsp;</td>
                                                        <td style="width:1%">&nbsp;</td>
                                                        <td>
                                                            <table style="width:90%;margin:0 8px;">
                                                                <tr>
                                                                    <td class="dot"></td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    ';
                                            }
                                        @endphp

                                        <tr>
                                            <td>No Telp.Rumah/Hp</td>
                                            <td style="width:1%">:</td>
                                            <td>
                                                <table style="width:90%;margin:0 8px;">
                                                    <tr>
                                                        <td class="{{ !empty($data_akun['Telp']) ? '': 'dot' }}">
                                                             {{ $data_akun['Telp'] }}
                                                        </td>
                                                    </tr>

                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td>
                                    <table>
                                       <tr>
                                            <td>No. Kartu Donor</td>
                                            <td style="width:1%">:</td>
                                            <td>
                                                <table style="width:90%;margin:0 8px;">
                                                    <tr>
                                                        <td class="{{ !empty(session('user')['Kode']) ? '': 'dot' }}">
                                                            {{ session('user')['Kode'] }}
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Jenis Kelamin</td>
                                            <td style="width:1%">:</td>
                                            <td>
                                                @php
                                                    $jenis1 = isset($data_akun['Jk']) && $data_akun['Jk'] == '0' ? '<span class="symbol">✓</span>' : '';
                                                    $jenis2 = isset($data_akun['Jk']) && $data_akun['Jk'] == '1' ? '<span class="symbol">✓</span>' : '';
                                                @endphp
                                                <table style="vertical-align:top; padding-top:5px;">
                                                    <tr>
                                                        <td>
                                                            <div class="label-box">
                                                                <div class="border box">@php echo $jenis1; @endphp</div> <span style="margin-left:-8px;">Lk</span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="label-box" style="margin-left: -20px;">
                                                                <div class="border box">@php echo $jenis2; @endphp</div> <span style="margin-left: -8px;">Pr</span>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Kelurahan</td>
                                            <td style="width:1%">:</td>
                                            <td>
                                                <table style="width:90%;margin:0 8px;">
                                                    <tr>
                                                        <td class="{{ !empty(session('user')['kelurahan']) ? '': 'dot' }}">
                                                            {{ session('user')['kelurahan'] }}

                                                        </td>

                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Kecamatan</td>
                                            <td style="width:1%">:</td>
                                            <td>
                                                <table style="width:90%;margin:0 8px;">
                                                    <tr>
                                                        <td class="{{ !empty(session('user')['kecamatan']) ? '': 'dot' }}">
                                                            {{ session('user')['kecamatan'] }}
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Kota</td>
                                            <td style="width:1%">:</td>
                                            <td>
                                                <table style="width:90%;margin:0 8px;">
                                                    <tr>
                                                        <td class="{{ !empty($data_akun['Kota']) ? '': 'dot' }}">
                                                            {{ $data_akun['Kota'] }}
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <!-- span -->
                            <tr>
                                <td colspan="2">
                                    <table class="child">
                                        <tr>
                                            <td>
                                                <table class="vertical-top">
                                                    <tr>
                                                        <td style="width: 23.5%">Alamat Kantor</td>
                                                        <td style="width: 1%">:</td>
                                                        <td style="width: 70%;">
                                                            <table style="width:90%;margin:0 8px;">
                                                                <tr>
                                                                    <td class="dot"></td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <table class="vertical-top">
                                                    <tr>
                                                        <td style="width: 23.5%">No. Telp Kantor/Email</td>
                                                        <td style="width: 1%">:</td>
                                                        <td style="width:70%;">
                                                            <table style="width:90%;margin:0 8px;">
                                                                <tr>
                                                                    <td class="dot"></td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <table class="vertical-top">
                                                    <tr>
                                                        <td style="width: 23.5%">Pekerjaan</td>
                                                        <td style="width: 1%">:</td>
                                                        <td style="width:70%;">
                                                            <table style="font-size:10px">
                                                                <tr>
                                                                    <td>
                                                                        <table>
                                                                            <tr>
                                                                                @php

                                                                                    foreach ($pekerjaan as $key => $value) {

                                                                                        if($data_akun['Pekerjaan']){
                                                                                            $kerjaan = explode(' ', $data_akun['Pekerjaan'])[0];
                                                                                            // die($kerjaan);
                                                                                            if(strtoupper($kerjaan) == 'TNI' || strtoupper($kerjaan) == 'POLRI'){


                                                                                                $kerjaan = 'TNI/POLRI';

                                                                                            }elseif(strtoupper($kerjaan) == 'PEG.' || strtoupper($kerjaan) == 'BUMN' || strtoupper($kerjaan) == 'BUMN' ){


                                                                                                $kerjaan = 'Peg. Negeri/Swasta';

                                                                                            }elseif (strtoupper($kerjaan) == 'PETANI' || strtoupper($kerjaan) == 'BURUH') {


                                                                                                $kerjaan = 'Petani / Buruh';


                                                                                            }elseif (strtoupper($kerjaan) == 'WIRASWASTA') {


                                                                                                $kerjaan = 'Wiraswasta';


                                                                                            }elseif (strtoupper($kerjaan) == 'MAHASISWA' ) {

                                                                                                $kerjaan = 'Mahasiswa';


                                                                                            }elseif (strtoupper($kerjaan) == 'PEDAGANG') {


                                                                                                $kerjaan = 'Pedangang';


                                                                                            // }elseif (strtoupper($kerjaan) == 'LAIN') {


                                                                                            //     $kerjaan = 'Lain - lain';


                                                                                            }else{
                                                                                                $kerjaan = 'Lain - lain';
                                                                                            }
                                                                                        }else{
                                                                                            $kerjaan = '';
                                                                                        }

                                                                                        // die(pre($kerjaan));
                                                                                        $cls = strtoupper($kerjaan) == strtoupper($value) && !empty($kerjaan) ?  "class='selected'" : '';
                                                                                        $no  = $key + 1;
                                                                                        if($key%2 == 0){

                                                                                            $td1[] = " <td style='width:4%;' $cls>$no</td>
                                                                                                    <td>$value</td>";

                                                                                        }else{

                                                                                            $td2[] = " <td style='width:4%;' $cls>$no</td>
                                                                                                        <td>$value</td>";
                                                                                        }

                                                                                    }
                                                                                    foreach($td1 as $key => $value){
                                                                                        echo $value;
                                                                                    }
                                                                                @endphp
                                                                            </tr>
                                                                            <tr>
                                                                                @php
                                                                                    foreach($td2 as $key => $value){
                                                                                        echo $value;
                                                                                    }
                                                                                @endphp
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <table class="vertical-middle">
                                        <tr>
                                            <td style="width: 23.5%">Tempat Lahir</td>
                                            <td style="width: 1%">:</td>
                                            <td style="width:70%;">
                                                <table style="width:30%; margin:0 8px;">
                                                    <tr>
                                                        <td {{  (!empty($data_akun['TempatLhr']) ? '' : 'class="dot" ') }}>
                                                            {{ $data_akun['TempatLhr'] }}
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">

                                    <table class="vertical-bottom">
                                        <tr>
                                            <td style="width: 23.5%">Tgl/Bln/Thn Kelahiran</td>
                                            <td style="width: 1%">:</td>
                                            <td style="width:70%;">

                                                            <table style="padding-top:5px;width:30%;">
                                                                    <tr>
                                                                        <td style="width:30%;" class="text-center">Tanggal</td>
                                                                        <td style="width:30%;" class="text-center">Bulan</td>
                                                                        <td style="width:30%;" class="text-center">Tahun</td>
                                                                    </tr>
                                                                    <tr>

                                                                        <td  style="width:30%;padding-top:5px;">
                                                                            <table>
                                                                                @php
                                                                                        $style_kiri = !empty($data_akun['TglLhr']) ? 'width:70%; height:15px; margin-left:8px;' : 'width:80%; height:15px; margin-left:6px;';
                                                                                        $style_kanan = !empty($data_akun['TglLhr']) ? 'width:70%; height:15px; margin-left:3px;' : 'width:80%; height:15px; margin-left:5px;';
                                                                                @endphp
                                                                                <tr>
                                                                                    <td style="width:50%; vertical-align:right">
                                                                                        <div class="border box text-center" style="@php echo $style_kiri;@endphp">
                                                                                            @php
                                                                                            echo (!empty($data_akun['TglLhr']) ? substr($data_akun['TglLhr'],0,1) : '<span style="width:50%;">&nbsp;</span>');
                                                                                            @endphp
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="border box text-center" style="@php echo $style_kanan;
                                                                                        @endphp">
                                                                                            @php
                                                                                            echo (!empty($data_akun['TglLhr']) ? substr($data_akun['TglLhr'],1,1) : '<span style="width:50%;">&nbsp;</span>');
                                                                                            @endphp
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                        </td>
                                                                        <td  style="width:30%;padding-top:5px;">
                                                                            <table>
                                                                                <tr>
                                                                                    <td style="width:50%; vertical-align:right">
                                                                                        <div class="border box text-center" style="@php echo $style_kiri;
                                                                                        @endphp">

                                                                                            @php
                                                                                            echo (!empty($data_akun['TglLhr']) ? substr($data_akun['TglLhr'],2,-3) : '<span style="width:50%;">&nbsp;</span>');
                                                                                            @endphp
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="border box text-center" style="<?php echo $style_kanan;?>">
                                                                                            @php
                                                                                            echo (!empty($data_akun['TglLhr']) ? substr($data_akun['TglLhr'],3,-2) : '<span style="width:50%;">&nbsp;</span>');
                                                                                            @endphp
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                        </td>
                                                                        <td  style="width:30%; vertical-align:top;padding-top:5px;">
                                                                            <table>
                                                                                <tr>
                                                                                    <td style="width:50%; vertical-align:right">
                                                                                        <div class="border box text-center" style="<?php echo $style_kiri;?>">
                                                                                            @php
                                                                                            echo (!empty($data_akun['TglLhr']) ? substr($data_akun['TglLhr'],4,-1) : '<span style="width:50%;">&nbsp;</span>');
                                                                                            @endphp
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="border box text-center" style="@php echo $style_kanan;@endphp">
                                                                                            @php
                                                                                            echo (!empty($data_akun['TglLhr']) ? substr($data_akun['TglLhr'],5) : '<span style="width:50%;">&nbsp;</span>');
                                                                                            @endphp
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                            </table>

                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <table class="vertical-middle">
                                        <tr>
                                            <td style="width: 35%">Penghargaan yang telah diterima</td>
                                            <td style="width: 1%">:</td>
                                            <td style="width: 64%">
                                                <div class="label-box-reset-right padding-top">
                                                    <div class="border box"></div> <span>10x</span>
                                                    <div class="border box"></div> <span>25x</span>
                                                    <div class="border box"></div> <span>50x</span>
                                                    <div class="border box"></div> <span>75x</span>
                                                    <div class="border box"></div> <span>100x</span>
                                                </div>
                                                <!-- <table style="width:90%;margin:0 8px;;vertical-align:top;padding-top:5px;">
                                                    <tr>
                                                        <td>
                                                            <div class="label-box">
                                                                <div class="border box">&nbsp;</div> <span style="margin-left:-8px;">10x</span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="label-box">
                                                                <div class="border box">&nbsp;</div> <span style="margin-left:-8px;">25x</span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="label-box">
                                                                <div class="border box">&nbsp;</div> <span style="margin-left:-8px;">50x</span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="label-box">
                                                                <div class="border box">&nbsp;</div> <span style="margin-left:-8px;">75x</span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="label-box">
                                                                <div class="border box">&nbsp;</div> <span style="margin-left:-8px;">100x</span>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </table> -->
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <table class="vertical-middle">
                                        <tr>
                                            <td style="width: 55%">Bersediakah saudara donor pada waktu bulan puasa</td>
                                            <td style="width: 1%">:</td>
                                            <td style="margin:0 8px;width:44%">
                                                <div class="label-box-reset-right padding-top">
                                                    <div class="border box"></div> <span>Ya</span>
                                                    <div class="border box"></div> <span>Tidak</span>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <table class="vertical-middle">
                                        <tr>
                                            <td style="width: 78%">Bersediakah saudara donor saat dibutuhkan untuk keperluan tertentu(di luar donor rutin)</td>
                                            <td style="width: 1%">:</td>
                                            <td style="width: 21%">
                                                <div class="label-box-reset-right padding-top">
                                                    <div class="border box"></div> <span>Ya</span>
                                                    <div class="border box"></div> <span>Tidak</span>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td id="kanan" style="vertical-align:top;" style="width:50%;">
                        <table class="child" cellspacing="0" style="padding-left:15px;vertical-align:top;">
                            <tr>
                                <td class="padding-top" style="padding-bottom:5px;"><b>DIISI OLEH ADMINISTRATOR</b></td>
                            </tr>
                            <tr>
                                <td>
                                    <table class="vertical-top">
                                        <tr>
                                            <td style="width:29%">Validasi Donor</td>
                                            <td style="width:1%">:</td>
                                            <td style="width:70%">
                                                <div class="label-box">
                                                    <div class="border box"></div> <span>Kartu donor</span>
                                                </div>
                                                <div class="label-box padding-top">
                                                    <div class="border box"></div> <span>KTP</span>
                                                </div>
                                                <div class="label-box padding-top">
                                                    <div class="border box"></div> <span>SIM</span>
                                                </div>
                                                <div class="label-box padding-top">
                                                    <div class="border box"></div> <span>Paspor</span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width:29%">Riwayat Donor Sebelumnya</td>
                                            <td style="width:1%">:</td>
                                            <td style="width:70%;">
                                                <table style="width:70%; margin:0 8px;">
                                                    <tr>
                                                        <td class="dot"></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="dot"></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="dot"></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="dot"></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="dot"></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table class="child" cellspacing="0">
                            <tr>
                                <td>
                                    <table style="width:98%" class="vertical-middle">
                                        <td style="width:26%">Donor yang terakhir tanggal</td>
                                        <td style="width:1%">:</td>
                                        <td style="width:23%" class="dot"></td>
                                    </table>
                                </td>
                                <td>
                                    <table class="vertical-middle">
                                        <td style="width:23%">Sekarang donor yang ke</td>
                                        <td style="width:1%">:</td>
                                        <td style="width:26%">
                                            <div class="label-box padding-top">
                                                <div class="border box" style="margin:0 -4px 0 0;"></div>
                                                <div class="border box" style="margin:0 -4px 0 0;"></div>
                                                <div class="border box" style="margin:0;"></div>
                                                <span>Kali</span>
                                            </div>
                                        </td>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        <table class="child">
                            <tr>
                                <td style="width:30%">&nbsp;</td>
                                <td style="width:70%">
                                    <table style="width:80%" class="vertical-middle">
                                        <td style="width:25%">Nama Petugas Admin / Paraf</td>
                                        <td style="width:1%">:</td>
                                        <td style="width:24%" class="solid"></td>
                                    </table>
                                </td>
                        </table>
                    </td>
                </tr>
            </table>
            <div class="divider"></div>
            <table class="parent vertical-top">
                <tr>
                    <td>
                        <table class="child">
                            <tr>
                                <td class="padding-top" style="padding-bottom:5px;"><b>DIISI OLEH PETUGAS HB</b></td>
                            </tr>
                            <!-- Petugas HB & Nilai Hn -->
                            <tr>
                                <td>
                                    <table class="vertical-middle label-two-table">
                                        <tr>
                                            <td>Nama Petugas Hb</td>
                                            <td>:</td>
                                            <td>
                                                <table style="width:95.5%;margin:0 8px;">
                                                    <tr>
                                                        <td class="dot"></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td>
                                    <table class="vertical-middle" style="width:35%;">
                                        <tr>
                                            <td style="width:12%;">Nilai Hb.</td>
                                            <td style="width:1%;">:</td>
                                            <td style="width:14%;">
                                                <table style="margin:0 8px;">
                                                    <tr>
                                                        <td class="dot"></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <!-- Macam Donor -->
                            <tr>
                                <td colspan="2">
                                    <table class="vertical-middle label-one-table">
                                        <tr>
                                            <td>Macam Donor</td>
                                            <td>:</td>
                                            <td>
                                                <div class="label-box-reset-right padding-top">
                                                    <div class="border box"></div> <span>Sukarela</span>
                                                    <div class="border box"></div> <span>Pengganti</span>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <!-- Metode Pengambilan Darah -->
                            <tr>
                                <td colspan="2">
                                    <table class="vertical-middle label-one-table">
                                        <tr>
                                            <td>Metode Pengambilan Darah</td>
                                            <td>:</td>
                                            <td>
                                                <div class="label-box-reset-right padding-top">
                                                    <div class="border box"></div> <span>Biasa</span>
                                                    <div class="border box"></div> <span>Aferesis</span>
                                                    <div class="border box"></div> <span>Autologus</span>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <!-- Hb Metode Kupper Sulfat -->
                            <tr>
                                <td colspan="2">
                                    <table class="vertical-top label-one-table">
                                        <tr>
                                            <td>Hb Metode Kupper Sulfat</td>
                                            <td>:</td>
                                            <td>
                                                <table>
                                                    <tr>
                                                        <td style="width:50%!important;padding-left:10px;">Berat Jenis 1.053</td>
                                                        <td style="width:50%!important;padding-left:10px;">Berat Jenis 1.062</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width:50%!important;">
                                                            <div class="label-box-reset-right padding-top">
                                                                <div class="border box"></div> <span>&gt; 12,5 gr% Tenggelam</span>
                                                            </div>
                                                        </td>
                                                        <td style="width:50%!important;">
                                                            <div class="label-box-reset-right padding-top">
                                                                <div class="border box"></div> <span>&lt; 17 gr% Mengapung</span>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width:50%!important;">
                                                            <div class="label-box-reset-right padding-top">
                                                                <div class="border box"></div> <span>= 12,5 gr% Melayang</span>
                                                            </div>
                                                        </td>
                                                        <td style="width:50%!important;">
                                                            <div class="label-box-reset-right padding-top">
                                                                <div class="border box"></div> <span>= 17 gr% Melayang</span>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width:50%!important;">
                                                            <div class="label-box-reset-right padding-top">
                                                                <div class="border box"></div> <span>&lt; 12,5 gr% Mengapung</span>
                                                            </div>
                                                        </td>
                                                        <td style="width:50%!important;">
                                                            <div class="label-box-reset-right padding-top">
                                                                <div class="border box"></div> <span>&gt; 17 gr% Tenggelam</span>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <!-- Golongan Darah -->
                            <tr>
                                <td colspan="2">
                                    <table class="vertical-middle label-one-table">
                                        <tr>
                                            <td>Golongan Darah</td>
                                            <td>:</td>
                                            <td>
                                            @php

                                            $jenisA = isset($data_akun->GolDarah) && $data_akun->GolDarah === 'A' ? 'selected' : '';
                                            $jenisB = isset($data_akun->GolDarah) && $data_akun->GolDarah === 'B' ? 'selected' : '';
                                            $jenisO = isset($data_akun->GolDarah) && $data_akun->GolDarah === 'O' ? 'selected' : '';
                                            $jenisAB = isset($data_akun->GolDarah) && $data_akun->GolDarah === 'AB' ? 'selected' : '';
                                            @endphp
                                                <div class="label-box-reset-right padding-top">
                                                    <div class="border box text-center @php echo $jenisA; @endphp">A</div>
                                                    <div class="border box text-center @php echo $jenisB; @endphp">B</div>
                                                    <div class="border box text-center @php echo $jenisO; @endphp">O</div>
                                                    <div class="border box text-center @php echo $jenisAB; @endphp">AB</div>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>

                    </td>
                    <td>
                        <table class="child" cellspacing="0" style="padding-left:15px;">
                            <tr>
                                <td class="padding-top" style="padding-bottom:5px;"><b>DIISI OLEH DOKTER</b></td>
                            </tr>
                            <!-- nama dokter -->
                            <tr>
                                <td>
                                    <table class="vertical-top label-two-table">
                                        <tr>
                                            <td>Nama Dokter</td>
                                            <td>:</td>
                                            <td>
                                                <table>
                                                    <tr>
                                                        <td class="dot"></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="dot"></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td>
                                    &nbsp;
                                </td>
                            </tr>
                            <!-- tekanan darah & denyut nadi -->
                            <tr>
                                <td>
                                    <table class="vertical-middle label-two-table">
                                        <tr>
                                            <td>Tekanan Darah</td>
                                            <td>:</td>
                                            <td>
                                                <table>
                                                    <tr>
                                                        <td class="dot"></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td>
                                    <table class="vertical-middle label-two-table">
                                        <tr>
                                            <td>Denyut Nadi</td>
                                            <td>:</td>
                                            <td>
                                                <table>
                                                    <tr>
                                                        <td class="dot"></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <!-- berat badan & tinggi badan -->
                            <tr>
                                <td>
                                    <table class="vertical-middle label-two-table">
                                        <tr>
                                            <td>Berat Badan</td>
                                            <td>:</td>
                                            <td>
                                                <table>
                                                    <tr>
                                                        <td class="dot"></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td>
                                    <table class="vertical-middle label-two-table">
                                        <tr>
                                            <td>Tinggi Badan</td>
                                            <td>:</td>
                                            <td>
                                                <table>
                                                    <tr>
                                                        <td class="dot"></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <!-- keadaan umum & suhu -->
                            <tr>
                                <td>
                                    <table class="vertical-middle label-two-table">
                                        <tr>
                                            <td>Keadaan umum</td>
                                            <td>:</td>
                                            <td>
                                                <table>
                                                    <tr>
                                                        <td class="dot"></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td>
                                    <table class="vertical-middle label-two-table">
                                        <tr>
                                            <td>Suhu</td>
                                            <td>:</td>
                                            <td>
                                                <table>
                                                    <tr>
                                                        <td class="dot"></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <!-- riwayat medis -->
                            <tr>
                                <td colspan="2">
                                    <table class="vertical-middle label-one-table">
                                        <tr>
                                            <td>Riwayat Medis</td>
                                            <td>:</td>
                                            <td>
                                                <table style="width:95.5%;margin:0 8px;">
                                                    <tr>
                                                        <td class="dot"></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <!-- catatan lain -->
                            <tr>
                                <td colspan="2">
                                    <table class="vertical-middle label-one-table">
                                        <tr>
                                            <td>Catatan lain</td>
                                            <td>:</td>
                                            <td>
                                                <table style="width:95.5%;margin:0 8px;">
                                                    <tr>
                                                        <td class="dot"></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <table class="parent vertical-middle">
                <tr>
                    <td>
                        <table class="child">
                            <tr>
                                <td>
                                    <table class="vertical-middle label-one-table">
                                        <tr>
                                            <td>Rhesus</td>
                                            <td>:</td>
                                            <td>
                                                @php
                                                $rhesusPositif = isset($data_akun['Rhesus']) && $data_akun['Rhesus'] == '+' ? 'selected' : '';
                                                $rhesusNegatif = isset($data_akun['Rhesus']) & $data_akun['Rhesus'] == '-' ? 'selected' : '';
                                                @endphp
                                                <div class="label-box-reset-right padding-top">
                                                    <div class="border box text-center @php echo $rhesusPositif;
                                                    @endphp" style="width:43px">Positif</div>
                                                    <div class="border box text-center @php echo $rhesusNegatif;
                                                    @endphp" style="width:43px">Negatif</div>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        <table class="child" style="padding-left:15px;">
                            <tr>
                                <td>
                                    <table class="vertical-middle label-one-table">
                                        <tr>
                                            <td>Ditolak / Diambil Sebanyak</td>
                                            <td>:</td>
                                            <td>
                                                <div class="inline-block padding-top" style="margin:0 8px;">
                                                    350 cc
                                                </div>
                                                <div class="inline-block padding-top" style="margin:0 8px;">
                                                    450 cc
                                                </div>
                                                <div class="inline-block padding-top" style="margin:0 8px;">
                                                    Kantong : 5 / D / T / Q
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <div class="divider"></div>
            <table class="parent">
                <tr>
                    <td style="border:none;">
                        <table class="child">
                            <tr>
                                <td>
                                    <table>
                                        <tr>
                                            <td class="padding-top"><b>DIISI OLEH PETUGAS AFTAP</b></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <table class="vertical-middle label-two-table">
                                                    <tr>
                                                        <td>Nama Petugas Aftap / Paraf</td>
                                                        <td>:</td>
                                                        <td>
                                                            <table style="width:95.5%;margin:0 8px;">
                                                                <tr>
                                                                    <td class="dot"></td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <table class="vertical-middle label-two-table">
                                                    <tr>
                                                        <td>Validasi Kantong Darah</td>
                                                        <td>:</td>
                                                        <td>
                                                            <table style="width:95.5%;margin:0 8px;">
                                                                <tr>
                                                                    <td class="dot"></td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <table class="vertical-middle label-two-table">
                                                    <tr>
                                                        <td>Jam Penusukan</td>
                                                        <td>:</td>
                                                        <td>
                                                            <table style="width:95.5%;margin:0 8px;">
                                                                <tr>
                                                                    <td class="dot"></td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td>
                                    <table class="vertical-middle label-one-table">
                                        <tr>
                                            <td>No. Kantong</td>
                                            <td>:</td>
                                            <td class="padding-top">
                                                <div class="border" style="height:45;width: 133px;margin: 4px auto;">
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        <table class="child" cellspacing="0" style="padding-left:15px;vertical-align:top;">
                            <tr>
                                <td class="padding-top" style="padding-bottom:5px;"><b>Reaksi Donor</b></td>
                            </tr>
                            <tr>
                                <td>
                                <table class="vertical-middle label-one-table">
                                    <tr>
                                        <td>Pengambilan</td>
                                        <td>:</td>
                                        <td>
                                            <div class="label-box-reset-right padding-top inline-block">
                                                <span class="symbol" style="font-size:8pt;">○</span> <span>Lancar</span>
                                            </div>
                                            <div class="label-box-reset-right padding-top inline-block">
                                                <span class="symbol" style="font-size:8pt;">○</span> <span>Tidak Lancar</span>
                                            </div>
                                            <div class="label-box-reset-right padding-top inline-block">
                                                <span class="symbol" style="font-size:8pt;">○</span> <span>Stop <?php echo str_pad('',20,"."); ?> cc</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Reaksi Donor</td>
                                        <td>:</td>
                                        <td>
                                            <div class="label-box-reset-right padding-top inline-block">
                                                <span class="symbol" style="font-size:8pt;">○</span> <span>Hematoma</span>
                                            </div>
                                            <div class="label-box-reset-right padding-top inline-block">
                                                <span class="symbol" style="font-size:8pt;">○</span> <span>Pusing</span>
                                            </div>
                                            <div class="label-box-reset-right padding-top inline-block">
                                                <span class="symbol" style="font-size:8pt;">○</span> <span>Muntah</span>
                                            </div>
                                            <div class="label-box-reset-right padding-top inline-block">
                                                <span class="symbol" style="font-size:8pt;">○</span> <span>Lain - lain <?php echo str_pad('',20,"."); ?></span>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>

        </div>


    <div class="flyleaf"></div>

        <!-- halaman 2 -->
     <div id="page-2" style="background-color: white; z-index: 2;">

         <!-- halaman 2 -->
        <!-- sub header lampiran -->
        <div id="subHeader" style="position: relative; font-size:8pt;">
            <table width="100%">
                <tbody>
                    <tr>
                        <td>Lampiran 1: Formulir Kuesioner dan <i>Informed Consent</i> Donor</td>
                    </tr>
                    <tr>
                        <td class="text-center">UNIT DONOR DARAH PMI KABUPATEN TANGERANG</td>
                    </tr>
                    <tr>
                        <td class="text-center">Selamat datang, terima kasih atas kesediaan Anda meluangkan waktu untuk menyumbankan darah</td>
                    </tr>
                    <tr>
                        <td class="text-center">Mohon formulir ini diisi dengan sejujurnya untuk keselamatan Anda dan calon penerima darah Anda</td>
                    </tr>
                </tbody>
            </table>
            <!-- logo  -->
            <div style="position: absolute; top:0; right:0;">
                <img style="width:116px;" src="data:image/png;base64,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" alt="">
            </div>
            <!-- garis batas -->
            <div class="divider"></div>
        </div>
        <!-- Kuesioner -->
        <div id="kuesioner">
            <table class="parent">
                <tr>
                    <td class="padding-top"><b>KUESIONER DONOR</b></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>
                        <table class="child" cellspacing="0">
                            <tr>
                                <th class="question">Beri tanda <span class="symbol">✓</span>(ceklis) pada jawaban Anda</th>
                                <th class="choose text-center">Ya</th>
                                <th class="choose text-center">Tidak</th>
                                <th class="choose text-center">Diisi Petugas</th>
                            </tr>
                            <!-- area konten -->
                            @php
                            // if(!empty($jawaban1)){

                            //     $symbol = '<span class="symbol">✓</span>';
                            //      foreach ($jawaban1 as $key => $value) {
                            //         if(!empty($value->kategori_judul) && $jawaban1[($key - 1)]->kategori_judul != $value->kategori_judul){
                            //             echo '<tr>
                            //                     <td colspan="4" class="separator">'.$value->kategori_judul.'</td>
                            //                 </tr>';
                            //         }



                            //         $symbol_ya = $value->jawaban_pertanyaan == 'YA' ? '<span class="symbol">✓</span>' : '';
                            //         $symbol_tidak = $value->jawaban_pertanyaan == 'TIDAK' ? '<span class="symbol">✓</span>' : '';


                            //         echo '<tr>
                            //                 <td class="question">
                            //                     <div><span><p>'.($key + 1).'. '.$value->pertanyaan_isi.'</p></span></div>
                            //                     <span class="clear"></span>
                            //                 </td>
                            //                 <td class="choose"> <div class="border box">'.$symbol_ya.'</div> </td>
                            //                 <td class="choose"> <div class="border box">'.$symbol_tidak.'</div></td>
                            //                 <td class="choose"> <div class="border box"></div> </td>
                            //             </tr>';
                            //     }

                            // }else{

                                foreach ($pertanyaan1 as $key => $value) {
                                    // dd($value);
                                    if(!empty($value->kategori_judul) && $pertanyaan1[($key - 1)]->kategori_judul != $value->kategori_judul){
                                        echo '<tr>
                                                <td colspan="4" class="separator">'.$value->kategori_judul.'</td>
                                            </tr>';
                                    }

                                    if(!empty(session('user')['Kode'])){

                                        if($value->jawaban_pertanyaan !== null){

                                            $symbol_ya = strtoupper($value->jawaban_pertanyaan) === 'YA' ? '<span class="symbol">✓</span>' : '';
                                            $symbol_tidak = strtoupper($value->jawaban_pertanyaan) === 'TIDAK' ? '<span class="symbol">✓</span>' : '';

                                        }else{

                                            $symbol_ya = null;
                                            $symbol_tidak = null;

                                        }



                                    }else{
                                        $symbol_ya      = null;
                                        $symbol_tidak   = null;
                                    }


                                    echo '<tr>
                                            <td class="question">
                                                <div><span><p>'.($key + 1).'. '.$value->pertanyaan_isi.'</p></span></div>
                                                <span class="clear"></span>
                                            </td>
                                            <td class="choose"> <div class="border box">'.$symbol_ya.'</div> </td>
                                            <td class="choose"> <div class="border box">'.$symbol_tidak.'</div></td>
                                            <td class="choose"> <div class="border box"></div> </td>
                                        </tr>';
                                }

                            // }



                            @endphp
                            <!--  -->
                        </table>
                    </td>
                    <td style="vertical-align: top; padding-left:15px">
                        <table class="child" cellspacing="0">
                            <tr>
                                <th class="question">&nbsp;</th>
                                <th class="choose text-center">Ya</th>
                                <th class="choose text-center">Tidak</th>
                                <th class="choose text-center">Diisi Petugas</th>
                            </tr>
                            <!-- area konten -->
                            @php
                            // if(!empty($jawaban2)){

                            //     foreach ($jawaban2 as $key2 => $value) {
                            //         if($key2 > '0' ){

                            //             if(!empty($value->kategori_judul) && $jawaban2[($key2 - 1)]->kategori_judul != $value->kategori_judul){
                            //                 echo '<tr>
                            //                         <td colspan="4" class="separator">'.$value->kategori_judul.'</td>
                            //                     </tr>';
                            //             }

                            //         }else{

                            //             if(!empty($value->kategori_judul)){
                            //                 echo '<tr>
                            //                         <td colspan="4" class="separator">'.$value->kategori_judul.'</td>
                            //                     </tr>';
                            //             }

                            //         }

                            //         $symbol_ya = $value->jawaban_pertanyaan == 'YA' ? '<span class="symbol">✓</span>' : '';
                            //         $symbol_tidak = $value->jawaban_pertanyaan == 'TIDAK' ? '<span class="symbol">✓</span>' : '';


                            //         echo '<tr>
                            //                 <td class="question">
                            //                     <div><span><p>'.($key + ($key2 + 2)).'. '.$value->pertanyaan_isi.'</p></span></div>
                            //                     <span class="clear"></span>
                            //                 </td>
                            //                 <td class="choose"> <div class="border box">'.$symbol_ya.'</div> </td>
                            //                 <td class="choose"> <div class="border box">'.$symbol_tidak.'</div> </td>
                            //                 <td class="choose"> <div class="border box"></div> </td>
                            //             </tr>';
                            //     }

                            // }else{

                                foreach ($pertanyaan2 as $key2 => $value) {
                                    if($key2 > '0' ){

                                        if(!empty($value->kategori_judul) && $pertanyaan2[($key2 - 1)]->kategori_judul != $value->kategori_judul){
                                            echo '<tr>
                                                    <td colspan="4" class="separator">'.$value->kategori_judul.'</td>
                                                </tr>';
                                        }

                                    }else{

                                        if(!empty($value->kategori_judul)){
                                            echo '<tr>
                                                    <td colspan="4" class="separator">'.$value->kategori_judul.'</td>
                                                </tr>';
                                        }

                                    }

                                    if(!empty(session('user')['Kode'])){

                                        // $symbol_ya = $value->jawaban_pertanyaan == 'YA' ? '<span class="symbol">✓</span>' : '';
                                        // $symbol_tidak = empty($value->jawaban_pertanyaan) ||$value->jawaban_pertanyaan == 'TIDAK' ? '<span class="symbol">✓</span>' : '';
                                        if($value->jawaban_pertanyaan !== null){

                                            $symbol_ya = strtoupper($value->jawaban_pertanyaan) == 'YA' ? '<span class="symbol">✓</span>' : '';
                                            $symbol_tidak = strtoupper($value->jawaban_pertanyaan) == 'TIDAK' ? '<span class="symbol">✓</span>' : '';

                                        }else{

                                            $symbol_ya = null;
                                            $symbol_tidak = null;

                                        }

                                    }else{
                                        $symbol_ya      = null;
                                        $symbol_tidak   = null;
                                    }



                                    echo '<tr>
                                            <td class="question">
                                                <div><span><p>'.($key + ($key2 + 2)).'. '.$value->pertanyaan_isi.'</p></span></div>
                                                <span class="clear"></span>
                                            </td>
                                            <td class="choose"> <div class="border box">'.$symbol_ya.'</div> </td>
                                            <td class="choose"> <div class="border box">'.$symbol_tidak.'</div> </td>
                                            <td class="choose"> <div class="border box"></div> </td>
                                        </tr>';
                                }
                            // }

                            @endphp
                            <!--  -->
                        </table>
                        <table>
                            <tr>
                                <td style="padding-top:10px; border:none">
                                @php
                                    if(!empty(session('user')['Kode'])){
                                        echo $barcode;

                                    //     echo '<img alt="'.$pendonor['Kode'].'" src="'.$_SERVER['DOCUMENT_ROOT']. str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']).'assets/barcode.php?size=20&text='.$pendonor['Kode'].'&codetype=code128&sizefactor=1'.'">
                                    // <p style="margin-top : 5px">'.$pendonor['Kode'].'</p>';
                                    //     echo '<img alt="'.$pendonor['Kode'].'" src="'.base_url().'assets/barcode.php?size=20&text='.$pendonor['Kode'].'&codetype=code128&sizefactor=1'.'" style="padding-top: 5px;padding-left:15%;height:auto">
                                    // <p style="text-align:center">'.$pendonor['Kode'].'</p>';

                                    }

                                    // $filepath="", $text="0", $size="20", $orientation="horizontal", $code_type="code128", $print=false, $SizeFactor=1
                                @endphp
                                </td>
                                <td>&nbsp;</td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <div class="divider"></div>
            <!-- table footer tanda tangan -->
            <table class="child">
                <tr>
                    <td width="50%" class="separator" colspan="2" style="padding-top:4px;"><b>INFORMED CONSENT DONOR</b></td>
                    <td width="25%">&nbsp;</td>
                    <td width="25%" class="padding-top text-center">*Ditandatangani setelah pemeriksaan Donor</td>
                </tr>
                <tr>
                    <td colspan="2" width="50%" style="padding-right: 14px;">
                        <div class="border" style="padding: 5px;font-size:6.85pt;" class="text">
                            <p>Yth. Unit Donor Darah...</p>
                            <p>Saya telah mendapatkan dan membaca semua informasi yang diberikan serta menjawab pertanyaan dengan jujur.</p>
                            <p>Saya mengerti dan bersedia menyumbangkan darah dengan volume sesuai standar yang diberlakukan
                                dan setuju diambil contoh darahnya untuk keperluan pemeriksaan laboratorium berupa uji golongan
                                darah, HIV, Hepatitis B, Hepatitis C, Sifilis dan Infeksi lainnya yang diperlukan saya serta untuk
                                kepentingan penelitian. Bila ternyata hasil pemeriksaan laboratorium perlu ditindaklanjuti, maka
                                saya setuju untuk diberi kabar tertulis.
                            </p>
                            <p>
                                Jika komponen plasma tidak terpakai untuk transfusi, saya setuju dapat dijadikan produk plasma untuk pengobatan.
                            </p>
                        </div>
                    </td>
                    <td width="25%" align="center" class="text-center">
                        Tanda Tangan Dokter
                        <div class="border" style="padding: 6px;height:72px;width: 150px;margin: 0 auto;">
                        </div>
                    </td>
                    <td width="25%" class="text-center">
                        Tanda Tangan Donor
                        <div class="border" style="padding: 6px;height:72px;width: 150px;margin: 0 auto;">
                        </div>
                    </td>
                </tr>
            </table>
        </div>

    </div>

</body>

</html>
