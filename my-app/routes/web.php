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
Route::get('/hello', function () {
    return view('hello');
});