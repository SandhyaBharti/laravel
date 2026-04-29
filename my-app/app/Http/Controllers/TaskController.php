<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index() 
    {
        return view('register');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|alpha|min:3',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
            'age' => 'required|number|min:18',
        ]);

        return "Registration Successful";
    }
}


