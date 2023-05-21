<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Reserv
 *
 * @property $id
 * @property $offic_id
 * @property $collectiondate
 * @property $returndate
 * @property $flot_id
 * @property $promotion_id
 * @property $custom_id
 * @property $insurcar_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Custom $custom
 * @property Fact[] $facts
 * @property Flot $flot
 * @property Insurcar $insurcar
 * @property Offic $offic
 * @property Promotion $promotion
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Reserv extends Model
{
    
    static $rules = [
		'offic_id' => 'required',
		'collectiondate' => 'required',
		'returndate' => 'required',
		'flot_id' => 'required',
		'promotion_id' => 'required',
		'custom_id' => 'required',
		'insurcar_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['offic_id','collectiondate','returndate','flot_id','promotion_id','custom_id','insurcar_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function custom()
    {
        return $this->hasOne('App\Models\Custom', 'id', 'custom_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function facts()
    {
        return $this->hasMany('App\Models\Fact', 'reserv_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function flot()
    {
        return $this->hasOne('App\Models\Flot', 'id', 'flot_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function insurcar()
    {
        return $this->hasOne('App\Models\Insurcar', 'id', 'insurcar_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function offic()
    {
        return $this->hasOne('App\Models\Offic', 'id', 'offic_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function promotion()
    {
        return $this->hasOne('App\Models\Promotion', 'id', 'promotion_id');
    }
    

}
