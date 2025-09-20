<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function indexLanding()
    {
        return view('user.landing-page');
    }
}
