<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventSpeaker extends Model
{
    protected $fillable = [
        'event_id',
        'speaker_profile_id',
        'topic',
    ];
}
