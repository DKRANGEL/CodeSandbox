<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/** CENTRAL */
use App\Http\Controllers\Central\{
    AcessoController,
    AgendaController,
    EstadoController,
    CidadeController,
    LojaController,
    MotoqueiroController,
    PaisController,
    PermissaoEspecialController,
    TelaController,
    TransportadoraController,
    UserController,
    TipoController,
    GrupoController,
    ConfiguracaoController,
};

/** TENANT */
use App\Http\Controllers\Tenant\{
    BrindeController,
};

Auth::routes();
    
Route::middleware(['web'])->group(function () {

    // * ROTAS QUE PRECISAM DE AUTENTICAÇÃO
    Route::middleware(['auth'])->group(function () {
        //
    });

    // * ROTAS MIMIFICADAS
    Route::middleware(['mimify'])->group(function () {
        /**MOVER ROTAS PARA DENTRO A MIDDLEWARE DE AUTH QUANDO ESTIVER IMPLEMENTADO O LOGIN */
        Route::name(request()->getHost())->group(function () {

            Route::get('/home', [HomeController::class, 'index'])->name('home');

            //** ROTAS DE SUPER USUÁRIO */

                //** ROTAS DE ACESSOS */
                Route::prefix('acessos')->group(function () {
                    Route::get('/', [AcessoController::class, 'listar'])->name('.acessos.listar');
                    Route::post('/cadastrar', [AcessoController::class, 'cadastrar'])->name('.acessos.cadastrar');
                    Route::post('/atualizar/{id}', [AcessoController::class, 'atualizar'])->name('.acessos.atualizar');
                    Route::post('/deletar/{id}', [AcessoController::class, 'deletar'])->name('.acessos.deletar');
                });

                //** ROTAS DE CONFIGURAÇÕES */
                Route::prefix('configuracoes')->group(function () {
                    Route::get('/', [ConfiguracaoController::class, 'show'])->name('.configuracoes.show');
                    Route::post('/atualizar', [ConfiguracaoController::class, 'atualizar'])->name('.configuracoes.atualizar');
                });

                //** ROTAS DE LOJAS */
                Route::prefix('lojas')->group(function () {
                    Route::get('/', [LojaController::class, 'listar'])->name('.lojas.listar');
                    Route::get('/adicionar', [LojaController::class, 'adicionar'])->name('.lojas.adicionar');
                    Route::post('/cadastrar', [LojaController::class, 'cadastrar'])->name('.lojas.cadastrar');
                    Route::get('/editar/{id}', [LojaController::class, 'editar'])->name('.lojas.editar');
                    Route::post('/atualizar/{id}/{representanteLojaId}', [LojaController::class, 'atualizar'])->name('.lojas.atualizar');
                    Route::post('/deletar/{id}', [LojaController::class, 'deletar'])->name('.lojas.deletar');
                });

                //** ROTAS DE PERMISSÕES ESPECIAIS */
                Route::prefix('permissoes')->group(function () {
                    Route::get('/', [PermissaoEspecialController::class, 'listar'])->name('.permissoes.listar');
                    Route::post('/cadastrar', [PermissaoEspecialController::class, 'cadastrar'])->name('.permissoes.cadastrar');
                    Route::post('/atualizar/{id}', [PermissaoEspecialController::class, 'atualizar'])->name('.permissoes.atualizar');
                    Route::post('/deletar/{id}', [PermissaoEspecialController::class, 'deletar'])->name('.permissoes.deletar');
                });

                //** ROTAS DE TELAS */
                Route::prefix('telas')->group(function () {
                    Route::get('/', [TelaController::class, 'listar'])->name('.telas.listar');
                    Route::post('/cadastrar', [TelaController::class, 'cadastrar'])->name('.telas.cadastrar');
                    Route::post('/atualizar/{id}', [TelaController::class, 'atualizar'])->name('.telas.atualizar');
                    Route::post('/deletar/{id}', [TelaController::class, 'deletar'])->name('.telas.deletar');
                });


                //** ROTAS DE USUÁRIOS */
                Route::prefix('usuarios')->group(function () {
                    Route::get('/', [UserController::class, 'listar'])->name('.usuarios.listar');
                    Route::get('/adicionar', [UserController::class, 'adicionar'])->name('.usuarios.adicionar');
                    Route::post('/cadastrar', [UserController::class, 'cadastrar'])->name('.usuarios.cadastrar');
                    Route::get('/editar/{id}', [UserController::class, 'editar'])->name('.usuarios.editar');
                    Route::post('/atualizar/{id}', [UserController::class, 'atualizar'])->name('.usuarios.atualizar');
                    Route::post('/deletar/{id}', [UserController::class, 'deletar'])->name('.usuarios.deletar');
                });

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

                //** ROTAS DE CIDADES */
                Route::prefix('cidades')->group(function () {
                    Route::get('/', [CidadeController::class, 'listar'])->name('.cidades.listar');
                    Route::post('/cadastrar', [CidadeController::class, 'cadastrar'])->name('.cidades.cadastrar');
                    Route::post('/atualizar/{id}', [CidadeController::class, 'atualizar'])->name('.cidades.atualizar');
                    Route::post('/deletar/{id}', [CidadeController::class, 'deletar'])->name('.cidades.deletar');
                });

                //** ROTAS DE ESTADOS */
                Route::prefix('estados')->group(function () {
                    Route::get('/', [EstadoController::class, 'listar'])->name('.estados.listar');
                    Route::post('/cadastrar', [EstadoController::class, 'cadastrar'])->name('.estados.cadastrar');
                    Route::post('/atualizar/{id}', [EstadoController::class, 'atualizar'])->name('.estados.atualizar');
                    Route::post('/deletar/{id}', [EstadoController::class, 'deletar'])->name('.estados.deletar');
                });

                //** ROTAS DE MOTOQUEIROS */
                Route::prefix('motoqueiros')->group(function () {
                    Route::get('/', [MotoqueiroController::class, 'listar'])->name('.motoqueiros.listar');
                    Route::get('/adicionar', [MotoqueiroController::class, 'adicionar'])->name('.motoqueiros.adicionar');
                    Route::post('/cadastrar', [MotoqueiroController::class, 'cadastrar'])->name('.motoqueiros.cadastrar');
                    Route::get('/editar/{id}', [MotoqueiroController::class, 'editar'])->name('.motoqueiros.editar');
                    Route::post('/atualizar/{id}', [MotoqueiroController::class, 'atualizar'])->name('.motoqueiros.atualizar');
                    Route::post('/deletar/{id}', [MotoqueiroController::class, 'deletar'])->name('.motoqueiros.deletar');
                });
                
                //** ROTAS DE PAÍSES */
                Route::prefix('paises')->group(function () {
                    Route::get('/', [PaisController::class, 'listar'])->name('.paises.listar');
                    Route::post('/cadastrar', [PaisController::class, 'cadastrar'])->name('.paises.cadastrar');
                    Route::post('/atualizar/{id}', [PaisController::class, 'atualizar'])->name('.paises.atualizar');
                    Route::post('/deletar/{id}', [PaisController::class, 'deletar'])->name('.paises.deletar');
                });
                
                //** ROTAS DE TRANSPORTADORAS */
                Route::prefix('transportadoras')->group(function () {
                    Route::get('/', [TransportadoraController::class, 'listar'])->name('.transportadoras.listar');
                    Route::get('/adicionar', [TransportadoraController::class, 'adicionar'])->name('.transportadoras.adicionar');
                    Route::post('/cadastrar', [TransportadoraController::class, 'cadastrar'])->name('.transportadoras.cadastrar');
                    Route::get('/editar/{id}', [TransportadoraController::class, 'editar'])->name('.transportadoras.editar');
                    Route::post('/atualizar/{id}', [TransportadoraController::class, 'atualizar'])->name('.transportadoras.atualizar');
                    Route::post('/deletar/{id}', [TransportadoraController::class, 'deletar'])->name('.transportadoras.deletar');
                });

            //** ROTAS DE PRODUTOS */

                //** ROTAS DE TIPOS */
                Route::prefix('tipos')->group(function () {
                    Route::get('/', [TipoController::class, 'listar'])->name('.tipos.listar');
                    Route::post('/cadastrar', [TipoController::class, 'cadastrar'])->name('.tipos.cadastrar');
                    Route::post('/atualizar/{id}', [TipoController::class, 'atualizar'])->name('.tipos.atualizar');
                    Route::post('/deletar/{id}', [TipoController::class, 'deletar'])->name('.tipos.deletar');
                    Route::get('/tenant/{tenant}/tipos', [TipoController::class, 'listarTipos'])->name('tenant.tipo');
                });

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
            return view('welcome');
        });
    });
});
