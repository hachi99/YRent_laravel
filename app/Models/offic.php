<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Offic
 *
 * @property $id
 * @property $place_name
 * @property $address
 * @property $telephone
 * @property $schedule
 * @property $updated_at
 * @property $created_at
 *
 * @property Reserv[] $reservs
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Offic extends Model
{
    
    static $rules = [
		'place_name' => 'required',
		'address' => 'required',
		'telephone' => 'required',
		'schedule' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['place_name','address','telephone','schedule'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reservs()
    {
        return $this->hasMany('App\Models\Reserv', 'offic_id', 'id');
    }
    

}
