<?php

use App\Http\Controllers\mahasiswaController;
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
    return view('layout/main', [
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

// Route::get("/admin", function () {
//     return view("admin", [
//         "tittle" => "Admin"
//     ]);
// });

// route CRUD
Route::post("mahasiswaview/store", [mahasiswaController::class,"store"]); // C
Route::resource('/admin', mahasiswaController::class)->middleware('auth'); // R //Auth users    
Route::get("/mahasiswaview/edit/{npm}", [mahasiswaController::class,"dataEdit"]);
Route::post("/mahasiswaview/update/{npm}", [mahasiswaController::class,"update"]);
Route::delete("/mahasiswaview/destroy/{npm}", [mahasiswaController::class,"destroy"]); //D

// export
Route::get('/mahasiswaview/export_programmer', function(){
    return view('mahasiswa/export_programmer');
});