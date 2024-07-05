<?php

declare(strict_types=1);

use Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomain;
use App\Http\Controllers\Central\AgendaController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/** CENTRAL */
use App\Http\Controllers\Central\{
    GrupoController
};

/** TENANT */
use App\Http\Controllers\Tenant\{
    BrindeController,
};

/*
|--------------------------------------------------------------------------
| Tenant Routes
|--------------------------------------------------------------------------
|
| Here you can register the tenant routes for your application.
| These routes are loaded by the TenantRouteServiceProvider.
|
| Feel free to customize them however you want. Good luck!
|
*/
Route::group(['middleware' => ['web', InitializeTenancyByDomain::class, PreventAccessFromCentralDomains::class]], function () {

    Route::middleware(['universal'])->group(function () {
        Auth::routes();
    });

    //* ROTAS QUE PRECISAM DE AUTENTICAÇÃO
    Route::middleware(['auth'])->group(function () {

        
    });

    Route::name(request()->getHost())->group(function () {

        Route::get('/home', [HomeController::class, 'index'])->name('.home');

        //** ROTAS DE CADASTROS */

            //** ROTAS DE AGENDAS */
            Route::prefix('agendas')->group(function () {
                Route::get('/', [AgendaController::class, 'listar'])->name('.agendas.listar');
                Route::get('/adicionar', [AgendaController::class, 'adicionar'])->name('.agendas.adicionar');
                Route::post('/cadastrar', [AgendaController::class, 'cadastrar'])->name('.agendas.cadastrar');
                Route::get('/editar/{id}', [AgendaController::class, 'editar'])->name('.agendas.editar');
                Route::post('/atualizar/{id}', [AgendaController::class, 'atualizar'])->name('.agendas.atualizar');
                Route::post('/deletar/{id}', [AgendaController::class, 'deletar'])->name('.agendas.deletar');
            });

            //** ROTAS DE BRINDES */
            Route::prefix('brindes')->group(function () {
                Route::get('/{tenantId?}', [BrindeController::class, 'listar'])->name('.brindes.listar');
                Route::post('/cadastrar', [BrindeController::class, 'cadastrar'])->name('.brindes.cadastrar');
                Route::post('/atualizar/{id}/{tenantId?}', [BrindeController::class, 'atualizar'])->name('.brindes.atualizar');
                Route::post('/deletar/{id}/{tenantId?}', [BrindeController::class, 'deletar'])->name('.brindes.deletar');
            });
        
        //** ROTAS DE PRODUTOS */
        
            //** ROTAS DE GRUPOS */
            Route::prefix('grupos')->group(function () {
                Route::get('/', [GrupoController::class, 'listar'])->name('.grupos.listar');
                Route::get('/adicionar', [GrupoController::class, 'adicionar'])->name('.grupos.adicionar');
                Route::post('/cadastrar', [GrupoController::class, 'cadastrar'])->name('.grupos.cadastrar');
                Route::get('/editar/{id}', [GrupoController::class, 'editar'])->name('.grupos.editar');
                Route::post('/atualizar/{id}', [GrupoController::class, 'atualizar'])->name('.grupos.atualizar');
                Route::post('/deletar/{id}', [GrupoController::class, 'deletar'])->name('.grupos.deletar');
            });
    });

    Route::get('/', function () {
        // return 'This is your multi-tenant application. The id of the current tenant is ' . tenant('id');
        return view('welcome');
    });
});
