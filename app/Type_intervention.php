<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
* @SWG\Definition(
* definition="Intervention types",
* required={"types"},
* @SWG\Property(
* property="types",
* type="string",
* description="Quel type d'intervention",
* example="Réparation, Achat, Vente..."
* )
* )
*/

class Type_intervention extends Model
{
    protected $fillable = [
    	'types'
	];
}
