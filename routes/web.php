<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', 'RedirectController@index');

Auth::routes(['verify' => true]);

Route::get('/test', function () {
    return view('test');
});

Route::group(['middleware' => ['auth', 'verified']], function () {
    /** Admin Controller **/
    Route::get('/admin', 'AdminController@index')->name('admin');
    Route::post('/semak', 'AdminController@semak')->name('admin.semak');
    Route::post('/update', 'AdminController@update')->name('admin.update');
    Route::delete('/deleteAcc/{id}', 'AdminController@deleteAcc')->name('home.deleteAcc');

    /** Landing Page **/
    Route::get('/home', 'RedirectController@home')->name('home');

    /** Mobilepreneur Controller */
    Route::get('/sptp', 'MobileController@index')->name('mobile');
    Route::post('/sptp-storePeribadi', 'MobileController@storePeribadi')->name('mobile.storePeribadi');
    Route::post('/sptp-storePerniagaan', 'MobileController@storePerniagaan')->name('mobile.storePerniagaan');
    Route::post('/sptp-storePinjaman', 'MobileController@storePinjaman')->name('mobile.storePinjaman');
    Route::delete('/sptp-deleteGambar/{id}', 'MobileController@deleteGambar')->name('mobile.deleteGambar');
    Route::delete('/sptp-deleteKP/{id}', 'MobileController@deleteKP')->name('mobile.deleteKP');
    Route::delete('/sptp-deleteKPP/{id}', 'MobileController@deleteKPP')->name('mobile.deleteKPP');
    Route::delete('/sptp-deleteSSM/{id}', 'MobileController@deleteSSM')->name('mobile.deleteSSM');
    Route::delete('/sptp-deleteBank/{id}', 'MobileController@deleteBank')->name('mobile.deleteBank');
    Route::delete('/sptp-deleteBankComp/{id}', 'MobileController@deleteBankComp')->name('mobile.deleteBankComp');
    Route::delete('/sptp-deleteBil/{id}', 'MobileController@deleteBil')->name('mobile.deleteBil');
	Route::delete('/sptp-deleteRK/{id}', 'MobileController@deleteRK')->name('mobile.deleteRK');
    Route::get('ajaxdata/sptp-getCawangan', 'MobileController@getCawangan')->name('mobile.getCawangan');
    Route::get('ajaxdata/sptp-getAktiviti', 'MobileController@getAktiviti')->name('mobile.getAktiviti');
    Route::get('/sptp-status', 'MobileController@status')->name('mobile.status');
});