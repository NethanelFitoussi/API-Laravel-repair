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

class Type_produit extends Model
{
    protected $fillable = [
    	'types'
	];
}
