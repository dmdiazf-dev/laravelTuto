<?php


use App\Http\Controllers\HomeController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\ContactoController;
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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get("/", [HomeController::class, "index"])->name("home");
Route::get("/contacto", [ContactoController::class, "index"])->name("contact");
Route::post("/contacto", [ContactoController::class, "sendMessage"])->name("enviar");
Route::get("/upload", [UploadController::class, "index"])->name("upload");
Route::post("/upload", [UploadController::class, "uploadFile"])->name("upload");
