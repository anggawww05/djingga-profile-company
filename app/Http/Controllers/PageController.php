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
        $projects = \App\Models\Project::orderBy('created_at', 'desc')->paginate(10);
        return view('user.project.project', compact('projects'));
    }

    public function indexDetailProject($id)
    {
        $project = \App\Models\Project::findOrFail($id);
        return view('user.project.detail-project', compact('project'));
    }

    public function indexFullProject()
    {
        $query = \App\Models\Project::orderBy('created_at', 'desc');

        // Handle search
        if (request()->has('search') && request('search') != '') {
            $searchTerm = request('search');
            $query->where(function ($q) use ($searchTerm) {
            $q->where('title', 'like', '%' . $searchTerm . '%')
                ->orWhere('description', 'like', '%' . $searchTerm . '%');
            });
        }

        $projects = $query->paginate(12)->withQueryString();
        return view('user.project.full-project', compact('projects'));
    }

    public function indexActivity()
    {
        $activities = \App\Models\Activity::orderBy('created_at', 'desc')->paginate(10);
        return view('user.activity.activity', compact('activities'));
    }

    public function indexDetailActivity()
    {
        $activity = \App\Models\Activity::findOrFail(request()->route('id'));
        return view('user.activity.detail-activity', compact('activity'));
    }

    public function indexConsultation()
    {
        // Provide services list to the consultation view
        $services = \App\Models\Service::orderBy('service_name')->get();
        return view('user.consultation.consultation', compact('services'));
    }


    public function indexDashboard()
    {
        return view('admin.dashboard.dashboard');
    }
}
