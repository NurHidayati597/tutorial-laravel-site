<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //Get index page (/)
    public function index() {
    	return view('pages.index');
    }

    //get about page
    public function about() {
    	return view('pages.about');
    }
}
