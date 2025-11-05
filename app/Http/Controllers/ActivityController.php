<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;
use App\Models\GalleryActivity;
use App\Models\CategoryActivity;

class ActivityController extends Controller
{
    public function showManageActivity()
    {
        $query = \App\Models\Activity::query();

        if ($search = request('q')) {
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('description', 'like', "%{$search}%");
            });
        }

        $activities = $query->orderBy('created_at', 'desc')->paginate(10);
        return view('admin.activity.manage-activity', compact('activities'));


    }

    public function showAddActivity()
    {
        $categories = CategoryActivity::orderBy('category_name')->get();
        return view('admin.activity.add-activity', compact('categories'));
    }

    public function storeActivity(Request $request)
    {

        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            // include avif in allowed mimes; keep per-file max 2MB
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp,gif,avif|max:2048',
            'gallery' => 'nullable|array',
            'gallery.*' => 'nullable|image|mimes:jpg,jpeg,png,webp,gif,avif|max:2048',
            'activity_date' => 'nullable|date',
            'category_activity_id' => 'nullable|exists:category_activities,id',
        ]);

        $activity = new Activity();
        $activity->title = $data['title'];
        $activity->description = $data['description'] ?? null;
        $activity->activity_date = $data['activity_date'] ?? null;
        $activity->category_activity_id = $data['category_activity_id'] ?? null;

        // main cover image
        if ($request->hasFile('image')) {
            $activity->image_cover = $request->file('image')->store('activities', 'public');
        }

        $activity->save();

        // handle gallery uploads (multiple)
        if ($request->hasFile('gallery')) {
            foreach ($request->file('gallery') as $file) {
                $path = $file->store('activities/gallery', 'public');
                GalleryActivity::create([
                    'activity_id' => $activity->id,
                    'image' => $path,
                ]);
            }
        }

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
        $activity = Activity::findOrFail($id);

        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp,gif,avif|max:2048',
            'gallery' => 'nullable|array',
            'gallery.*' => 'nullable|image|mimes:jpg,jpeg,png,webp,gif,avif|max:16384',
            'activity_date' => 'nullable|date',
            'category_activity_id' => 'nullable|exists:category_activities,id',
        ]);

        if ($request->hasFile('image')) {
            if ($activity->image_cover) {
                \Illuminate\Support\Facades\Storage::disk('public')->delete($activity->image_cover);
            }
            $activity->image_cover = $request->file('image')->store('activities', 'public');
        }

        $activity->title = $data['title'];
        $activity->description = $data['description'] ?? null;
        $activity->activity_date = $data['activity_date'] ?? null;
        $activity->category_activity_id = $data['category_activity_id'] ?? null;
        $activity->save();

        if ($request->hasFile('gallery')) {
            foreach ($request->file('gallery') as $file) {
                $path = $file->store('activities/gallery', 'public');
                GalleryActivity::create([
                    'activity_id' => $activity->id,
                    'image' => $path,
                ]);
            }
        }

        return redirect()->route('manage-activity')->with('success', 'Activity updated successfully.');
    }

    public function destroyActivity($id)
    {
        $activity = Activity::findOrFail($id);

        // delete cover image
        if ($activity->image_cover) {
            \Illuminate\Support\Facades\Storage::disk('public')->delete($activity->image_cover);
        }

        // delete gallery files
        foreach ($activity->galleryActivities as $g) {
            if ($g->image) {
                \Illuminate\Support\Facades\Storage::disk('public')->delete($g->image);
            }
        }

        $activity->delete();

        return redirect()->route('manage-activity')->with('success', 'Activity deleted successfully.');
    }
}
