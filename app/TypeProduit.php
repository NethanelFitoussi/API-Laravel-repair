<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
* @SWG\Definition(
* definition="Product type",
* required={"types"},
* @SWG\Property(
* property="types",
* type="string",
* description="Type de produit",
* example="Computer, phone ...s"
* )
* )
*/

class TypeProduit extends Model
{
    protected $fillable = [
    	'types'
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

