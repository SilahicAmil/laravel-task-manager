<?php

use App\Http\Controllers\AuthController;
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
Route::get('/tasks/create', [TaskController::class, 'create']);

// Show Task
Route::get('/task/{task}', [TaskController::class, 'show']);

// Delete Task
Route::delete('/task/{task}/delete', [TaskController::class, 'delete']);

// Create Task
Route::post('/tasks', [TaskController::class, 'store']);

// Register User
Route::post('/users/register', [AuthController::class, 'store']);

// Login User
Route::post('/users/authenticate', [AuthController::class, 'authenticate']);

// Show Register Page
Route::get('/register', [AuthController::class, 'register']);

// Show Login Page
Route::get('/login', [AuthController::class, 'login']);

// Logout User
Route::post('/logout', [AuthController::class, 'logout']);


