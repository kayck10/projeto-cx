<?php

use App\Http\Controllers\CadastroController;
use App\Http\Controllers\ContaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Models\Conta;
use Illuminate\Auth\Events\Login;
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

Route::get('/', [ContaController::class, 'index'])->name('index');
Route::get('/cadastro', [CadastroController::class, 'create'])->name('cadastro.create');
Route::post('/cadastro/store', [CadastroController::class, 'store'])->name('cadastro.store');

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('login/auth', [LoginController::class, 'auth'])->name('login.auth');

Route::get('/conta', [ContaController::class, 'conta'])->name('conta');

