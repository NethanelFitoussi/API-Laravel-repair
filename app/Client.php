<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
* @SWG\Definition(
* definition="Client",
* required={"name", "phone_number"},
* @SWG\Property(
* property="name",
* type="string",
* description="Nom du client",
* example="Nethanel Fitoussi"
* ),
* @SWG\Property(
* property="phone_number",
* type="string",
* description="Phone Number",
* example="0123456789"
* ),
* @SWG\Property(
* property="email",
* type="string",
* description="Email du client",
* example="contact@nethanelfitoussi.com"
* ),
* @SWG\Property(
* property="dept",
* type="string",
* description="Argent du par le client",
* example="430 euros"
* )
* )
*/


class Client extends Model
{
    protected $fillable = [
    	'name',
    	'phone_number',
    	'email',
    	'dept'
	];
	/**
    * Relationship.
    *
    * @var string
    */
    public function produits() {
        return $this->belongsToMany('App\Produit');
    }
}
