<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Subscrip
 *
 * @property $id
 * @property $Name
 * @property $email
 * @property $telephone
 * @property $updated_at
 * @property $created_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Subscrip extends Model
{
    
    static $rules = [
		'Name' => 'required',
		'email' => 'required',
		'telephone' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Name','email','telephone'];



}
