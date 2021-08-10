<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HapoController extends Controller
{
    public function index() {
        return view('hapolearn.index');
    }
}
