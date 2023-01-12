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

// Route::get('/admin', function () {
//     return view('master.master-admin');
// });



Route::get('/contact', 'UserController@contact');
Route::post('/save', 'UserController@save');
Route::get('/home', 'UserController@home');
Route::get('/service', 'UserController@service');
Route::get('/blog', 'UserController@blog');
Route::get('/', 'UserController@home');
Route::post('/input', 'UserController@input');
Route::get('/detail/{judul}', 'UserController@detail');

Route::get('/admin/edit/{id}', 'HomeController@edit')->name('edit');
Route::get('/admin/delete/{id}', 'HomeController@delete')->name('delete');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/footer', 'HomeController@footer')->name('footer');
Route::get('/admin/editfooter/{id}', 'HomeController@editfooter')->name('editfooter');
Route::get('/admin/blog', 'HomeController@blog')->name('blog');
Route::get('/admin/mailbox', 'HomeController@mailbox')->name('mailbox');
Route::get('/admin/add', 'HomeController@add');
Route::get('/admin/blog', 'HomeController@blog')->name('blog');
Route::post('/admin/edit_process', 'HomeController@edit_process')->name('edit_process');
Route::post('/admin/editfooter_process', 'HomeController@editfooter_process')->name('editfooter_process');
Route::post('/add_process', 'HomeController@add_process');
Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);
Route::get('/admin/logoheader', 'HomeController@logo')->name('logoheader');
Route::post('/logo_process', 'HomeController@logo_process')->name('logo_process');
Route::get('/admin/sosmed', 'HomeController@sosmed')->name('sosmed');
Route::post('/sosmed_process', 'HomeController@sosmed_process')->name('sosmed_process');
Route::get('/admin/sosmed_delete/{logo}', 'HomeController@sosmed_delete')->name('sosmed_delete');
Route::get('/admin/logo_delete/{id}', 'HomeController@logo_delete')->name('logo_delete');
Route::get('/admin/logoheader', 'HomeController@logo')->name('logo');
Route::post('/logo_process', 'HomeController@logo_process')->name('logo_process');
Route::get('/admin/service', 'HomeController@service')->name('service');
Route::post('/service_process', 'HomeController@service_process')->name('service_process');
Route::get('/admin/service_delete/{gambar}', 'HomeController@service_delete')->name('service_delete');
Route::get('/admin/address', 'HomeController@address')->name('address');
Route::post('/address_process', 'HomeController@address_process')->name('address_process');
Route::get('/admin/address_delete/{gambar}', 'HomeController@address_delete')->name('address_delete');
Route::get('/admin/addressadd', 'HomeController@addressadd')->name('addressadd');
Route::get('/admin/sosmedadd', 'HomeController@sosmedadd')->name('sosmedadd');
Route::get('/admin/serviceadd', 'HomeController@serviceadd')->name('serviceadd');
