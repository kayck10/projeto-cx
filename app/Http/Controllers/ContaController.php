<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContaController extends Controller
{
    public function index () {
        return view('index');
    }

    public function conta () {
        return view('conta');
    }
}
