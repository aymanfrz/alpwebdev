<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\EventCategory;
use App\Models\BankAccount;
use Illuminate\Http\Request;

class EventAdminController extends Controller
{
    public function create()
    {
        $categories = EventCategory::all();

        return view('admin.events.create', [
            'categories' => $categories
        ]);
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'start_date' => 'required|date',
            'start_time' => 'required',
            'location' => 'required',
            'speaker_name' => 'nullable|string|max:255',
            'price' => 'required|integer|min:0',
            'event_category_id' => 'required|exists:event_categories,id',
            'is_featured' => 'nullable|boolean',
        ]);

        Event::create([
            'title' => $request->title,
            'description' => $request->description,
            'start_date' => $request->start_date,
            'start_time' => $request->start_time,
            'location' => $request->location,
            'speaker_name' => $request->speaker_name,
            'price' => $request->price,
            'is_featured' => $request->has('is_featured'),
            'bank_account_id' => $request->bank_account_id,
            'event_category_id' => $request->event_category_id,
            'user_id' => request()->user()->id,
        ]);

        return redirect('/events')->with('success', 'Event berhasil dibuat');
    }

    public function edit(Event $event)
    {
        return view('admin.events.edit', compact('event'));
    }

    public function update(Request $request, Event $event)
    {
        $event->update($request->all());

        return redirect('/events')->with('success', 'Event berhasil diperbarui');
    }

    public function destroy(Event $event)
    {
        $event->delete();

        return back()->with('success', 'Event berhasil dihapus');
    }
}
