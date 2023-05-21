<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Insurcar
 *
 * @property $id
 * @property $type
 * @property $characteristic
 * @property $cost
 * @property $updated_at
 * @property $created_at
 *
 * @property Reserv[] $reservs
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Insurcar extends Model
{
    
    static $rules = [
		'type' => 'required',
		'characteristic' => 'required',
		'cost' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['type','characteristic','cost'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reservs()
    {
        return $this->hasMany('App\Models\Reserv', 'insurcar_id', 'id');
    }
    

}
