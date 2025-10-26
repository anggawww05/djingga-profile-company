<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function showManageActivity()
    {
        $activities = \App\Models\Activity::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.activity.manage-activity', compact('activities'));
    }

    public function showAddActivity()
    {
        return view('admin.activity.add-activity');
    }

    public function storeActivity(Request $request)
    {
        $data = $request->validate([
            'id' => 'nullable|integer|unique:projects,id',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
        ]);

        $activity = new \App\Models\Activity();

        if (!empty($data['id'])) {
            $activity->id = $data['id'];
        }

        $activity->title = $data['title'];
        $activity->description = $data['description'] ?? null;
        // $activity->link = $data['link'] ?? null;

        if ($request->hasFile('image')) {
            // store path in the existing `image` column
            $activity->image = $request->file('image')->store('activitys', 'public');
        }

        $activity->save();

        return redirect()->route('manage-activity')->with('success', 'Activity added successfully.');
    }

    public function showDetailActivity($id)
    {
        $activity = \App\Models\Activity::findOrFail($id);
        return view('admin.activity.detail-activity', compact('activity'));
    }

    public function showEditActivity($id)
    {
        $activity = \App\Models\Activity::findOrFail($id);
        return view('admin.activity.edit-activity', compact('activity'));
    }

    public function updateActivity(Request $request, $id)
    {
        $activity = \App\Models\Activity::findOrFail($id);

        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            // 'link' => 'nullable|url',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            // delete old image if exists
            if ($activity->image) {
                \Illuminate\Support\Facades\Storage::disk('public')->delete($activity->image);
            }
            $activity->image = $request->file('image')->store('activitys', 'public');
        }

        $activity->title = $data['title'];
        $activity->description = $data['description'] ?? null;
        // $activity->link = $data['link'] ?? null;
        $activity->save();

        return redirect()->route('manage-activity')->with('success', 'Activity updated successfully.');
    }

    public function destroyActivity($id)
    {
        $activity = \App\Models\Activity::findOrFail($id);

        if ($activity->image) {
            \Illuminate\Support\Facades\Storage::disk('public')->delete($activity->image);
        }

        $activity->delete();

        return redirect()->route('manage-activity')->with('success', 'Activity deleted successfully.');
    }
}
