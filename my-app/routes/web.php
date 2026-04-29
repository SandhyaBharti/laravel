<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/home', function () {
//     return "Welcome to home page";
// });

// Route::get('/welcome', function () {
//     return "<h1> Welcome to Laravel </h1>";
// });

// rotuing with parameters
// Route::get('/user/{id}', function ($id) {
//     return "User id is: " .$id;
// });

// multiple routing parameters
// Route::get('/user/{id}/{name}', function ($id, $name) {
//     return "Id: ".$id . ", name: ".$name;
// });
// Route::get('/product/{id}/{type}', function ($id, $type) {
//     return $type;
// });

// views 
// Route::get('/hello', function () {
//     return view('hello');
// });
// Route::get('/user', function () {
//     $name = "Sandhya";
//     return view('user', ['name' => $name]);
// });

//route with html
// Route::get('/hello', function () {
//     return "<h1> Hello <h1>";
// });

// Route::get('/add/{a}/{b}', function ($a, $b) {
//     return $a + $b;
// });


//CA 1:
// use App\Http\Controllers\MainController;
// Route::get('/courses', [MainController::class, 'listCourses'])->name('courses.list');

// Route::get('/course/{id}', [MainController::class, 'showCourse'])->name('course.show');

// FormEIController
// use App\Http\Controllers\FormEIController;
// Route::get('/abcd', [FormEIController::class, 'show']);

// use App\Http\Controllers\uploadEIController;
// Route::get('/upload', [uploadEIController::class, 'show']);
// Route::post('/upload', [uploadEIController::class, 'upload']);


// step 1. create a folder resources/lang/env/file called messages.php
// put your content inside message.php 
// create a view 
// get a view passed in message.php to homeEI.blade.php
// add suitable routes to web.php for return view 
// open env file to make changes in line 7  app/local/

// lang 
// Route::get('/', function () {
//     return view('home');
// })->middleware('setlocale3');

// Route::get('/lang/{locale}', function ($locale) {
//     if (in_array($locale, ['en', 'hi', 'pa', 'gu', 'te', 'as', 'bn', 'ta'])) {
//         session(['locale' => $locale]);
//     }

//     return redirect('/');
// });

// 21-06-2024
// Route::get('/', function () {
//     return view('home'); // your blade file
// });

// Route::get('/lang/{locale}', function ($locale) {
//     session(['locale' => $locale]);
//     return redirect('/');
// });


// form with session
use App\Http\Controllers\UserController;
Route::get('/form',  [UserController::class, 'showForm']);
Route::post('/save', [UserController::class, 'saveData']);
Route::get('/dashboard', [UserController::class, 'dashboard']);
Route::get('/logout', [UserController::class, 'logout']);

// Task 1:
use App\Http\Controllers\TaskController;
Route::get('/register', [TaskController::class, 'create']);
Route::post('/register', [TaskController::class, 'store']);