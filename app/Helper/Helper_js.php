<?php

namespace App\Helper;

use Illuminate\Support\Facades\DB;

class Helper_js
{
    public static function use_js($select)
    {
        // dd($select);
        $arr_result = [];
        if (count($select) > 0) {
            $data_js = [
                'chart' => [
                    asset('assets_admin/vendor/chart.js/Chart.min.js'),
                    asset('assets_admin/js/demo/chart-area-demo.js'),
                    asset('assets_admin/js/demo/chart-pie-demo.js'),
                ],
                'datatable' => [
                    asset('assets_admin/vendor/datatables/jquery.dataTables.min.js'),
                    asset('assets_admin/vendor/datatables/dataTables.bootstrap4.min.js')
                ],
                'map' => [
                    'https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js',
                    'https://maps.googleapis.com/maps/api/js?key=AIzaSyCsqsMHuSOfFZCJex4uY1jF8g-ao_Nntto&callback=myMap',
                    'http://maps.googleapis.com/maps/api/js?sensor=false'
                ]
            ];

            foreach ($select as $key => $value) {
                $arr_result[] = $data_js[$value];
            }
        }

        return $arr_result;
    }
}
