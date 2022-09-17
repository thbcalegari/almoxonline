<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Route::get('collaborators', function(){
//     return view('admin.collaborator.index');
// })->middleware(['auth'])->name('collaborators');

Route::get('/products', function(){
    return view('products');
})->middleware(['auth'])->name('products');

Route::get('/commitments', function(){
    return view('commitments');
})->middleware(['auth'])->name('commitments');

Route::get('/movements', function(){
    return view('movements');
})->middleware(['auth'])->name('movements');

require __DIR__.'/auth.php';

require __DIR__.'/admin.php';
