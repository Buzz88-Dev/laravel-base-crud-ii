<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class HomeController extends Controller
{
    public function index(){
        $Comics = Comic::all();
        // dd($Comics);
        return view('front.home', compact('Comics'));
    }

    public function about(){
        return view('front.about');
    }

    public function contacts(){
        return view('front.contacts');
    }
}
