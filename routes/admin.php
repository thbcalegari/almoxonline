<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CollaboratorController;
use App\Http\Controllers\Admin\ManufactorerController;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;

// ------------------------------------------

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function(){
    Route::resource('collaborators', CollaboratorController::class)->parameters(['collaborators' => 'user'])->except('show');
    Route::resource('products', ProductController::class);
    Route::resource('manufactorers', ManufactorerController::class);
    Route::resource('categories', CategoryController::class);
});


?>