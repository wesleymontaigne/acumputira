<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Models\User;
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


Route::get('/', function (){
return view('acumputura');
});

    Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/paciente', [PacienteController::class, 'index'])->name('paciente.index');
    Route::get('/dashboard', [AdminController::class,  'index'])->name('dashboard');
    Route::get('/dashboardUser', [AdminController::class,  'index'])->name('dashboardUser');
    Route::get('/pacienteAdmin', [AdminController::class,  'index'])->name('pacienteAdmin');
    Route::get('/pacienteAgenda/{id}', [PacienteController::class,  'paciente'])->name('pacienteAgenda')->middleware(['auth', 'is-admin']);;
    Route::post('/agendaControlles', [AgendaController::class,  'store'])->name('AgendaController.store')->middleware(['auth', 'is-admin']);;
    Route::delete('/agendaControlle', [AgendaController::class,  'deletar'])->name('AgendaController.deletar')->middleware(['auth', 'is-admin']);;
    Route::post('/agendaControlle', [AgendaController::class,  'update'])->name('AgendaController.update')->middleware(['auth', 'is-admin']);;
});


require __DIR__.'/auth.php';
