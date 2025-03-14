<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToDoListController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('todolist')->group(function () {
    Route::post('/new', [ToDoListController::class, 'store']);
    Route::get('/list', [ToDoListController::class, 'index']);
    Route::put('/{id}', [ToDoListController::class, 'edit']);
    Route::delete('/{id}', [ToDoListController::class, 'destroy']);
});

Route::get('/test', function () {
    return response()->json(['message' => 'API is working']);
});