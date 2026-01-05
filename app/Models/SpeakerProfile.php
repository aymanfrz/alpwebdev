<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SpeakerProfile extends Model
{
    protected $fillable = [
        'name',
        'occupation',
        'bio',
    ];

    public function events()
    {
        return $this->belongsToMany(
            Event::class,
            'event_speakers'
        );
    }
}
