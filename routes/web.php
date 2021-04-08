<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileUpload;
use Illuminate\Support\Facades\Auth;


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
Route::get('/contact', function () { return view('contact'); });
Route::get('/reservation', function () { return view('reservation'); });
Route::get('/connexion', function () { return view('connexion'); });
Route::get('/register', function () { return view('auth/register'); });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/upload-file', [FileUpload::class, 'createForm']);
Route::post('/upload-file', [FileUpload::class, 'fileUpload'])->name('fileUpload');
