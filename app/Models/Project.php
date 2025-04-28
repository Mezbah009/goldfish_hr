<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title',
        'developer_id',
    ];


    public function errorTrackings()
    {
        return $this->hasMany(ErrorTracking::class);
    }
}