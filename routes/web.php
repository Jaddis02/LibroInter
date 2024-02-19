<?php

use App\Http\Controllers\Inicio;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Buscar desde:
// http://localhost/DWES/pruebaLaravel/public/

Route::get('/',[Inicio::class,'bienvenida']);
Route::get('/cuento',[Inicio::class,'cuento']);

Route::get('/cap1',[Inicio::class,'cap1']);
Route::get('/cap2',[Inicio::class,'cap2']);
Route::get('/cap3',[Inicio::class,'cap3']);

Route::get('/op1cap1',[Inicio::class,'op1cap1']);
Route::get('/op2cap1',[Inicio::class,'op2cap1']);

Route::get('/op1cap2',[Inicio::class,'op1cap2']);
Route::get('/op2cap2',[Inicio::class,'op2cap2']);

Route::get('/op1cap3',[Inicio::class,'op1cap3']);
Route::get('/op2cap3',[Inicio::class,'op2cap3']);





