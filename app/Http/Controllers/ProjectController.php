<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        // ambil data project (terbaru dulu) dan paginasi, dengan opsi pencarian (parameter `q`)
        $query = \App\Models\Project::query();

        if ($search = $request->input('q')) {
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('description', 'like', "%{$search}%")
                  ->orWhere('link', 'like', "%{$search}%");
            });
        }

        $projects = $query->orderBy('created_at', 'desc')
                          ->paginate(10)
                          ->appends($request->only('q'));

        return view('admin.project.manage-project', compact('projects'));
    }

    public function create()
    {
        return view('admin.project.add-project');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'id' => 'nullable|integer|unique:projects,id',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'link' => 'nullable|url',
            'image' => 'nullable|image|max:2048',
        ]);

        $project = new \App\Models\Project();

        if (!empty($data['id'])) {
            $project->id = $data['id'];
        }

        $project->title = $data['title'];
        $project->description = $data['description'] ?? null;
        $project->link = $data['link'] ?? null;

        if ($request->hasFile('image')) {
            // store path in the existing `image` column
            $project->image = $request->file('image')->store('projects', 'public');
        }

        $project->save();

        return redirect()->route('manage-project')->with('success', 'Project created successfully.');
    }

    public function show($id)
    {
        $project = \App\Models\Project::findOrFail($id);
        return view('admin.projects.show', compact('project'));
    }

    // Public detail page for user-facing project details
    // public function showPublic($id)
    // {
    //     // Static detail page for now; ignore $id and do not hit the database
    //     return view('user.project.detail-project');
    // }

    public function edit($id)
    {
        $project = \App\Models\Project::findOrFail($id);
        return view('admin.project.edit-project', compact('project'));
    }

    public function update(Request $request, $id)
    {
        $project = \App\Models\Project::findOrFail($id);

        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'link' => 'nullable|url',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            // delete old image if exists
            if ($project->image) {
                \Illuminate\Support\Facades\Storage::disk('public')->delete($project->image);
            }
            $project->image = $request->file('image')->store('projects', 'public');
        }

        $project->title = $data['title'];
        $project->description = $data['description'] ?? null;
        $project->link = $data['link'] ?? null;
        $project->save();

        return redirect()->route('manage-project')->with('success', 'Project updated successfully.');
    }

    public function detail($id)
    {
        $project = \App\Models\Project::findOrFail($id);
        return view('admin.project.detail-project', compact('project'));
    }

    public function destroy($id)
    {
        $project = \App\Models\Project::findOrFail($id);

        if ($project->image) {
            \Illuminate\Support\Facades\Storage::disk('public')->delete($project->image);
        }

        $project->delete();

        return redirect()->route('manage-project')->with('success', 'Project deleted successfully.');
    }
}
