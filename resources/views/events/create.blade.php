@extends('layouts.personal')

@section('content')
    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold text-center text-gray-800 mb-6">Create New Event</h1>

        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <form action="{{ route('events.store') }}" method="POST" class="px-8 py-8">
                @csrf

                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-bold mb-2">Event Name</label>
                    <input type="text" name="name" id="name"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500"
                        value="{{ old('name') }}" placeholder="Type the name of the event" required>
                    @error('name')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="image" class="block text-gray-700 font-bold mb-2">Image Event</label>
                    <input type="text" name="image" id="image"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500"
                        value="{{ old('image') }}" required>
                    @error('image')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="date_event" class="block text-gray-700 font-bold mb-2">Event Date</label>
                    <input type="date" name="date_event" id="date_event"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500"
                        value="{{ old('date_event') }}" required>
                    @error('date_event')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="description" class="block text-gray-700 font-bold mb-2">Description</label>
                    <textarea name="description" id="description"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500" rows="4"
                        placeholder="Type the description of the event">{{ old('description') }}</textarea>
                    @error('description')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="country" class="block text-gray-700 font-bold mb-2">Country</label>
                    <input type="text" name="country" id="country"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500"
                        rows="4" placeholder="Type the country of the event">{{ old('country') }}</input>
                    @error('country')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="city" class="block text-gray-700 font-bold mb-2">City</label>
                    <input type="text" name="city" id="city"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500"
                        rows="4" placeholder="Type the city of the event">{{ old('city') }}</input>
                    @error('city')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="max_people" class="block text-gray-700 font-bold mb-2">Maximum capacity of people</label>
                    <input type="number" name="max_people" id="max_people"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500"
                        rows="4"
                        placeholder="Type the maximum capacity of people of the event">{{ old('max_people') }}</input>
                    @error('max_people')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-6">
                    <select name="is_active" id="is_active"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500"
                        rows="4" hidden>
                        <option value="0" {{ old('is_active') == false ? 'selected' : '' }}>Inactive</option>
                    </select>
                </div>

                <div class="flex justify-end">
                    <a href="{{ route('events.adminIndex') }}"
                        class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600 mr-2">Cancel</a>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Create
                        Event</button>
                </div>
            </form>
        </div>
    </div>
@endsection
