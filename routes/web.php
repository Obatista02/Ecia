<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PlanController;

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

Route::post('admin/plans', [PlanController::class,'store'])->name('plans.store');
Route::get('admin/plans/create',[PlanController::class,'create'])->name('plans.create');
Route::get('admin/plans',[PlanController::class,'index'])->name('plans.index');

Route::get('/', function () {
    return view('welcome');
});
