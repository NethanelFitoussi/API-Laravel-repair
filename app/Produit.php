<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

 /**
 * @SWG\Definition(
 *     definition="Bike",
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
    	'reference',
        'brand',
        'model',
        'price',
        'buying_price',
        'stock',
        'visible'
    ];
    /**
    * Relationship.
    *
    * @var string
    */
    public function clients() {
        return $this->belongsToMany('App\Client');
    }
    public function manufacturing_model() {
        return $this->belongsTo('App\ManufacturingModel', 'model_id');
    }

}
