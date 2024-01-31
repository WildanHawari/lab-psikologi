<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\mahasiswaController;

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
    return view('layouts/main', [
        "tittle" => "Pendaftaran Asisten dan Programmer",
        "link_announcement" => "http://bit.ly/OprecProgrammer2024",
        "tahun" => "2024",
        "image" => "assets/wh-model.png"
    ]);
});

Route::get("/mahasiswa/daftar", function () {
    return view("mahasiswa/add", [
        "tittle" => "Pendaftaran Asisten dan Programmer"
    ]);
});

// route CRUD
Route::post("mahasiswaview/store", [mahasiswaController::class,"store"]); // C
Route::resource('/admin', mahasiswaController::class)->middleware('auth'); // R
Route::get("/mahasiswaview/edit/{npm}", [mahasiswaController::class,"dataEdit"]);
Route::post("/mahasiswaview/update/{npm}", [mahasiswaController::class,"update"]);
Route::delete("/mahasiswaview/destroy/{npm}", [mahasiswaController::class,"destroy"]); //D

// export
Route::get('/mahasiswaview/export_programmer', function(){
    return view('mahasiswa/export_programmer');
});
Auth::routes();

// Route::get('/home', [HomeController::class, 'index'])->name('home');
