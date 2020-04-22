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

Route::post('dangnhap',[
	'as' => 'postLogin',
	'uses' => 'DangNhap@Login'
]);

Route::post('register',[
	'as' => 'postRegister',
	'uses' => 'DangKy@Register'
]);

Route::get('login',function() {
	return view('form-login');
});

Route::get('register',function() {
	return view('form-register');
});

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/','QuanLiLoaiSP@getLoai');

Route::get('home','QuanLiLoaiSP@getLoai');

Route::get('logout','DangNhap@Logout');

//---------------Admin--------------------

Route::group(['prefix'=>'admin'], function() {
	Route::group(['prefix'=>'users'], function() {

		Route::post('search', [
				'as' => 'search',
				'uses' => 'QuanLiUsers@searchUser'
			]);

		Route::get('quanliusers', 'QuanLiUsers@show');

		Route::get('insert', 'QuanLiUsers@formInsert');

		Route::post('insert', 'QuanLiUsers@insertUser');

		Route::get('update/{id}', 'QuanLiUsers@getUpdate');

		Route::post('update/{id}', 'QuanLiUsers@postUpdate');

		Route::get('delete/{id}', 'QuanLiUsers@deleteUser');

	});
});

Route::group(['prefix'=>'admin'], function() {
	Route::group(['prefix'=>'loaisanpham'], function() {

		Route::get('quanliloai', 'QuanLiLoaiSP@showLoai');

		Route::get('insert', 'QuanLiLoaiSP@formInsert');

		Route::post('insert', 'QuanLiLoaiSP@insertLoai');

		Route::get('delete/{id}', 'QuanLiLoaiSP@deleteLoai');

		Route::get('update/{id}', 'QuanLiLoaiSP@getUpdate');

		Route::post('update/{id}', 'QuanLiLoaiSP@postUpdate');

	});
});


/*-----------------USER-------------------------------*/
Route::group(['prefix'=>'user'], function() {

	Route::get('repass/{id}','Users@getRePass');

	Route::post('repass/{id}','Users@postRePass');
	
});