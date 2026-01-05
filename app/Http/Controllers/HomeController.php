<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class HomeController extends Controller
{
    public function index()
    {
        // ngambil 2 event pilihan
        $featuredEvents = Event::where('is_featured', true)
            ->orderBy('start_date', 'asc')
            ->take(2)
            ->get();

        return view('home', compact('featuredEvents'));
    }
}
