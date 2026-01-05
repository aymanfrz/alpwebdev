<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\EventRegistration;
use Illuminate\Http\Request;

class EventController extends Controller
{
    // listnya event
    public function index()
    {
        $events = Event::orderBy('start_date', 'asc')->get();

        return view('events', compact('events'));
    }


    // detailnya event
    public function show(Event $event)
    {
        return view('eventDetail', compact('event'));
    }

    // admin: bisa liat peserta event
    public function participants(Event $event)
    {
        $registrations = EventRegistration::with(['user.department'])
            ->where('event_id', $event->id)
            ->get();

        return view('events.participants', compact('event', 'registrations'));
    }
}
