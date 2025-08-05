<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminFormController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MobilContoller;
use App\Http\Controllers\MotorController;
use App\Http\Controllers\Welcome2Controller;
use App\Http\Controllers\WelcomeController;      
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\AssignOp\Mod;

Route::resource('/home', WelcomeController::class);
Route::resource('/about', AboutController::class);
Route::resource('/contact', ContactController::class);
Route::resource('admin/form', AdminFormController::class);
Route::resource('/motor', MotorController::class);
Route::resource('/mobil', MobilContoller::class);
Route::resource('/home2', Welcome2Controller::class);
Route::resource('/',HomeController::class);