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
use App\Http\Controllers\FormEIController;
Route::get('/abcd', [FormEIController::class, 'show']);