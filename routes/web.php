<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\MedicoController;
use App\Http\Controllers\OrdemServicoController;
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
    return redirect()->route('ordem-servico.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {

    Route::resource('ordem-servico', OrdemServicoController::class)->names(['ordem-servico']);
    Route::get('ordem-servico/pagamento/{ordemServico}', [OrdemServicoController::class, 'pagamento'])->name('ordem-servico.pagamento');
    Route::put('ordem-servico/pagamento/{ordemServico}', [OrdemServicoController::class, 'salvarPagmento'])->name('ordem-servico.pagamento');
    Route::resource('cliente', ClienteController::class)->names(['clientes']);
    Route::resource('medico', MedicoController::class)->names(['medico']);
});


