<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Custom
 *
 * @property $id
 * @property $name
 * @property $last_name
 * @property $email
 * @property $telephone
 * @property $license
 *
 * @property Fact[] $facts
 * @property Reserv[] $reservs
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Custom extends Model
{
    
    static $rules = [
		'name' => 'required',
		'last_name' => 'required',
		'email' => 'required',
		'telephone' => 'required',
		'license' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','last_name','email','telephone','license'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function facts()
    {
        return $this->hasMany('App\Fact', 'custom_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reservs()
    {
        return $this->hasMany('App\Reserv', 'custom_id', 'id');
    }
    

}
