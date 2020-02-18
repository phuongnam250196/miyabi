<?php

namespace App\Http\Controllers;

use App\Menu;
use Illuminate\Http\Request;
use App\Gallery;

class MenuController extends Controller
{
    public function index()
    {
    	$menues = Gallery::where('type', 'menu')->get();
        return view('frontend.menu.index', compact('menues'));
    }
}
