<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\PacienteController;
use App\Http\Controllers\Admin\ConsultaController;
use App\Http\Controllers\Admin\AcompanhamentoController;
use App\Http\Controllers\Admin\ComorbidadeController;
use App\Http\Controllers\Admin\AreaController;
use App\Http\Controllers\Admin\MicroareaController;
use App\Http\Controllers\Admin\ComunidadeController;
use App\Http\Controllers\Admin\FamiliaController;
use App\Http\Controllers\Admin\FuncionarioController;
use App\Http\Controllers\Admin\MoradiaController;
use App\Http\Controllers\Admin\DemograficoController;
use App\Http\Controllers\Admin\FarmaciaController;
use App\Http\Controllers\Admin\EstoqueController;
use App\Http\Controllers\Admin\RetiradaController;
use App\Http\Controllers\Admin\UsuarioController;
use App\Http\Controllers\Admin\RelatorioController;

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
    Route::post('/paciente/editar', [PacienteController::class, 'show']);
    Route::get('/consulta/cadastro', [ConsultaController::class, 'index']);
    Route::get('/consulta/lista', [ConsultaController::class, 'view_lista']);
    Route::get('/consulta/editar/{id}', [ConsultaController::class, 'show']);
    Route::get('/acompanhamento/cadastro', [AcompanhamentoController::class, 'index']);
    Route::get('/acompanhamento/lista', [AcompanhamentoController::class, 'view_lista']);
    Route::get('/acompanhamento/editar/{id}', [AcompanhamentoController::class, 'show']);
    Route::get('/comorbidade/cadastro', [ComorbidadeController::class, 'index']);
    Route::get('/comorbidade/lista', [ComorbidadeController::class, 'view_lista']);
    Route::get('/comorbidade/editar/{id}', [ComorbidadeController::class, 'show']);
    Route::get('/demografico/cadastro', [DemograficoController::class, 'index']);
    Route::get('/demografico/lista', [DemograficoController::class, 'view_lista']);
    Route::get('/demografico/editar/{id}', [DemograficoController::class, 'show']);
    Route::get('/moradia/cadastro', [MoradiaController::class, 'index']);
    Route::get('/moradia/lista', [MoradiaController::class, 'view_lista']);
    Route::get('/moradia/editar/{id}', [MoradiaController::class, 'show']);
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
    Route::get('/usuario/cadastro', [UsuarioController::class, 'index']);
    Route::get('/usuario/lista', [UsuarioController::class, 'view_lista']);
    Route::get('/usuario/editar/{id}', [UsuarioController::class, 'show']);
    Route::get('/farmacia/estoque', [FarmaciaController::class, 'index']);
    Route::get('/farmacia/estoque/cadastro', [EstoqueController::class, 'index']);
    Route::get('/farmacia/estoque/lista', [EstoqueController::class, 'view_lista']);
    Route::get('/farmacia/estoque/editar/{id}', [EstoqueController::class, 'show']);
    Route::get('/farmacia/estoque/retirada', [RetiradaController::class, 'index']);
    Route::get('/farmacia/retirada/lista', [RetiradaController::class, 'view_lista']);

    //cadastro
    Route::post('/create_area', [AreaController::class, 'store']);
    Route::post('/create_microarea', [MicroareaController::class, 'store']);
    Route::post('/create_comunidade', [ComunidadeController::class, 'store']);
    Route::post('/create_familia', [FamiliaController::class, 'store']);
    Route::post('/create_funcionario', [FuncionarioController::class, 'store']);
    Route::post('/create_paciente', [PacienteController::class, 'store']);
    Route::post('/create_estoque', [EstoqueController::class, 'store']);
    Route::post('/create_retirada', [RetiradaController::class, 'store']);
    Route::post('/create_consulta', [ConsultaController::class, 'store']);
    Route::post('/create_acompanhamento', [AcompanhamentoController::class, 'store']);
    Route::post('/create_comorbidade', [ComorbidadeController::class, 'store']);
    Route::post('/create_demografico', [DemograficoController::class, 'store']);
    Route::post('/create_moradia', [MoradiaController::class, 'store']);
    Route::post('/create_cadastro', [UsuarioController::class, 'store']);

    //edicao
    Route::post('/update_paciente', [PacienteController::class, 'update']);
    Route::post('/update_consulta', [ConsultaController::class, 'update']);
    Route::post('/update_acompanhamento', [AcompanhamentoController::class, 'update']);
    Route::post('/update_comorbidade', [ComorbidadeController::class, 'update']);
    Route::post('/update_estoque', [EstoqueController::class, 'update']);
    Route::post('/update_demografico', [DemograficoController::class, 'update']);
    Route::post('/update_moradia', [MoradiaController::class, 'update']);
    Route::post('/update_usuario', [UsuarioController::class, 'update']);

    //pesquisa
    Route::post('/paciente/pesquisa', [PacienteController::class, 'view_pesquisa']);

    //excluir
    Route::get('/destroy_consulta/{id}', [ConsultaController::class, 'destroy']);
    Route::get('/destroy_acompanhamento/{id}', [AcompanhamentoController::class, 'destroy']);
    Route::get('/destroy_comorbidade/{id}', [ComorbidadeController::class, 'destroy']);
    Route::post('/destroy_retirada', [RetiradaController::class, 'destroy']);
    Route::get('/destroy_demografico/{id}', [DemograficoController::class, 'destroy']);
    Route::get('/destroy_moradia/{id}', [MoradiaController::class, 'destroy']);

    //relatorio
    Route::get('/relatorio', [RelatorioController::class, 'index']);
    Route::post('/print_perfil', [RelatorioController::class, 'teste']);

});




