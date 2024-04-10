<?php

// project controller
use App\Http\Controllers\Admin\ProjectController;

use App\Http\Controllers\Guest\DashboardController as GuestDashboardController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
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

// # Rotte pubbliche
Route::get('/', [GuestDashboardController::class, 'index'])
  ->name('home');

// # Rotte protette
Route::middleware('auth')
  ->prefix('/admin')
  ->name('admin.')
  ->group(function () {

    Route::get('/dashboard', [AdminDashboardController::class, 'index'])
      ->name('dashboard');

      // routes
    Route::resource('projects', ProjectController::class);

    Route::get('admin/projects/{project}', [ProjectController::class, 'show'])->name('admin.projects.show');

    Route::delete('admin/projects/{project}', [ProjectController::class, 'destroy'])->name('project.destroy');

  });

require __DIR__ . '/auth.php';
