<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventTagRelation extends Model
{
    protected $table = 'event_tag_relations';

    protected $fillable = [
        'event_id',
        'event_tag_id',
    ];

    public $timestamps = false;
}
