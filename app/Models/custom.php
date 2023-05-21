<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class custom extends Model
{ 
   
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'name',
        'last_name',
        'email',
        'telephone',
        'license',
    ];

    public function fact()
    {
        return $this->hasMany(fact::class);
    }

    public function reserv()
    {
        return $this->hasMany(reserv::class);
    }
}
