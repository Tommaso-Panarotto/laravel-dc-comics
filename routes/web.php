<?php

use App\Http\Controllers\PlantController;
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
    return view('pages.home');
});

Route::get("/plants", [PlantController::class, "index"])->name("plant.index");
Route::post("/plants", [PlantController::class, "store"])->name("plant.store");
Route::get("/plants/create", [PlantController::class, "create"])->name("plant.create");
Route::get("/plants/{id}", [PlantController::class, "show"])->name("plant.show");
Route::get("/plants/{id}/edit", [PlantController::class, "edit"])->name("plant.edit");
Route::put("/plants/{id}", [PlantController::class, "update"])->name("plant.update");