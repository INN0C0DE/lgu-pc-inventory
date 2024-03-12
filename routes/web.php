<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventoryController;
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
});
Route::get('/inventory', [InventoryController::class, 'index'])->name('inventory.index');
Route::get('/inventory/create', [InventoryController::class, 'create'])->name('inventory.create');
Route::post('/inventory', [InventoryController::class, 'store'])->name('inventory.store');
Route::get('/inventory/{i}/edit', [InventoryController::class, 'edit'])->name('inventory.edit');
Route::put('/inventory/{i}/update', [InventoryController::class, 'update'])->name('inventory.update');
Route::delete('/inventory/{i}/destroy', [InventoryController::class, 'destroy'])->name('inventory.destroy');
Route::get('/inventory/print', [InventoryController::class, 'print'])->name('inventory.print');
Route::get('/inventory/export', [InventoryController::class, 'export'])->name('inventory.export');

