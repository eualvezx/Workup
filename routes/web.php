<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

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

//Rota de Deletar 

Route::delete('/home/{id}' , [App\Http\Controllers\PublicarController::class, 'destroy'])->middleware('auth');

Route::get('/pessoal', [App\Http\Controllers\Auth\PessoalController::class, 'pessoal'])->name('pessoal');

Route::get('/navbar', [App\Http\Controllers\NavbarController::class, 'navbar'])->name('navbar');

Route::get('/configuracoes', [App\Http\Controllers\Auth\ConfiguracoesController::class, 'configuracoes'])->name('configuracoes');

Route::get('/email/verify', function () {
  return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');


 
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
 
    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');


 
Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
 
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::get('/profile', function () {
  // Only verified users may access this route...
})->middleware(['auth', 'verified']);

//ROTAS PARA ALTERAÇÃO DE DADOS
Route::get('/edit/{id}', [App\Http\Controllers\Auth\ConfiguracoesController::class, 'edit'])->name('edit');
Route::put('/update/{id}', [App\Http\Controllers\Auth\ConfiguracoesController::class, 'update'])->name('update');

//ROTA PUBLICAÇÃO
Route::get ('/pubs', [App\Http\Controllers\PerfilController::class, 'store'])->name('pubs');

//ROTA PERFIL
Route::get ('/perfil2', [App\Http\Controllers\PerfilController::class, 'index'])->name('perfil2');





Route::get('/provisorio', function () {

  return view('auth.provisorio');
});


//Route::get('/home', [App\Http\Controllers\PublicarController::class, 'create']);
Route::post('/home', [App\Http\Controllers\PublicarController::class, 'store']);


Route::get('/perfil', function () {
  return view('perfil');
})->name('perfil');


Route::get ('/criarportfolio', [App\Http\Controllers\CriarportfolioController::class, 'criarportfolio'])->name('criarportfolio');

Route::get ('/uparprojeto', [App\Http\Controllers\UparprojetoController::class, 'uparprojeto'])->name('uparprojeto');

//Route::get('/uparprojeto', function () {
  //return view('uparprojeto');
//})->name('uparprojeto');


Route::get('/cad_port1', function () {
  return view('cad_port1');
})->name('cad_port1');



Route::get('/cad_port2', function () {
  return view('cad_port2');
})->name('cad_port2');




Route::get('/new_port', function () {
  return view('new_port');
})->name('new_port');


