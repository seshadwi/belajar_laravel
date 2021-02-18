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
//--Praktikum 1--\\
Route::get('/', function () {
    return view('welcome');
});

//Route::get('/',function () { echo "Selamat Datang";});

//Route::get('/about', function () { echo nl2br("Nama: Sesha Dwi Lestari \n \n NIM: 1941720173 \n \n Kelas: TI-2A");});

//Route::get('/article/{id}', function ($id) { echo ("Ini merupakan halaman artikel dengan id ");});

//--Praktikum 2--\\
use App\Http\Controllers\SeshaController;
Route::get('/',[SeshaController::class, 'index']);
Route::get('/about',[SeshaController::class, 'about']);
Route::get('/article',[SeshaController::class, 'article']);

