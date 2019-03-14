<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = [
    	'name',
	];
	
    /**
    * Relationship.
    *
    * @var string
    */
    public function manufacturing_model() {
        return $this->hasMany('App\ManufacturingModel');
    }
}
