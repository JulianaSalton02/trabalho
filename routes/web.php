<?php

use App\Http\Controllers\AulaController;
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

Route::prefix("periodos/5")->group(function(){

    Route::get("/alunos/{ra}", function(int $ra){
        return json_encode(["registroAcademico"=> $ra]);
    })->where(["ra" => "[0-9]+"]);

    Route::get("/professores/{cpf}", function(string $cpf){
        return view("professores", ["cpf" => $cpf]);
    })->where(["cpf" => "[0-9]{11}"]);

    Route::get("/materias/{idmateria}", function(int $idmateria){
        return json_encode(["idmateria"=> $idmateria]);
    })->where(["idmateria" => "[1]{1}[0-9]*"]);
});


Route::middleware(['auth'])->group(function(){
    Route::get("aulas", [AulaController::class, 'index']);
    Route::get("aulas/nova", [AulaController::class, 'create']);
    Route::post("aulas", [AulaController::class, 'store']);
    Route::get("aulas/{id}/editar", [AulaController::class, 'edit']);
    Route::put("aulas/{id}", [AulaController::class,'update']);
    Route::delete("aulas/{aula}", [AulaController::class,'destroy']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
