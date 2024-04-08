<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view("homepage.landing");
    }
    public function contactus()
    {
        return view("homepage.contactus");
    }
    public function aboutus()
    {
        return view("homepage.aboutus");
    }
    public function detail()
    {
        return view("homepage.detail");
    }
}
