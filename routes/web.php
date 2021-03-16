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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin/home', 'AdminController@index');
Route::get('admin', 'admin\LoginController@showlogin')->name('admin.login');

Route::post('admin', 'admin\LoginController@login');


Route::get('/addproduct', 'HomeController@product')->name('addproduct');
Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');
Route::get('/showproduct', 'ProducsController@showproduct')->name('showproduct');
Route::get('/addincome', 'CustomerController@customer')->name('addincome');
Route::get('/allincome', 'CustomerController@allincome')->name('allincome');
Route::get('/addcost', 'CostController@addcost')->name('addcost');
Route::get('/showcost', 'CostController@showcost')->name('showcost');
Route::get('/profile', 'CustomerController@profile')->name('profile');
Route::get('/editprofile', 'CustomerController@editprofile')->name('editprofile');
Route::get('editcustomer/{id}','CustomerController@editcustomer');
//form

Route::post('/addproduct', 'ProducsController@addproduct')->name('addproduct');
Route::post('/addcustomer', 'CustomerController@addcustomer')->name('addcustomer');
Route::post('/addspending', 'CostController@spending')->name('addspending');
Route::post('/report', 'CustomerController@report')->name('report');
