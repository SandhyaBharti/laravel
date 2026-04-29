<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showForm() {
        return view('form');
    }
    public function saveData(Request $request)
    {
        session([
            'name' => $request->name,
            'email' => $request->email
        ]);
        return redirect('/dashboard');
    }
    public function dashboard()
    {
        return view('dashboard');
    }
    public function logout() 
    {
        session() -> flush();
        return redirect('/form');
    }
}
