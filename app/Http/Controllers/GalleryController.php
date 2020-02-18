<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;

class GalleryController extends Controller
{
    public function index()
    {
    	$galleries = Gallery::where('type', 'gallery')->paginate(24);
        return view('frontend.gallery.index', compact('galleries'));
    }
}
