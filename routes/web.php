<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\get_controler;
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

Route::get('/', HomeController::class);

Route::controller(CursoController::class)->group(function(){
    Route::get('/cursos','index');    
    Route::get('cursos/create','create');    
    Route::get('cursos/{curso}','show');   
});

Route::controller(get_controler::class)->group(function(){
    Route::get('saludo/{nombre}/{apellido?}','saludo')->where(['nombre' => '[A-Za-z]+', 'apellido' => '[A-Za-z]+']);
    Route::get('suma/{n1}/{n2}','suma')->where(['n1' => '[0-9]+', 'n2' => '[0-9]+']);
    Route::get('resta/{n1}/{n2}','resta')->where(['n1' => '[0-9]+', 'n2' => '[0-9]+']);
    Route::get('multiplicacion/{n1}/{n2}','multiplicacion')->where(['n1' => '[0-9]+', 'n2' => '[0-9]+']);
    Route::get('division/{n1}/{n2}','division')->where(['n1' => '[0-9]+', 'n2' => '[0-9]+']);
});

