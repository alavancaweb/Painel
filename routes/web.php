<?php

//use App\Http\Controllers\Auth;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ConectarController;

Route::get('/login', function () {
    return view('pages.user-pages.login');
})->name('login');

Route::get('/', function () {
    return view('pages.user-pages.login');
})->name('login');

Route::post('/login/auth', [LoginController::class, 'login'])->name('login.auth');

Route::group(['middleware' => 'auth'], function () {

    //Rota Logar
    Route::post('/usuarios/add', [DashboardController::class, 'adicionar'])->name('usuarios.add');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout.login');

    //Rotas Clientes
    Route::get('/clientes', [ClientesController::class, 'index'])->name('clientes.home');
    Route::get('/clientes/delete{id}', [ClientesController::class, 'deletar'])->name('clientes.delete');
    Route::post('/clientes/add', [ClientesController::class, 'adicionar'])->name('clientes.add');
    Route::post('/clientes/edit{id}', [ClientesController::class, 'editar'])->name('clientes.editar');

// For Clear cache
Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});

});
