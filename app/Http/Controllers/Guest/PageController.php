<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    function index()
    {
        return view('welcome');
    }

    function products()
    {
        return view('products');
    }
}
