<?php

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

Route::get('/', function () {
  // return view('welcome');
  return redirect('login');
});

Auth::routes();


Route::get('/home',  [App\Http\Controllers\PublicarController::class, 'index'])->name('homenow');

Route::get('/perfil/{id}',  [App\Http\Controllers\PublicarController::class, 'find'])->name('nomehome');


//Rotas seguir e deixar de seguir
Route::post('/perfil/{id}/follow', [App\Http\Controllers\PublicarController::class, 'follow'])->middleware('auth')->name('perfil.follow');
Route::post('/perfil/{id}/unfollow', [App\Http\Controllers\PublicarController::class, 'unfollow'])->middleware('auth')->name('perfil.unfollow');



//Rota de Deletar 

Route::delete('/home/{id}' , [App\Http\Controllers\PublicarController::class, 'destroy'])->middleware('auth');


Route::get('/type_account', [App\Http\Controllers\Auth\TypeAccountController::class, 'type_account'])->name('type_account');

Route::get('/pessoal', [App\Http\Controllers\Auth\PessoalController::class, 'pessoal'])->name('pessoal');

Route::get('/navbar', [App\Http\Controllers\NavbarController::class, 'navbar'])->name('navbar');

Route::get('/configuracoes', [App\Http\Controllers\Auth\ConfiguracoesController::class, 'configuracoes'])->name('configuracoes');


//Verificação de Email

Route::get('/email/verify', function () {
  return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

use Illuminate\Foundation\Auth\EmailVerificationRequest;
 
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
 
    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');

use Illuminate\Http\Request;

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
 
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');


//perfil

Route::get('/profile', function () {
  // Only verified users may access this route...
})->middleware(['auth', 'verified']);


//Configurações

Route::get('/edit/{id}', [App\Http\Controllers\Auth\ConfiguracoesController::class, 'edit'])->name('edit');

Route::put('/update/{id}', [App\Http\Controllers\Auth\ConfiguracoesController::class, 'update'])->name('update');

//Projetos

Route::get ('/proj', [App\Http\Controllers\ProjetoController::class, 'index'])->name('proj');

Route::get ('/proja/{id}', [App\Http\Controllers\ProjetoController::class, 'find'])->name('proj');

Route::get ('/pubs', [App\Http\Controllers\PerfilController::class, 'store'])->name('pubs');
Route::get ('/puba/{id}', [App\Http\Controllers\PerfilController::class, 'find'])->name('puba');


Route::get ('/arquivos', [App\Http\Controllers\ProjetoController::class, 'visualizar'])->name('arquivos');
Route::POST ('/arProj', [App\Http\Controllers\ProjetoController::class, 'store'])->name('arProj');
Route::get ('/listar', [App\Http\Controllers\ProjetoController::class, 'index'])->name('listar');

//Perfil

Route::get ('/perfil2', [App\Http\Controllers\PerfilController::class, 'index'])->name('perfil2');


//File Manager

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
  \UniSharp\LaravelFilemanager\Lfm::routes(); 
}); 

//

Route::get('/provisorio', function () {

  return view('auth.provisorio');
});


//home

//Route::get('/home', [App\Http\Controllers\PublicarController::class, 'create']);
Route::post('/home', [App\Http\Controllers\PublicarController::class, 'store']);


//perfil?





Route::get('/vages', [App\Http\Controllers\VagasController::class, 'index'])->name('vages');

Route::get('/vagas', [App\Http\Controllers\VagasController::class, 'show'])->name('vagas');

//Route::get('/lervaga', [App\Http\Controllers\VagasController::class, 'listar'])->name('lervaga');
Route::get('/lervaga/{id}',  [App\Http\Controllers\VagasController::class, 'listar'])->name('lervaga');

//Route::get('/vagas', [App\Http\Controllers\VagasController::class, 'create'])->name('vagas');

Route::post('/crievagas', [App\Http\Controllers\VagasController::class, 'store'])->name('crievagas');

Route::get('/filtro_vagas', function () {
  return view('filtro_vagas');
})->name('filtro_vagas');





Route::get('/contatos', function () {
  // return view('welcome');
  return view('contatos');
});

Route::get ('/notificacao', [App\Http\Controllers\NotificacaoController::class, 'index'])->name('notificacao');
Route::get ('/notify', [App\Http\Controllers\NotificacaoController::class, 'notify']);
Route::get ('/markasred/{id}', [App\Http\Controllers\NotificacaoController::class, 'markasread'])->name('markasred');;



Route::get ('/criarportfolio', [App\Http\Controllers\CriarportfolioController::class, 'criarportfolio'])->name('criarportfolio');

Route::get ('/uparprojeto', [App\Http\Controllers\UparprojetoController::class, 'uparprojeto'])->name('uparprojeto');

Route::post ('/uparprojeto', [App\Http\Controllers\UparprojetoController::class, 'create'])->name('uparprojeto');


//Route::get('/uparprojeto', function () {
  //return view('uparprojeto');
//})->name('uparprojeto');


Route::get('/cad_port1', function () {
  return view('cad_port1');
})->name('cad_port1');



Route::get('/cad_port2', function () {
  return view('cad_port2');
})->name('cad_port2');

