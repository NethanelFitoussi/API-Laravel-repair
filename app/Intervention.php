<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


/**
* @SWG\Definition(
* definition="Itervention",
* required={"password", "price"},
* @SWG\Property(
* property="Password",
* type="string",
* description="Mot de passe du telephone",
* example="*********"
* ),
* @SWG\Property(
* property="price",
* type="string",
* description="Prix de l'intervention",
* example="39€"
* )
* )
*/

class Intervention extends Model
{
    protected $fillable = [
    	'password',
    	'price'
	];
}
