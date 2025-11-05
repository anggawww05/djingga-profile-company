<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PageController::class, 'indexLanding'])->name('home');
Route::get('/profile', [PageController::class, 'indexProfile'])->name('profile');
Route::get('/project', [PageController::class, 'indexProject'])->name('project');
Route::get('/project/detail-project/{id}', [PageController::class, 'indexDetailProject'])->name('project.detail');
Route::get('/project/full-project', [PageController::class, 'indexFullProject'])->name('project.full');
Route::post('/project/full-project', [PageController::class, 'indexFullProject'])->name('project.full.search');
Route::get('/activity', [PageController::class, 'indexActivity'])->name('activity');
Route::get('/activity/detail-activity/{id}', [PageController::class, 'indexDetailActivity'])->name('activity.detail');
Route::get('/activity/full-activity', [PageController::class, 'indexFullActivity'])->name('activity.full');
Route::post('/activity/full-activity', [PageController::class, 'indexFullActivity'])->name('activity.full.search');
Route::get('/consultation', [PageController::class, 'indexConsultation'])->name('consultation');
Route::post('/consultation', [ConsultationController::class, 'userConsultation'])->name('consultation.store');

// Authentication Routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

//admin
Route::get('/dashboard', [PageController::class, 'indexDashboard'])->name('dashboard');
Route::get('/manage-project', [ProjectController::class, 'index'])->name('manage-project');
Route::post('/manage-project', [ProjectController::class, 'index'])->name('manage-project.search');
Route::get('/manage-project/add', [ProjectController::class, 'create'])->name('manage-project.add');
Route::post('/manage-project/add', [ProjectController::class, 'store'])->name('manage-project.store');
Route::get('/manage-project/edit/{id}', [ProjectController::class, 'edit'])->name('manage-project.edit');
Route::post('/manage-project/edit/{id}', [ProjectController::class, 'update'])->name('manage-project.update');
Route::get('/manage-project/detail/{id}', [ProjectController::class, 'detail'])->name('manage-project.detail');
Route::delete('/manage-project/delete/{id}', [ProjectController::class, 'destroy'])->name('manage-project.delete');

Route::get('/manage-activity', [\App\Http\Controllers\ActivityController::class, 'showManageActivity'])->name('manage-activity');
Route::post('/manage-activity', [\App\Http\Controllers\ActivityController::class, 'showManageActivity'])->name('manage-activity.search');
Route::get('/manage-activity/add', [\App\Http\Controllers\ActivityController::class, 'showAddActivity'])->name('manage-activity.add');
Route::post('/manage-activity/add', [\App\Http\Controllers\ActivityController::class, 'storeActivity'])->name('manage-activity.store');
Route::get('/manage-activity/detail/{id}', [\App\Http\Controllers\ActivityController::class, 'showDetailActivity'])->name('manage-activity.detail');
Route::get('/manage-activity/edit/{id}', [\App\Http\Controllers\ActivityController::class, 'showEditActivity'])->name('manage-activity.edit');
Route::put('/manage-activity/edit/{id}', [\App\Http\Controllers\ActivityController::class, 'updateActivity'])->name('manage-activity.update');
Route::delete('/manage-activity/delete/{id}', [\App\Http\Controllers\ActivityController::class, 'destroyActivity'])->name('manage-activity.destroy');

Route::get('/manage-consultation', [ConsultationController::class, 'manageConsultation'])->name('manage-consultation');
Route::post('/manage-consultation', [ConsultationController::class, 'manageConsultation'])->name('manage-consultation.search');
Route::get('/manage-consultation/add', [ConsultationController::class, 'showAddConsultationForm'])->name('manage-consultation.add');
Route::post('/manage-consultation/add', [ConsultationController::class, 'addConsultation'])->name('manage-consultation.store');
Route::get('/manage-consultation/detail/{id}', [ConsultationController::class, 'showConsultation'])->name('manage-consultation.detail');
Route::get('/manage-consultation/edit/{id}', [ConsultationController::class, 'showEditConsultationForm'])->name('manage-consultation.edit');
Route::post('/manage-consultation/edit/{id}', [ConsultationController::class, 'editConsultation'])->name('manage-consultation.update');
Route::delete('/manage-consultation/delete/{id}', [ConsultationController::class, 'deleteConsultation'])->name('manage-consultation.delete');
// Admin Project Management Routes

// Route::get('/', [ProjectController::class, 'index'])->name('index');
// Route::get('/create', [ProjectController::class, 'create'])->name('create');
// Route::post('/', [ProjectController::class, 'store'])->name('store');
// Route::get('/{id}', [ProjectController::class, 'show'])->name('show');
// Route::get('/{id}/edit', [ProjectController::class, 'edit'])->name('edit');
// Route::put('/{id}', [ProjectController::class, 'update'])->name('update');
// Route::delete('/{id}', [ProjectController::class, 'destroy'])->name('destroy');
