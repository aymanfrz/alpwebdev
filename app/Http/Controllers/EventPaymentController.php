<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\EventPayment;
use App\Models\EventRegistration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class EventPaymentController extends Controller
{
    // Form e penbayaran
    public function create(EventRegistration $registration)
    {
        $event = $registration->event;

        return view('payments.create', compact('registration', 'event'));
    }

    // pembayaran disimpan
    public function store(Request $request, EventRegistration $registration)
    {
        $request->validate([
            'proof' => 'required|image|max:2048',
        ]);

        $path = $request->file('proof')->store('payments', 'public');

        $registration->update([
            'payment_proof' => $path,
            'status' => 'paid',
        ]);

        return redirect('/events')
            ->with('success', 'Bukti pembayaran berhasil dikirim.');
    }
}
