<?php

use \App\Http\Controllers;
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

Route::middleware('guest')->group(function () {
    Route::get('/login', [Controllers\Login::class, 'login'])->name('login');
    Route::post('/login', [Controllers\Login::class, 'authUser'])->name('login');
});

Route::middleware('auth')->group(function () {
    Route::get('/', [Controllers\Dashboard::class, 'getDashboard'])->name('dashboard');
    Route::get('/novo-aluno', [Controllers\Student::class, 'regist'])->name('view.regist.student');
    Route::post('/novo-aluno', [Controllers\Student::class, 'storeStudent'])->name('view.regist.student');

    Route::get('/alunos', [Controllers\Student::class, 'index'])->name('view.alunos');  

    Route::get('/disciplinas', [Controllers\Subject::class, 'invoke'])->name('view.disciplinas');  
    Route::post('/disciplinas', [Controllers\Subject::class, 'store'])->name('view.store.disciplinas'); 

    Route::get('/novo-professor', [Controllers\Teacher::class, 'invoke'])->name('view.professores');  
    Route::post('/novo-professor', [Controllers\Teacher::class, 'store'])->name('view.store.professores'); 

    Route::get('/turmas', [Controllers\Turma::class, 'invoke'])->name('view.turmas');  
    Route::post('/turmas', [Controllers\Turma::class, 'store'])->name('view.store.turmas');  

    Route::get('/adicionar-alunos-a-turma/{id}', [Controllers\Turma::class, 'addStudent'])->name('view.add.student');  
    Route::post('/adicionar-alunos-a-turma/{id}', [Controllers\Turma::class, 'studentTurma'])->name('view.add.student');  
});
