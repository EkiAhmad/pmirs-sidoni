<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/origin', function () {
    // return view('welcome');
    return view('landing/base');
});

Route::get('/', ['as' => 'index', 'uses' => 'Landing\LandingController@index']);
Route::get('/mitra', ['as' => 'mitra', 'uses' => function () {
    return view('admin.login');
}]);


// Route::group(['prefix' => 'auth', 'as' => 'auth', 'namespace' => 'Auth'], function () {
//     Route::get('', ['as' => '/', 'uses' => function () {
//         echo 'Connected';
//     }]);
//     Route::post('login', ['as' => 'login', 'uses' => 'LoginController@proses_login']);
// });



Route::group([
    'as'    => 'mitra',
    'prefix' => 'mitra',
    'namespace' => 'Mitra'
], function ($router) {

    Route::get('/login', ['as' => 'login', 'uses' => function () {
        return view('admin.login');
    }]);

    Route::get('/register', ['as' => 'register', 'uses' => function () {
        return view('admin.register');
    }]);
    Route::match(['post', 'get'], 'post-registration', ['as' => 'post-registration', 'uses' => 'Login_rs_controller@postRegistration']);
    Route::match(['post', 'get'], 'postLogin', ['as' => 'postLogin', 'uses' => 'Login_rs_controller@postLogin']);

    Route::get('/dashboard/origin', function () {
        return view('admin.base');
    });

    //prefix routes
    Route::group([
        'as' => 'dashboard',
        'prefix' => 'dashboard',
    ], function ($router) {

        Route::get('/', ['as' => 'index', 'uses' => 'DashboardController@index']);
    });



    //darah
    Route::group([
        'as' => 'darah',
        'prefix' => 'darah',
        'namespace' => 'Darah'
    ], function ($router) {

        Route::get('/stock', ['as' => 'stock', 'uses' => 'StockDarahController@index']);
        Route::get('/order', ['as' => 'order', 'uses' => 'OrderDarahController@index']);
    });


    //tracking
    Route::group([
        'as' => 'track',
        'prefix' => 'track',
        'namespace' => 'Track'
    ], function ($router) {

        Route::get('/', ['as' => 'index', 'uses' => 'TrackingController@index']);
    });
});

// Route::get('pendonor/login', function () {
//     return view('pendonor/login');
// });




Route::group([
    'as'    => 'pendonor.',
    'prefix' => 'pendonor',
    'namespace' => 'Pendonor'
], function ($router) {
    //aauth
    Route::group([
        'as'    => 'auth',
        'prefix' => 'auth',
    ], function ($router) {

        Route::get(
            'login',
            ['as' => 'login', 'uses' => 'AuthController@index']
        );
        Route::match(['post', 'get'], 'checkemail', ['as' => 'checkemail', 'uses' => 'AuthController@checkEmail']);

        Route::match(['post', 'get'], 'proses_login', ['as' => 'proses_login', 'uses' => 'AuthController@proses_login']);
        Route::get(
            'register',
            ['as' => 'register', 'uses' => 'AuthController@page_register']
        );
        Route::get(
            'lupa_sandi',
            ['as' => 'lupa_sandi', 'uses' => 'AuthController@hal_lupa_sandi']
        );
        Route::get('kata_sandi_baru', function () {
            return view('pendonor.kata_sandi_baru');
        });
        Route::match(['post', 'get'], 'konfirmasi_lupa_sandi', ['as' => 'konfirmasi_lupa_sandi', 'uses' => 'AuthController@konfirmasi_lupa_password']);
        Route::match(['post', 'get'], 'send_email', ['as' => 'send_email', 'uses' => 'AuthController@send']);
        // Route::match(['post', 'get'], 'update_password', ['as' => 'update_password', 'uses' => 'AuthController@update_password']);
        Route::get(
            'update_password',
            ['as' => 'update_password', 'uses' => 'AuthController@hal_update_password']
        );
        Route::match(['post', 'get'], 'proses_register', ['as' => 'proses_register', 'uses' => 'AuthController@register']);
    });

    //cari
    Route::group(['middleware' => ['prevent-back-history', 'loguser']], function () {
        Route::group(
            [
                'as'    => 'cari',
                'prefix' => 'cari',
            ],
            function () {

                Route::get('/', ['as' => '', 'uses' => 'CariPendonorController@index']);
                Route::match(['post', 'get'], '/data', ['as' => 'data', 'uses' => 'CariPendonorController@data']);
            }
        );
        //cari
        Route::group(
            [
                'as'    => 'barcode',
                'prefix' => 'barcode',
            ],
            function () {

                Route::get('/', ['as' => '', 'uses' => 'CariPendonorController@gen_barcode']);
            }
        );
        //kegiatan
        Route::group(
            [
                'as'    => 'kegiatan',
                'prefix' => 'kegiatan',
            ],
            function () {

                Route::get('/', ['as' => '', 'uses' => 'KegiatanController@index']);
                Route::get('/data', ['as' => 'data', 'uses' => 'KegiatanController@data']);
                Route::get('/persetujuan', ['as' => 'persetujuan', 'uses' => 'KegiatanController@persetujuan']);
                Route::get('/anamnesa', ['as' => 'anamnesa', 'uses' => 'KegiatanController@anamnesa']);
            }
        );

        Route::group(
            [
                'as'    => 'anamnesa',
                'prefix' => 'anamnesa',
            ],
            function () {

                Route::get('/{slug}/{id}', ['as' => '', 'uses' => 'AnamnesaController@index']);
                Route::match(['post', 'get'], '/getdata', ['as' => 'getdata', 'uses' => 'AnamnesaController@action_anamnesa']);
                // Route::get('/data', ['as' => 'data', 'uses' => 'AnamnesaController@data']);
            }
        );


        Route::group(
            [
                'as'    => 'info',
                'prefix' => 'info',
            ],
            function () {

                Route::get('/', ['as' => '', 'uses' => 'InfoController@index']);
                Route::get('/data', ['as' => 'data', 'uses' => 'InfoController@data']);
            }
        );

        Route::group(
            [
                'as'    => 'stok',
                'prefix' => 'stok',
            ],
            function () {

                Route::get('/', ['as' => '', 'uses' => 'StockDarahController@index']);
                Route::get('/data', ['as' => 'data', 'uses' => 'StockDarahController@data']);
            }
        );

        Route::group(
            [
                'as'    => 'agenda',
                'prefix' => 'agenda',
            ],
            function () {

                Route::get('/', ['as' => '', 'uses' => 'AgendaController@index']);
                Route::get('/data', ['as' => 'data', 'uses' => 'AgendaController@data']);
                Route::post('/cancel', ['as' => 'data', 'uses' => 'AgendaController@cancel']);
                Route::get('/print', ['as' => 'data', 'uses' => 'AgendaController@print_anamnesa']);
                Route::get('/cetak_anamnesa', ['as' => 'data', 'uses' => 'AgendaController@data_anamnesa']);
            }
        );

        Route::group(
            [
                'as'    => 'profile',
                'prefix' => 'profile',
            ],
            function () {

                Route::get('/', ['as' => '', 'uses' => 'ProfileController@index']);
                Route::get('/data', ['as' => 'data', 'uses' => 'ProfileController@data']);
                Route::get('/riwayat', ['as' => 'riwayat', 'uses' => 'ProfileController@get_riwayat']);
                Route::match(['post', 'get'], '/ganti_password', ['as' => 'ganti_password', 'uses' => 'ProfileController@ganti_password']);
                Route::match(['post', 'get'], '/ganti_profil', ['as' => 'ganti_profil', 'uses' => 'ProfileController@ganti_profil']);
            }
        );
    });

    //tracking
    Route::group([
        'as' => 'track',
        'prefix' => 'track',
        'namespace' => 'Track'
    ], function ($router) {

        Route::get('/', ['as' => 'index', 'uses' => 'TrackingController@index']);
    });
});
Route::get(
    'pendonor/auth/logout',
    [
        'as' => 'logout', 'uses' => 'Pendonor\AuthController@logout'
    ]
);
// Auth::routes();
// Route::group(['middleware' => ['preventbackbutton','auth']],function(){
//     //
//     Route::get('pendonor/kegiatan', 'Pendonor\KegiatanController@index');
//     Route::get('pendonor/agenda', 'Pendonor\AgendaController@index');
// });

// Route::post('login', 'LoginController@')
