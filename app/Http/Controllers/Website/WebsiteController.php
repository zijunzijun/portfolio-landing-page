<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('website.home');
    }
}
