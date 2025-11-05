<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $table = 'activities';

    protected $fillable = [
        'title',
        'description',
        'image_cover',
        'activity_date',
        'category_activity_id',
    ];

    public function categoryActivity()
    {
        return $this->belongsTo(CategoryActivity::class, 'category_activity_id');
    }

    public function galleryActivities()
    {
        return $this->hasMany(GalleryActivity::class);
    }
}
