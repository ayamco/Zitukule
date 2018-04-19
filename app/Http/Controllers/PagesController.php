<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //

    public function home()
    {
        return "Home";
    }

    public function aboutus()
    {
        return "About Us";
    }

    public function contactus()
    {
        return "Contact Us";
    }
}
