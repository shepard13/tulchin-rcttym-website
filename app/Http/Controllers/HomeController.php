<?php

namespace App\Http\Controllers;


use App\User;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
}
