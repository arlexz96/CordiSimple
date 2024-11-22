<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    // protected $table = 'productos';
    // protected $primaryKey = 'id';
    // public $timestamps = true;
    // protected $guarded = [];
    protected $fillable = [
        'name',
        'description',
        'date_event',
        'is_active',
        'location_id',
        'event_capacity_id',
        'image'
        // Otros campos...
    ];

    // protected $hidden = [
    // ];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    public function location()
    {
        return $this->belongsTo(Location::class);
    }
    public function eventCapacity()
    {
        return $this->belongsTo(EventCapacity::class);
    }

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
