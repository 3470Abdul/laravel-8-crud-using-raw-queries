<?php

use App\Http\Controllers\EmployeeController;
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
    return view('welcome');
});

Route::get('/employee', [EmployeeController::class, 'index']);
Route::post('/employee', [EmployeeController::class, 'create']);
Route::get('/display', [EmployeeController::class, 'display']);
Route::get('/update/{id}', [EmployeeController::class, 'update']);
Route::post('/update', [EmployeeController::class, 'updateData']);
Route::get('/delete/{id}', [EmployeeController::class, 'delete']);

