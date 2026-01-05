<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'title',
        'description',
        'start_date',
        'start_time',
        'location',
        'speaker_name',
        'picture',
        'price',
        'is_featured',
        'event_category_id',
        'bank_account_id',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // kategori event
    public function category()
    {
        return $this->belongsTo(EventCategory::class, 'event_category_id');
    }

    // rekening pembayaran (null kalau gratis)
    public function bankAccount()
    {
        return $this->belongsTo(BankAccount::class);
    }

    // peserta event
    public function registrations()
    {
        return $this->hasMany(EventRegistration::class);
    }

    // cek event gratis atau tidak
    public function isFree(): bool
    {
        return $this->price == 0;
    }
}
