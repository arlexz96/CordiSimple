@extends('layouts.personal')

@section('content')
    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold text-center text-gray-800 mb-6">Event Details</h1>

        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <div class="px-8 py-6">

                <div class="mb-4">
                    <h3 class="text-2xl font-bold text-gray-700 mb-2">Name Event</h3>
                    <p class="text-gray-600 text-lg">{{ $event->name }}</p>
                </div>

                <div class="mb-4">
                    <h3 class="text-xl font-bold text-gray-700 mb-2">Description</h3>
                    <p class="text-gray-600 text-lg">{{ $event->description ? $event->description : 'No tiene descripción' }}</p>
                </div>

                <div class="mb-4">
                    <h3 class="text-xl font-bold text-gray-700 mb-2">Date</h3>
                    <p class="text-gray-600 text-lg">{{ $event->date_event }}</p>
                </div>

                <div class="mb-4">
                    <h3 class="text-xl font-bold text-gray-700 mb-2">Status</h3>
                    <p class="text-gray-600 text-lg">{{ $event->is_active ? 'Active' : 'Inactive' }}</p>
                </div>

                <div class="mb-4">
                    <h3 class="text-xl font-bold text-gray-700 mb-2">Country</h3>
                    <p class="text-gray-600 text-lg">{{ $event->location->country }}</p>
                </div>

                <div class="mb-4">
                    <h3 class="text-xl font-bold text-gray-700 mb-2">City</h3>
                    <p class="text-gray-600 text-lg">{{ $event->location->city }}</p>
                </div>

                <div class="mb-4">
                    <h3 class="text-xl font-bold text-gray-700 mb-2">Capacity</h3>
                    <p class="text-gray-600 text-lg">{{ $event->eventCapacity->max_people }} people</p>
                </div>

                <div class="mb-4">
                    <h3 class="text-xl font-bold text-gray-700 mb-2">Tickets Availables</h3>
                    <p class="text-gray-600 text-lg">{{ $event->eventCapacity->places_availables }}</p>
                </div>

                <div class="mb-4">
                    <h3 class="text-xl font-bold text-gray-700 mb-2">Creada el:</h3>
                    <p class="text-gray-600 text-lg">{{ $event->created_at->format('d-m-Y H:i:s') }}</p>
                </div>

                <div class="mb-4">
                    <h3 class="text-xl font-bold text-gray-700 mb-2">Última actualización:</h3>
                    <p class="text-gray-600 text-lg">{{ $event->updated_at->diffForHumans() }}</p>
                </div>



                <div class="flex justify-end mt-6">
                    <a href="{{ route('events.adminIndex') }}"
                        class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600 mr-2">Volver a la lista</a>
{{--                     <a href="{{ route('categories.edit', $category->id) }}"
                        class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Editar Categoría</a> --}}
                </div>
            </div>
        </div>
    </div>
@endsection
