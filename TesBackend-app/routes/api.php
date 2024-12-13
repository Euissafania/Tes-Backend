<?php

use App\Models\Borrowing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bookController;
use App\Http\Controllers\memberController;
use App\Http\Controllers\borrowingController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/books', [bookController::class, 'index']);
Route::post('/members', [memberController::class, 'store']);
Route::post('/borrowings', [borrowingController::class, 'store']);
Route::put('/borrowings/{id}/return', [borrowingController::class, 'update']);
Route::get('/members/{id}/borrowings', [memberController::class, 'show']);


