<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function indexLanding()
    {
        return view('user.landing-page');
    }

    public function indexProfile()
    {
        return view('user.profile.profile');
    }

    public function indexProject()
    {
        return view('user.project.project');
    }

    public function indexDetailProject()
    {
        return view('user.project.detail-project');
    }

    public function indexActivity()
    {
        return view('user.activity.activity');
    }

    public function indexConsultation()
    {
        return view('consultation.consultation');
    }


    public function indexDashboard()
    {
        return view('admin.dashboard.dashboard');
    }
}

