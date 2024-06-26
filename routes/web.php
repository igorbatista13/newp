<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ProfileController;

use App\Http\Controllers\
    {

    Empresa_ClienteController, MinhaEmpresaController, ProdutoController, OrcamentoController, ReciboController, ContratoController,
    HomeController,  APIController, PainelGerencialController, FornecedorController,
    UsuariosController, RoleController, UserController, 
    PessoaController, Ficha_Conselho, CalendarController,
    ObjetosController, SaldoController, SiteController, PedidosController, PerfilController,
    
    VendaController, AlunosController, MatriculaController, ModalidadesController, PlanosController, ImageUploadController
};

 Route::get('/escola/teste',      [PessoaController::class, 'index']);
//  Route::get('/base/base',      [PainelGerencialController::class, 'dashboard']);


// Route::get('/painel', function () {
//     return view('painel');
// })->middleware(['auth', 'verified'])->name('painel');

Route::middleware('auth')->group(function () {
Route::get('/perfil', [ProfileController::class, 'edit'])->name('profile.edit');
Route::get('/recibo/invoice/{id}',    [ReciboController::class, 'invoice']);
Route::get('/recibo/contrato/{id}',   [ReciboController::class, 'contrato']);

Route::get('/contrato/invoice/{id}',   [ContratoController::class, 'invoice']);
Route::get('/contrato/contrato/{id}',   [ContratoController::class, 'contrato']);

Route::resource('roles',                     RoleController::class);
Route::resource('users',                     UserController::class);
Route::resource('cliente',                   Empresa_ClienteController::class);
Route::resource('fornecedor',                FornecedorController::class);
Route::resource('minhaempresa',              MinhaEmpresaController::class);
// Route::resource('produtos',               ProdutoController::class);
Route::resource('recibos',                   ReciboController::class);
Route::resource('contrato',                  ContratoController::class);
Route::resource('orcamento',                 OrcamentoController::class);
// Route::resource('saldo',                     SaldoController::class);
Route::resource('pedidos',                   PedidosController::class);
Route::patch('/saldo/incremento' , [SaldoController::class, 'incremento'])->name('saldo.incremento');
Route::patch('/saldo/decremento' , [SaldoController::class, 'decremento'])->name('saldo.decremento');
Route::post('/saldo/add' ,        [SaldoController::class, 'add'])       ->name('saldo.add');



Route::get('/produto/export',       [ProdutoController::class,         'export']); //OK
Route::get('/recibo/export',        [ReciboController::class,          'export']); //OK
Route::get('/fornecedores/export',  [FornecedorController::class,      'export']); // OK
Route::get('/clientes/export',      [Empresa_ClienteController::class, 'export']); //Ok
Route::get('/contratos/export',     [ContratoController::class,        'export']); 


Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');  
    


/// API CEP CNPJ CPF FILMES 
Route::get('/API/CEP/',   [APIController::class, 'cep']);
Route::get('/API/CNPJ/',  [APIController::class, 'cnpj']);
Route::get('/API/CPF/',  [APIController::class, 'cpf']);
Route::get('/API/FILMES/',[APIController::class, 'filmes']);
Route::get('/API/responsavel/',[APIController::class, 'responsavel']);





////// PAINEL GERENCIAL (DASHBOARD)
Route::get('/painel', [PainelGerencialController::class, 'dashboard']);


// N O V O

//VENDAS
// Route::get('/vendas', [VendaController::class, 'index']);

Route::resource('vendas', VendaController::class);
 Route::get('/venda/invoice/{id}',    [VendaController::class, 'invoice']);

Route::get('/buscar', [ProdutoController::class, 'buscar'])->name('buscar');
Route::get('/buscar-alunos', [AlunosController::class, 'buscarAlunos'])->name('buscarAlunos');

Route::resource('produtos', ProdutoController::class);
Route::resource('perfil', PerfilController::class);
Route::post('/adicionar-carrinho', 'ProdutoController@adicionarCarrinho')->name('adicionarCarrinho');
Route::post('/finalizar-compra', 'ProdutoController@finalizarCompra')->name('finalizarCompra');


// //VENDA
// Route::post('/venda-finalizar', [VendaController::class, 'finalizarCompra']);

// USUARIOS
    Route::resource('usuarios', UsuariosController::class);
// ALUNOS
    Route::resource('alunos', AlunosController::class);
// Professores
    Route::get('/professores', [AlunosController::class, 'professores'])->name('professores');    
// Matrícula 
    Route::post('/alunos/matricula', [AlunosController::class, 'matricula'])->name('alunos.matricula'); 
// MATRICULAS
Route::resource('matriculas', MatriculaController::class);

// Modalidades
Route::resource('modalidades', ModalidadesController::class);

// PLANOS
Route::resource('planos', PlanosController::class);

// Webcam
Route::post('/upload-image', [ImageUploadController::class, 'upload'])->name('upload.image');


















//Route::get('/painel/index', [PainelGerencialController::class, 'index']);
Route::get('/painel/cadastro/index',  [PainelGerencialController::class, 'cadastro_menu']);
Route::get('/painel/consulta_ficha',  [PainelGerencialController::class, 'consulta_ficha']);
Route::get('/painel/consulta_aluno',  [AlunosController::class, 'search']);
Route::post('/painel/consulta_aluno/', [AlunosController::class, 'search']);

Route::get('/painel/cadastro/cadastro_aluno',      [PainelGerencialController::class, 'cadastro_aluno']);
Route::get('/painel/cadastro/cadastro_conselho',   [PainelGerencialController::class, 'cadastro_conselho']);
Route::get('/painel/cadastro/cadastro_escola',     [PainelGerencialController::class, 'cadastro_escola']);
Route::get('/painel/cadastro/cadastro_ministerio', [PainelGerencialController::class, 'cadastro_ministerio']);
Route::get('/painel/cadastro/cadastro_polo',       [PainelGerencialController::class, 'cadastro_polo']);
Route::get('/painel/cadastro/cadastro_prazo',      [PainelGerencialController::class, 'cadastro_prazo']);
Route::get('/painel/cadastro/cadastro_serie',      [PainelGerencialController::class, 'cadastro_serie']);


Route::get('/usuarios/atribuir_perfil_usuarios',      [RoleController::class, 'atribuir_perfil_usuarios']);


Route::get('/usuarios/perfil_usuarios',               [RoleController::class, 'perfil_usuarios']);
Route::get('/usuarios/form_usuarios',                 [UsuariosController::class, 'form_usuarios']);



    
      Route::get('google', [Ficha_Conselho::class, 'google']);

      Route::get('ficha_conselho/{id}', [Ficha_Conselho::class, 'create']);
      Route::post('ficha_conselho/{id}', [Ficha_Conselho::class, 'store']);

      
      
    Route::get('calendar/index', [CalendarController::class, 'index'])->name('calendar.index');
    Route::post('calendar', [CalendarController::class, 'store'])->name('calendar.store');
    Route::patch('calendar/update/{id}', [CalendarController::class, 'update'])->name('calendar.update');
    Route::delete('calendar/destroy/{id}', [CalendarController::class, 'destroy'])->name('calendar.destroy');  

//Route::resource('usuarios', UserController::class);


// ---------USUARIOS POST
// Route::post('/usuarios/atribuir_perfil',              [UsuariosController::class, 'atribuir_perfil_usuarios_store']);
// Route::post('/usuarios',                              [UsuariosController::class, 'store_usuarios']);

/////LOGOUT
// Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

Route::get('/Objetos/piano',                 [ObjetosController::class, 'piano']);
Route::get('/Objetos/teclado1',              [ObjetosController::class, 'teclado']);
Route::get('/Objetos/teclado2',              [ObjetosController::class, 'teclado2']);
Route::get('/Escolas/index',                 [ObjetosController::class, 'Escolas']);
Route::get('/Suporte/index',                 [ObjetosController::class, 'Suporte']);




Route::get('logout', [AuthenticatedSessionController::class, 'destroy'])
->name('logout');

});


Route::get('/Site',                 [SiteController::class, 'index']);

require __DIR__.'/auth.php';
