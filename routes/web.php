<?php

use Illuminate\Support\Facades\Route;
// use App\Models\Brand;

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

// Route::get('/', function () {
//     $brand = Brand::all();
//     return view('welcome', compact ('brand'));
// });

use App\Http\Controllers\UserController;
Route::group(['prefix' => 'admin'], function (){
    Route::resource('user',UserController::class);
});


Route::get('/', function () {
    return view('welcome');
});

Route::get('data', function () {
    return view('data');
});


Auth::routes(
     ['register']
);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('biodata', App\Http\Controllers\BiodataController::class)->middleware('auth');
Route::resource('jenis_kepribadian', App\Http\Controllers\Jenis_kepribadianController::class)->middleware('auth');
Route::resource('pertanyaan', App\Http\Controllers\PertanyaanController::class)->middleware('auth');
Route::resource('jawaban', App\Http\Controllers\JawabanController::class)->middleware('auth');
Route::resource('tes', App\Http\Controllers\TesController::class);
Route::resource('tes2', App\Http\Controllers\Tes2Controller::class);
Route::resource('jenis', App\Http\Controllers\JenisController::class);
Route::resource('intj', App\Http\Controllers\IntjController::class);
Route::resource('intp', App\Http\Controllers\IntpController::class);
Route::resource('entj', App\Http\Controllers\EntjController::class);
Route::resource('entp', App\Http\Controllers\EntpController::class);
Route::resource('infj', App\Http\Controllers\InfjController::class);
Route::resource('infp', App\Http\Controllers\InfpController::class);
Route::resource('enfj', App\Http\Controllers\EnfjController::class);
Route::resource('enfp', App\Http\Controllers\EnfpController::class);
Route::resource('istj', App\Http\Controllers\IstjController::class);
Route::resource('isfj', App\Http\Controllers\IsfjController::class);
Route::resource('estj', App\Http\Controllers\EstjController::class);
Route::resource('esfj', App\Http\Controllers\EsfjController::class);
Route::resource('istp', App\Http\Controllers\IstpController::class);
Route::resource('isfp', App\Http\Controllers\IsfpController::class);
Route::resource('estp', App\Http\Controllers\EstpController::class);
Route::resource('esfp', App\Http\Controllers\EsfpController::class);
