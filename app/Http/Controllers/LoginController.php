<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    public function admin()
    {
        return view('auth.admin');
    }
    public function loginsisgu(Request $request)
    {
        $credentials = $request->validate([
            'nisn' => 'required',
            'password' => 'required|min:8'
        ]);
    }
}
