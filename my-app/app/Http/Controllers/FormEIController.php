<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormEIController extends Controller
{
    public function show() {
        return view('FormEI');
    }

    //request data from form
    public function showForm() {
        $name = request('name');
        $email = request('email');
        return "Name: ".$name . "Email: ".$email;
    }
}
