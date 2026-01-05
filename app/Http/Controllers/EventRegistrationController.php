<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\EventRegistration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventRegistrationController extends Controller
{
    // siswa daftar event
    public function store(Event $event)
    {
        $user = Auth::user();

        // ngecegah daftar dua kali
        $exists = $event->registrations()
            ->where('user_id', $user->id)
            ->exists();

        if ($exists) {
            return back()->with('error', 'Anda sudah terdaftar di event ini.');
        }

        // Event gratis
        if ($event->price == 0) {
            $event->registrations()->create([
                'user_id' => $user->id,
                'status' => 'registered',
                'registered_at' => now(),
            ]);

            return redirect('/events')
                ->with('success', 'Berhasil mendaftar event.');
        }

        // Event e bayar
        $registration = $event->registrations()->create([
            'user_id' => $user->id,
            'status' => 'pending_payment',
            'registered_at' => now(),
        ]);

        return redirect()->route('payments.create', $registration->id);
    }

    // ADMIN HAPUS PESERTA
    public function destroy(EventRegistration $registration)
    {
        $registration->delete();
        return back()->with('success', 'Peserta berhasil dihapus.');
    }
}
