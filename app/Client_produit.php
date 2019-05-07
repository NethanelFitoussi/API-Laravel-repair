<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
* @SWG\Definition(
* definition="Client had Produit",
* required={"clients_id", "produits_id"},
* @SWG\Property(
* property="comments",
* type="string",
* description="Comments",
* example="Iphone buy on ..."
* ),
* @SWG\Property(
*  property="client_id",
*  type="integer",
*  description="Association with: client_id",
*  example="1"
* ),
* @SWG\Property(
*  property="produit_id",
*  type="integer",
*  description="Association with: produit_id",
*  example="2"
* )
* )
*/

class Client_produit extends Model
{
    protected $fillable = [
        'comments',
        'clients_id',
        'produits_id'
	];
}
