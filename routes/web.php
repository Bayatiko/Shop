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

Route::get('/','IndexController@takeAll');
Route::get('/addtocart/{id}','AddToCartController@baseWork');
Route::get('/showmycart','MyCartController@cart');
Auth::routes();
Route::get('/home','HomeController@index');
Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');
Route::prefix('admin')->group(function(){
Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get('/','AdminController@index')->name('admin.dashboard');
Route::get('/logout','Auth\AdminLoginController@logout')->name('admin.logout');
//Password reset
Route::post('/password/email','Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('/password/reset','Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::put('/password/reset','Auth\AdminResetPasswordController@reset');
Route::put('/password/reset/{token}','Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');     
});
Route::get('/delete/{id}',
['uses' => 'MyCartController@delete']);
Route::get('/category/{id}','CategoryController@Categoryproducts');
