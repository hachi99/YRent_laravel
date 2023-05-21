<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Fact
 *
 * @property $id
 * @property $rfc
 * @property $reserv_id
 * @property $custom_id
 * @property $updated_at
 * @property $created_at
 *
 * @property Custom $custom
 * @property Reserv $reserv
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Fact extends Model
{
    
    static $rules = [
		'rfc' => 'required',
		'reserv_id' => 'required',
		'custom_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['rfc','reserv_id','custom_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function custom()
    {
        return $this->hasOne('App\Models\Custom', 'id', 'custom_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function reserv()
    {
        return $this->hasOne('App\Models\Reserv', 'id', 'reserv_id');
    }
    

}
