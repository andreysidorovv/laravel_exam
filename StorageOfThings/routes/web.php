<?php

use App\Http\Controllers\StorageController;

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



Route::get('/', [StorageController::class, 'index'])->name('index');
Route::post('/add_thing', [StorageController::class, 'addThing']);
Route::post('/add_place', [StorageController::class, 'addPlace']);
Route::get('/', [StorageController::class, 'index'])->name('index');
Route::post('/add_thing', [StorageController::class, 'addThing']);
Route::post('/add_place', [StorageController::class, 'addPlace']);
Route::delete('/delete_thing/{id}', [StorageController::class, 'deleteThing']);
Route::delete('/delete_place/{id}', [StorageController::class, 'deletePlace']);
Route::get('/edit_thing/{id}', [StorageController::class, 'editThing']);
Route::put('/update_thing/{id}', [StorageController::class, 'updateThing']);
Route::get('/edit_place/{id}', [StorageController::class, 'editPlace']);
Route::put('/update_place/{id}', [StorageController::class, 'updatePlace']);
