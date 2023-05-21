<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Flot
 *
 * @property $id
 * @property $details
 * @property $passenger
 * @property $doors
 * @property $cost
 * @property $updated_at
 * @property $created_at
 *
 * @property Reserv[] $reservs
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Flot extends Model
{
    
    static $rules = [
		'details' => 'required',
		'passenger' => 'required',
		'doors' => 'required',
		'cost' => 'required',
    'pic' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['details','passenger','doors','cost'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reservs()
    {
        return $this->hasMany('App\Models\Reserv', 'flot_id', 'id');
    }
    

}
