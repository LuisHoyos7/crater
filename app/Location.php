<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'country_id',
        'state_id',
        'city_id',
        'address',
        'description',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'country_id' => 'integer',
        'state_id' => 'integer',
        'city_id' => 'integer',
    ];


    public function company()
    {
        return $this->hasOne(\App\Company::class);
    }

    public function country()
    {
        return $this->belongsTo(\App\Country::class);
    }

    public function state()
    {
        return $this->belongsTo(\App\State::class);
    }

    public function city()
    {
        return $this->belongsTo(\App\City::class);
    }
}
