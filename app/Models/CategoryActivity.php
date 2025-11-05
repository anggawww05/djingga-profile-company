<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryActivity extends Model
{
    protected $table = 'category_activities';

    protected $fillable = [
        'category_name',
    ];

    public function activities()
    {
        return $this->hasMany(Activity::class, 'category_activity_id');
    }
}
