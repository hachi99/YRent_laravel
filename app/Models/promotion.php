<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Promotion
 *
 * @property $id
 * @property $type
 * @property $detail
 * @property $validity
 * @property $updated_at
 * @property $created_at
 *
 * @property Reserv[] $reservs
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Promotion extends Model
{
    
    static $rules = [
		'type' => 'required',
		'detail' => 'required',
		'validity' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['type','detail','validity'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reservs()
    {
        return $this->hasMany('App\Models\Reserv', 'promotion_id', 'id');
    }
    

}
