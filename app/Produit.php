<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
* @SWG\Definition(
* definition="Prosuit",
* required={"brand", "model", "price"},
* @SWG\Property(
* property="reference",
* type="string",
* description="Mot de passe du telephone",
* example="IpXsMax128"
* ),
* @SWG\Property(
* property="brand",
* type="string",
* description="Marque du produit",
* example="Apple"
* ),
* @SWG\Property(
* property="model",
* type="string",
* description="Model du produit",
* example="Iphone Xs Max"
* ),
* @SWG\Property(
* property="price",
* type="string",
* description="Prix de vente",
* example="300€"
* ),
* @SWG\Property(
* property="buying_price",
* type="string",
* description="Prix a l'achat du produit",
* example="100€"
* )
* )
*/

class Produit extends Model
{
    protected $fillable = [
    	'reference',
        'brand',
        'model',
        'price',
        'buying_price'
	];
}
