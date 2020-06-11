<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nit',
        'name',
        'business_name',
        'legal_representative',
        'comercial_activity',
        'phone_number',
        'address',
        'logo',
        'location_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'location_id' => 'integer',
    ];


    public function location()
    {
        return $this->belongsTo(\App\Location::class);
    }
}
