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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::prefix('admin')->group(function () {
    // Dashboard route
    Route::get('/', 'App\Http\Controllers\AdminController@index')->name('admin.dashboard');

    // Login routes
    Route::get('/login', 'App\Http\Controllers\Auth\Admin\AdminLoginController@show_login_form')->name('admin.login');
    Route::post('/login', 'App\Http\Controllers\Auth\Admin\AdminLoginController@login')->name('admin.login.submit');

    // Logout route
    Route::post('/logout', 'App\Http\Controllers\Auth\Admin\AdminLoginController@logout')->name('admin.logout');

    // Register routes
    Route::get('/register', 'App\Http\Controllers\Auth\Admin\AdminRegisterController@show_registration_form')->name('admin.register');
    Route::post('/register', 'App\Http\Controllers\Auth\admin\AdminRegisterController@register')->name('admin.register.submit');

    // Supplier routes
    Route::get('/suppliers', 'App\Http\Controllers\SupplierController@index');
    Route::get('/suppliers/create', 'App\Http\Controllers\SupplierController@create');
    Route::post('/suppliers/create', 'App\Http\Controllers\SupplierController@store');
    Route::get('/suppliers/edit/{id}', 'App\Http\Controllers\SupplierController@edit');
    Route::post('/suppliers/edit/{id}', 'App\Http\Controllers\SupplierController@update');
    Route::get('/suppliers/delete/{id}', 'App\Http\Controllers\SupplierController@destroy');
});
