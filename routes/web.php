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

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'web'], function () {

    Route::prefix()->group(function () {
        Route::get('/', 'HomeController@index')->name('home');

        // Authentication Routes...
        Route::get('/dang-nhap', 'Auth\LoginController@showLoginForm')->name('user.login');
        Route::post('/dang-nhap', 'Auth\LoginController@login')->name('user.login.submit');
        Route::post('/dang-xuat', 'Auth\LoginController@logout')->name('user.logout');

        // Registration Routes...
        Route::get('/dang-ki', 'Auth\RegisterController@showRegistrationForm')->name('user.register');
        Route::post('/dang-ki', 'Auth\RegisterController@register')->name('user.register.submit');

        // Password Reset Routes...
        Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
        Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
        Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
        Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('user.password.request');;

        Route::get('/', 'HomeController@index')->name('home');
    });

    Route::prefix('quan-tri')->group(function () {
        Route::get('/', 'Backend\AdminHomeController@index')->name('admin.dashboard');

        Route::get('/dang-nhap', 'Auth\Admin\AdminLoginController@showLoginForm')->name('admin.login');
        Route::post('/dang-nhap', 'Auth\Admin\AdminLoginController@login')->name('admin.login.submit');
        Route::get('/dang-xuat', 'Auth\Admin\AdminLoginController@logout')->name('admin.logout');

        Route::get('/nuoc-hoa/nhom-huong', 'Backend\Tables\IncenseController@index')->name('admin.perfume.incense.index');
        Route::get('/nuoc-hoa/nhom-huong/loading_incense', 'Backend\Tables\IncenseController@incenseDataTables')->name('admin.perfume.incense.index.incenseDataTables');
        Route::post('/nuoc-hoa/nhom-huong', 'Backend\Tables\IncenseController@store')->name('admin.perfume.incense.store');
        Route::get('/nuoc-hoa/nhom-huong/{id}', 'Backend\Tables\IncenseController@show')->name('admin.perfume.incense.detail');
        Route::post('/nuoc-hoa/nhom-huong/sua', 'Backend\Tables\IncenseController@update')->name('admin.perfume.incense.update');
        Route::get('/nuoc-hoa/nhom-huong/xoa/{id_incense}', 'Backend\Tables\IncenseController@delete')->name('admin.perfume.incense.delete');
    });
});



