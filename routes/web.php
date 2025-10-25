<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PageController::class, 'indexLanding'])->name('home');
Route::get('/profile', [PageController::class, 'indexProfile'])->name('profile');
Route::get('/project', [PageController::class, 'indexProject'])->name('project');
Route::get('/project/detail-project', [PageController::class, 'indexDetailProject'])->name('project.detail');
Route::get('/activity', [PageController::class, 'indexActivity'])->name('activity');
Route::get('/consultation', [PageController::class, 'indexConsultation'])->name('consultation');


//admin
Route::get('/dashboard', [PageController::class, 'indexDashboard'])->name('dashboard');
Route::get('/manage-project', [ProjectController::class, 'index'])->name('manage-project');
Route::get('/manage-project/add', [ProjectController::class, 'create'])->name('manage-project.add');
Route::post('/manage-project/add', [ProjectController::class, 'store'])->name('manage-project.store');
Route::get('/manage-project/edit/{id}', [ProjectController::class, 'edit'])->name('manage-project.edit');
Route::get('/manage-project/detail/{id}', [ProjectController::class, 'detail'])->name('manage-project.detail');
// Admin Project Management Routes

// Route::get('/', [ProjectController::class, 'index'])->name('index');
// Route::get('/create', [ProjectController::class, 'create'])->name('create');
// Route::post('/', [ProjectController::class, 'store'])->name('store');
// Route::get('/{id}', [ProjectController::class, 'show'])->name('show');
// Route::get('/{id}/edit', [ProjectController::class, 'edit'])->name('edit');
// Route::put('/{id}', [ProjectController::class, 'update'])->name('update');
// Route::delete('/{id}', [ProjectController::class, 'destroy'])->name('destroy');
