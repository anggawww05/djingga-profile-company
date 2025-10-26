<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services';

    protected $fillable = [
        'service_name',
    ];

    public function consultations()
    {
        return $this->hasMany(Consultation::class, 'service_id');
    }
}
