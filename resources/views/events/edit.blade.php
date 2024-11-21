@extends('layouts.personal')


@section('content')
    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold text-center text-gray-800 mb-6">Edit Event</h1>


        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <form action="{{ route('events.update', $event->id) }}" method="POST" class="px-8 py-8">
                @csrf
                @method('PUT')


                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-bold mb-2">Name Event</label>
                    <input type="text" name="name" id="name"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500"
                        value="{{ old('name', $event->name) }}" required>
                    @error('name')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>


                <div class="mb-4">
                    <label for="image" class="block text-gray-700 font-bold mb-2">Image Event</label>
                    <input type="text" name="image" id="image"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500"
                        value="{{ old('image', $event->image) }}" required>
                    @error('image')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>


                <div class="mb-4">
                    <label for="date_event" class="block text-gray-700 font-bold mb-2">Event Date</label>
                    <input type="date" name="date_event" id="date_event"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500"
                        value="{{ old('date_event', $event->date_event) }}" required>
                    @error('date_event')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>


                <div class="mb-6">
                    <label for="description" class="block text-gray-700 font-bold mb-2">Description</label>
                    <textarea name="description" id="description"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500"
                        rows="4">{{ old('description', $event->description) }}</textarea>
                    @error('description')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>


                <div class="mb-6">
                    <label for="country" class="block text-gray-700 font-bold mb-2">Country</label>
                    <input type="text" name="country" id="country"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500"
                        value = {{ old('country', $event->location->country) }}>
                    @error('country')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>


                <div class="mb-6">
                    <label for="city" class="block text-gray-700 font-bold mb-2">City</label>
                    <input type="text" name="city" id="city"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500"
                        value="{{ old('city', $event->location->city) }}">
                    @error('city')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>


                <div class="mb-6">
                    <label for="max_people" class="block text-gray-700 font-bold mb-2">Maximum capacity of people</label>
                    <input type="number" name="max_people" id="max_people"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500"
                        value = {{ old('max_people', $event->EventCapacity->max_people) }}>
                    @error('max_people')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>


                <div class="mb-6">
                    <select name="is_active" id="is_active"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500"
                        rows="4">
                        <option value="0" {{ old('is_active') == false ? 'selected' : '' }}
                        >Inactive</option>
                        <option value="1" {{ old('is_active') == false ? '' : '' }}
                        >Active</option>
                    </select>
                </div>


                <div class="flex justify-end">
                    <a href="{{ route('events.adminIndex') }}"
                        class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600 mr-2">Cancelar</a>
                    <button type="submit"
                        class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Actualizar Categoría</button>
                </div>
            </form>
        </div>
    </div>
@endsection
