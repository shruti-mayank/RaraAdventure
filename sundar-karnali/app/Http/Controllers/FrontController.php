<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
    	return view('front.home');
    }

    public function news(){
    	return view('front.news');
    }

    public function newslist(){
    	return view('front.newslist');
    }
}
