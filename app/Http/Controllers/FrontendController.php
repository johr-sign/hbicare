<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function aboutus()
    {
    	return view('about-us');
    }

    public function getinvolved()
    {
    	return view('get-involved');
    }

    public function whatweoffer()
    {
    	return view('what-we-offer');
    }
}
