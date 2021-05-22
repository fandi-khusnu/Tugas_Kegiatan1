<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view("home0303");
    }

    public function article_view()
    {
        return view("article0303");
    }

    public function contactus_view()
    {
        return view("contactus0303");
    }
}
