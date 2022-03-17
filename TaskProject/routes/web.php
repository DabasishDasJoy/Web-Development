<?php

use App\Http\Controllers\Auth\AuthorizationController;
use App\Http\Controllers\GetOrganizationIdController;
use App\Http\Controllers\TasksController;
use Illuminate\Support\Facades\Route;



Route::get('/tasks', [TasksController::class, 'index'])->name('tasks');

Route::get('/OrganizationId', [GetOrganizationIdController::class, 'index'])->name('getOrganizationId');

Route::get('/authorization', [AuthorizationController::class, 'index'])->name('authorization');
Route::post('/authorization', [AuthorizationController::class, 'store']);

Route::get('/', function () {
    return view('Home.index');
});
