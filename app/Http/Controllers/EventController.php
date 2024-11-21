<?php

namespace App\Http\Controllers;

use App\Models\Event;


class EventController extends Controller
{
    public function Index()
    {
        // Obtenemos todas las categorías
        $events = Event::all();
        // Pasamos las categorías a la vista 'categories.index'
        return view('events.index', compact('events'));
    }

    public function adminIndex()
    {
        // Obtenemos todas las categorías
        $events = Event::all();
        // Pasamos las categorías a la vista 'categories.index'
        return view('events.adminIndex', compact('events'));
    }
}
