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
}
