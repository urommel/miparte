<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\HorarioController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => ['auth']], function(){

    //Home
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/home/create', [HomeController::class, 'create'])->name('home.create');
    Route::post('/home/store', [HomeController::class, 'store'])->name('home.store');
    Route::get('/home/{id}/show', [HomeController::class, 'show'])->name('home.show');
    Route::get('/home/{id}/edit', [HomeController::class, 'edit'])->name('home.edit');
    Route::put('/home/{id}', [HomeController::class, 'update'])->name('home.update');
    Route::delete('/home/{id}', [HomeController::class, 'destroy'])->name('home.destroy');

    //Role
    Route::get('/role', [RoleController::class, 'index'])->name('role');
    Route::get('/role/create', [RoleController::class, 'create'])->name('role.create');
    Route::post('/role/store', [RoleController::class, 'store'])->name('role.store');
    Route::get('/role/{id}/show', [RoleController::class, 'show'])->name('role.show');
    Route::get('/role/{id}/edit', [RoleController::class, 'edit'])->name('role.edit');
    Route::put('/role/{id}', [RoleController::class, 'update'])->name('role.update');
    Route::delete('/role/{id}', [RoleController::class, 'destroy'])->name('role.destroy');

    //User
    Route::get('/user', [UserController::class, 'index'])->name('user');
    Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
    Route::post('/user/store', [UserController::class, 'store'])->name('user.store');
    Route::get('/user/{id}/show', [UserController::class, 'show'])->name('user.show');
    Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::put('/user/{id}', [UserController::class, 'update'])->name('user.update');
    Route::delete('/user/{id}', [UserController::class, 'destroy'])->name('user.destroy');

    //Personal
    Route::get('/personal', [PersonalController::class, 'index'])->name('personal');
    Route::get('/personal/create', [PersonalController::class, 'create'])->name('personal.create');
    Route::post('/personal/store', [PersonalController::class, 'store'])->name('personal.store');
    Route::get('/personal/{id}/show', [PersonalController::class, 'show'])->name('personal.show');
    Route::get('/personal/{id}/edit', [PersonalController::class, 'edit'])->name('personal.edit');
    Route::put('/personal/{id}', [PersonalController::class, 'update'])->name('personal.update');
    Route::delete('/personal/{id}', [PersonalController::class, 'destroy'])->name('personal.destroy');

    //Horario
    Route::get('/horario', [HorarioController::class, 'index'])->name('horario');
    Route::get('/horario/create', [HorarioController::class, 'create'])->name('horario.create');
    Route::post('/horario/store', [HorarioController::class, 'store'])->name('horario.store');
    Route::get('/horario/{id}/show', [HorarioController::class, 'show'])->name('horario.show');
    Route::get('/horario/{id}/edit', [HorarioController::class, 'edit'])->name('horario.edit');
    Route::put('/horario/{id}', [HorarioController::class, 'update'])->name('horario.update');
    Route::delete('/horario/{id}', [HorarioController::class, 'destroy'])->name('horario.destroy');

    //Asistencia
    Route::get('/asistencia', [AsistenciaController::class, 'index'])->name('asistencia');
    Route::get('/asistencia/create', [AsistenciaController::class, 'create'])->name('asistencia.create');
    Route::post('/asistencia/store', [AsistenciaController::class, 'store'])->name('asistencia.store');
    Route::get('/asistencia/{id}/show', [AsistenciaController::class, 'show'])->name('asistencia.show');
    Route::get('/asistencia/{id}/edit', [AsistenciaController::class, 'edit'])->name('asistencia.edit');
    Route::put('/asistencia/{id}', [AsistenciaController::class, 'update'])->name('asistencia.update');
    
});

