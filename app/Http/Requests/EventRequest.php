<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:600',
            'image' => 'required',
            'date_event' => 'required|date|after_or_equal:today',
            'is_active' => 'required|boolean',
            'location_id' => 'nullable|exists:locations,id',
            'event_capacity_id' => 'nullable|exists:events_capacity,id',
            'country' => 'required|string',
            'city' => 'required|string',
            'max_people' => 'required|integer'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Name is required.',
            'name.unique' => 'Name is already exist',
            'name.max' => 'the name must be less than 255 characters',
            'description.max' => 'The description cannot be longer than 600 characters.',
            'date_event.required' => 'Date Event i requiered',
            'date_event.after_or_equal' => 'Date must be greater than or equal to the actual date',
            'image.required' => 'Image is requiered',
            'max_people.integer' => 'must be an integer'
        ];
    }
}
