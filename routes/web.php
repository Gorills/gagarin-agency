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
    return view('index');
});
//Route::get('/razrabotka-sajtov', function () {
//    return view('razrabotka-sajtov');
//});
//Route::get('/seo', function () {
//    return view('seo');
//});
//Route::get('/kontekstnaya-reklama', function () {
//    return view('kontekstnaya-reklama');
//});
//Route::get('/contacts', function () {
//    return view('contacts');
//});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
