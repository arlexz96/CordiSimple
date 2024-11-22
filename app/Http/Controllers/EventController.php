<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventRequest;
use App\Models\Event;
use App\Models\EventCapacity;
use App\Models\Location;

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

    public function destroy(string $id)
    {
        // Verifica si el usuario está autenticado y es administrador
        /* if (!Auth::check() || Auth::user()->role_id != 1) { // 1 corresponde al rol de 'admin'
            return redirect()->route('categories.index')->with('error', 'No tienes permiso para acceder a esta sección.');
        } */
        // Buscamos la categoría por ID y la eliminamos
        $event = Event::findOrFail($id);
        $event->delete();


        // Redirigimos a la lista de categorías con un mensaje de éxito
        return redirect()->route('events.adminIndex')->with('success', 'Categoría eliminada con éxito.');
    }


    public function edit(string $id)
    {
        // Obtenemos la categoría por ID
        $event = Event::findOrFail($id);
        // Retornamos la vista para editar la categoría
        return view('events.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EventRequest $request, string $id)
    {
        $validatedData = $request->validated();

        $event = Event::findOrFail($id);
        $event->location->update($validatedData);
        $event->eventCapacity->update($validatedData);
        $event->update($validatedData);

        return redirect()->route('events.adminIndex')->with('success', 'Categoría actualizada exitosamente.');
    }
    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EventRequest $request)
    {
        $validatedData = $request->validated();

        $location = Location::create([
            'country' => $request->input('country'),
            'city' => $request->input('city')
        ]);

        $eventCapacity = EventCapacity::create([
            'max_people' => $request->input('max_people'),
            'places_availables' => $request->input(('max_people'))
        ]);

        /* Event::create($validatedData); */
        Event::create(array_merge($validatedData, [
            'location_id' => $location->id,
            'event_capacity_id' =>$eventCapacity->id,
        ]));

        return redirect()->route('events.index')->with('success', 'Categoría creada con éxito.');
    }


}
