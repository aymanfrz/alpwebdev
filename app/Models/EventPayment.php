<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventPayment extends Model
{
    protected $fillable = [
        'event_id',
        'user_id',
        'payment_proof',
        'method',
        'status',
        'paid_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
