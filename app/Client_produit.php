<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
* @SWG\Definition(
* definition="Client get product",
* required={"client_id", "produit_id"},
* @SWG\Property(
* property="comments",
* type="text",
* description="Commentaire",
* example="Iphone acheter a Albert pour 500 ils Puis débloquer par nos soin"
* )
* )
*/

class Client_produit extends Model
{
    protected $fillable = [
    	'client_id',
    	'produit_id',
    	'comments'
	];
}
