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
* description="Nom du client",
* example="Nethanel Fitoussi"
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
* ),
* @SWG\Property(
* property="loan",
* type="string",
* description="Si l'on a préter un téléphone",
* example="Iphone 4 blanc + clable"
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
}
