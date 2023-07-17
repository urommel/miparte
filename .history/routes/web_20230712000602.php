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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function(){

    //Home
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/home/create', [HomeController::class, 'create'])->name('home.create');
    Route::post('/home/store', [HomeController::class, 'store'])->name('home.store');
    Route::get('/home/{id}/edit', [HomeController::class, 'edit'])->name('home.edit');
    Route::put('/home/{id}', [HomeController::class, 'update'])->name('home.update');
    Route::delete('/home/{id}', [HomeController::class, 'destroy'])->name('home.destroy');

    //Role
    Route::get('/role', [RoleController::class, 'index'])->name('role.index');
    Route::get('/role/create', [RoleController::class, 'create'])->name('role.create');
    Route::post('/role/store', [RoleController::class, 'store'])->name('role.store');
    Route::get('/role/{id}/edit', [RoleController::class, 'edit'])->name('role.edit');
    Route::put('/role/{id}', [RoleController::class, 'update'])->name('role.update');
    Route::delete('/role/{id}', [RoleController::class, 'destroy'])->name('role.destroy');

    //User
    Route::get('/user', [UserController::class, 'index'])->name('user.index');
    Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
    Route::post('/user/store', [UserController::class, 'store'])->name('user.store');
    Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::put('/user/{id}', [UserController::class, 'update'])->name('user.update');
    Route::delete('/user/{id}', [UserController::class, 'destroy'])->name('user.destroy');

    //Personal
    Route::get('/personal', [PersonalController::class, 'index'])->name('personal.index');
    Route::get('/personal/create', [PersonalController::class, 'create'])->name('personal.create');
    Route::post('/personal/store', [PersonalController::class, 'store'])->name('personal.store');
    Route::get('/personal/{id}/edit', [PersonalController::class, 'edit'])->name('personal.edit');
    Route::put('/personal/{id}', [PersonalController::class, 'update'])->name('personal.update');
    Route::delete('/personal/{id}', [PersonalController::class, 'destroy'])->name('personal.destroy');

    //Horario
    Route::get('/horario', [HorarioController::class, 'index'])->name('horario.index');
    Route::get('/horario/create', [HorarioController::class, 'create'])->name('horario.create');
    Route::post('/horario/store', [HorarioController::class, 'store'])->name('horario.store');
    Route::get('/horario/{id}/edit', [HorarioController::class, 'edit'])->name('horario.edit');
    Route::put('/horario/{id}', [HorarioController::class, 'update'])->name('horario.update');
    


    Route::resource('role', RoleController::class)->names('role');
    Route::resource('user', UserController::class)->names('user');
    Route::resource('personal', PersonalController::class)->names('personal');
    Route::resource('horario', HorarioController::class)->names('horario');
});

