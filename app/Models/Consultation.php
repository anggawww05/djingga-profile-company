<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    protected $table = 'consultations';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'company',
        'service',
        'description',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }
}
