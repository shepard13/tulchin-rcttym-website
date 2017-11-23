<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsItemController extends Controller
{
    public function index()
    {
        return view('newsItem');
    }
}
