<?php

Route::redirect('/', '/login');
 
// Auth Jamaah
Route::get('login/jamaah', 'AuthController@loginJamaah');
Route::post('login/jamaah', 'AuthController@loginProcessJamaah');
Route::get('register/jamaah', 'AuthController@jamaahRegister');
Route::post('register/jamaah', 'AuthController@jamaahProcess');

// Auth Pengurus Dan Admin
Route::get('/login', 'AuthController@login');
Route::post('/login', 'AuthController@loginProcess');
Route::get('/logout', 'AuthController@logout');

// Admin Routing Endpoint
Route::group(['middleware' => 'auth.session', 'prefix' => 'admin',  'namespace' => 'Admin2'], function () use($router) {
	Route::get('/', 'HomeController@index');

    //Settings Masjid
    Route::get('setting-masjid', 'DataMasjidController@index'); 
    Route::post('setting-masjid', 'DataMasjidController@addProcess'); 
    Route::post('setting-masjid/update', 'DataMasjidController@updateData'); 

    // View Agenda
    Route::get('agenda/view', 'AgendaViewController@index');
    
    // Get File
    Route::get('agenda/{name}', 'AgendaViewController@fotoGallery');

    //Pemasukan
    Route::get('pemasukan', 'KasController@pemasukan');
    Route::post('pemasukan', 'KasController@addPemasukan');
    
    //Pengerluaran  
    Route::get('pengeluaran', 'KasController@pengeluaran');
    Route::post('pengeluaran', 'KasController@addPengeluaran');

    // Data Jamaah
    Route::get('jamaah', 'JamaahController@dataJamaah');
    Route::get('tabungan', 'JamaahController@tabunganJamaah');
    Route::get('jamaah/{id_users}', 'JamaahController@editJamaah');
    Route::post('jamaah/{id_users}', 'JamaahController@editJamaahProcess');
    Route::get('absensi', 'JamaahController@absensi');

    // Reporting
    Route::get('reporting', 'ReportingController@reportKeuangan');
    Route::get('reporting-general', 'ReportingController@generalReport');
    
    // Kotak Amal dan Kotak Amal Yatim Piatu
    Route::get('kotak-amal', 'KasController@kotakAmal');
    Route::get('kotak-amal-yatim', 'KasController@kotakAmalYatim');

    // Zakat Infaq
    Route::get('zakat-infaq', 'ZakatController@index');
    Route::get('sadaqah', 'ZakatController@sadaqah');

    //Donatur
    Route::get('management-donatur', 'DonaturController@managementDonatur');
    Route::get('donatur', 'DonaturController@donatur');

    Route::resources([
        'agenda' => 'AgendaController',
        'dkm' => 'DKMController',
        'berkas' => 'BerkasController',
        'fasilitas' => 'FasilitasController',
        'coa' => 'CoaController',
        'yatim-piatu' => 'YatimController',
        'duafa' => 'DuafaController'
    ]);
    
});

//Landig Page
Route::get('/home', 'AuthController@landing');
// Kota
Route::get('provinsi/{id_kota}', 'Admin2\DataMasjidController@kota');