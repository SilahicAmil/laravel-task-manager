<?php

use App\Http\Controllers\TaskController;
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

// Index Page
Route::get('/', [TaskController::class, 'index']);

// Show Create Form
Route::get('/create', [TaskController::class, 'create']);

// Create Task
Route::post('/tasks', [TaskController::class, 'store']);

// Register Page
Route::get('/register', [AuthController::class, 'register']);
