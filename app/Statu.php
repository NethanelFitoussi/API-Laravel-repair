<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
* @SWG\Definition(
* definition="Status",
* required={"types"},
* @SWG\Property(
* property="types",
* type="string",
* description="Quel status de l'intervention",
* example="Terminer, en cour, payer, en attente, commandé..."
* )
* )
*/

class Statu extends Model
{
    protected $fillable = [
    	'types'
	];
}
