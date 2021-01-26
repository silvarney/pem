<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\PacienteController;
use App\Http\Controllers\Admin\ConsultaController;
use App\Http\Controllers\Admin\ComorbidadeController;
use App\Http\Controllers\Admin\AreaController;
use App\Http\Controllers\Admin\MicroareaController;
use App\Http\Controllers\Admin\ComunidadeController;
use App\Http\Controllers\Admin\FamiliaController;
use App\Http\Controllers\Admin\FuncionarioController;

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

//inicio
Route::get('/', function () {
    return view('home');
});

#grupo admin




Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index']);
    Route::get('/paciente/cadastro', [PacienteController::class, 'index']);
    Route::get('/paciente/lista', [PacienteController::class, 'view_lista']);
    Route::get('/paciente/{id}', [PacienteController::class, 'show']);
    Route::post('/paciente/show', [PacienteController::class, 'show']);
    Route::get('/consulta/cadastro', [ConsultaController::class, 'index']);
    Route::get('/comorbidade/cadastro', [ComorbidadeController::class, 'index']);
    Route::get('/posto/area', [AreaController::class, 'index']);
    Route::get('/posto/area/cadastro', [AreaController::class, 'view_cadastro']);
    Route::get('/posto/area/lista', [AreaController::class, 'view_lista']);
    Route::get('/posto/microarea', [MicroareaController::class, 'index']);
    Route::get('/posto/microarea/cadastro', [MicroareaController::class, 'view_cadastro']);
    Route::get('/posto/microarea/lista', [MicroareaController::class, 'view_lista']);
    Route::get('/posto/comunidade', [ComunidadeController::class, 'index']);
    Route::get('/posto/comunidade/cadastro', [ComunidadeController::class, 'view_cadastro']);
    Route::get('/posto/comunidade/lista', [ComunidadeController::class, 'view_lista']);
    Route::get('/posto/familia', [FamiliaController::class, 'index']);
    Route::get('/posto/familia/cadastro', [FamiliaController::class, 'view_cadastro']);
    Route::get('/posto/familia/lista', [FamiliaController::class, 'view_lista']);
    Route::get('/posto/funcionario', [FuncionarioController::class, 'index']);
    Route::get('/posto/funcionario/cadastro', [FuncionarioController::class, 'view_cadastro']);
    Route::get('/posto/funcionario/lista', [FuncionarioController::class, 'view_lista']);

    //cadastro
    Route::post('/create_area', [AreaController::class, 'store']);
    Route::post('/create_microarea', [MicroareaController::class, 'store']);
    Route::post('/create_comunidade', [ComunidadeController::class, 'store']);
    Route::post('/create_familia', [FamiliaController::class, 'store']);
    Route::post('/create_funcionario', [FuncionarioController::class, 'store']);
    Route::post('/create_paciente', [PacienteController::class, 'store']);
});




