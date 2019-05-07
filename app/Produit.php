<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

 /**
 * @SWG\Definition(
 *     definition="Produit",
 *     required={"make", "model", "year", "mods"},
 *     @SWG\Property(
 *          property="reference",
 *          type="string",
 *          description="Reference number",
 *          example="A2032"
 *    ),
 *     @SWG\Property(
 *          property="price",
 *          type="string",
 *          description="Price product",
 *          example="150€"
 *    ),
 *     @SWG\Property(
 *          property="buying_price'",
 *          type="string",
 *          description="Price for the buyer",
 *          example="50€"
 *    ),
 *     @SWG\Property(
 *          property="stock",
 *          type="boleran",
 *          description="Stock of this product",
 *          example="30"
 *    ),
 *     @SWG\Property(
 *          property="visible",
 *          type="string",
 *          description="If this product is in stock",
 *          example="0 or 1"
 *    ),
 *    @SWG\Property(
 *          property="client_id",
 *          type="integer",
 *          description="Association with: client_id",
 *          example="1"
 *    )
 * )
 */

class Produit extends Model
{
    protected $fillable = [
    	'name',
    	'picture',
    	'reference',
        'color',
        'description',
        'price',
        'stock',
        'visible',
        'buying_price',
    	'brand_id',
    	'type_produits_id'
    ];
    /**
    * Relationship.
    *
    * @var string
    */
    public function clients() {
        return $this->belongsToMany('App\Client');
    }
    public function type_produits() {
        return $this->belongsTo('App\TypeProduit');
    }
    public function brand() {
        return $this->belongsTo('App\Brand');
    }

}
