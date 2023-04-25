<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('index');
Route::get('/students', 'App\Http\Controllers\PageController@students')->name('students');
Route::get('/client-service', 'App\Http\Controllers\PageController@clientService')->name('client-service');
Route::get('/remote-work', 'App\Http\Controllers\PageController@remoteWork')->name('remoteWork');
Route::get('/work-on-site', 'App\Http\Controllers\PageController@workOnSite')->name('workOnSite');
Route::get('/seniors', 'App\Http\Controllers\PageController@seniors')->name('seniors');
Route::get('/remote-work/social-media', 'App\Http\Controllers\PageController@socialMedia')->name('socialMedia');
Route::get('/register', 'App\Http\Controllers\PageController@register')->name('register');
Route::get('/employers', 'App\Http\Controllers\PageController@employers')->name('employers');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('posts', 'App\Http\Controllers\Posts');