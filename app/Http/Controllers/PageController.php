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
        // Show 6 random projects on the project grid (landing view)
        $projects = \App\Models\Project::inRandomOrder()->limit(6)->get();
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
        // Show 6 random activities on the landing activity grid
        $activities = \App\Models\Activity::inRandomOrder()->limit(6)->get();
        return view('user.activity.activity', compact('activities'));
    }

    public function indexDetailActivity()
    {
        $activity = \App\Models\Activity::with(['categoryActivity', 'galleryActivities'])
            ->findOrFail(request()->route('id'));
        return view('user.activity.detail-activity', compact('activity'));
    }

    public function indexFullActivity()
    {
        $query = \App\Models\Activity::orderBy('created_at', 'desc');

        // allow searching by title or description using ?search=keyword
        if (request()->has('search') && request('search') != '') {
            $searchTerm = request('search');
            $query->where(function ($q) use ($searchTerm) {
                $q->where('title', 'like', '%' . $searchTerm . '%')
                  ->orWhere('description', 'like', '%' . $searchTerm . '%');
            });
        }

        $activities = $query->paginate(12)->withQueryString();
        return view('user.activity.full-activity', compact('activities'));
    }

    public function indexConsultation()
    {
        // Provide services list to the consultation view
        $services = \App\Models\Service::orderBy('service_name')->get();
        return view('user.consultation.consultation', compact('services'));
    }


    public function indexDashboard()
    {
        // Provide simple counts for dashboard overview
        $projectsCount = \App\Models\Project::count();
        $activitiesCount = \App\Models\Activity::count();
        $servicesCount = \App\Models\Consultation::count();

        // Fetch recent items to show in small dashboard tables (controller provides data)
        $recentProjects = \App\Models\Project::latest()->take(5)->get();
        $recentActivities = \App\Models\Activity::latest()->take(5)->get();
        $recentConsultations = \App\Models\Consultation::latest()->take(5)->get();

        return view('admin.dashboard.dashboard', compact(
            'projectsCount',
            'activitiesCount',
            'servicesCount',
            'recentProjects',
            'recentActivities',
            'recentConsultations'
        ));
    }
}
