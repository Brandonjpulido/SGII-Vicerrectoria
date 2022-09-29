<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvestigadorController;
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
    return view('auth.login');
});/*
Route::get('/investigador', function () {
    return view('investigador.index');
});
Route::get('/investigador/create',[InvestigadorController::class,'create']);
*/

Route::resource('investigador', InvestigadorController::class)->middleware('auth');

Auth::routes();

Route::get('/home', [InvestigadorController::class, 'index'])->name('home');

Route::prefix(['middleware'=>'auth'], function () {
    
    Route::get('/', [InvestigadorController::class, 'index'])->name('home');
});