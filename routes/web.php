<?php

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

Route::get('/', function () {
    return view('welcome', ['name' => 'Laura']);
});

Route::get('/admin/usuarios', function () {
    return view('admin.users.index');
});

Route::get('/admin/eventos', function () {
    return view('admin.events.index');
});