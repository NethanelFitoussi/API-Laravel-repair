<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeIntervention extends Model
{
    protected $fillable = [
    	'types'
	];

	/**
    * Relationship.
    *
    * @var string
    */
    public function intervention() {
        return $this->hasMany('App\Intervention');
	}
}
