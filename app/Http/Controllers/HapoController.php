<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HapoController extends Controller
{
    public function index()
    {
        return view('hapolearn.index');
    }

    public function create()
    {
        return view('hapolearn.index');
    }

    public function store(Request $request)
    {
        $request -> validate([
            'username' => 'required|max:255|min:5',
            'email' => 'required|email|max:255',
            'password' => 'required|min:8|max:255|confirmed',
        ]);

        User::create([
            'name' => $request['username'],
            'email' => $request['email'],
            'password' => $request['password']
        ]);
    }
}
