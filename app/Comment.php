<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
* @SWG\Definition(
* definition="Comments Intervention",
* required={},
* @SWG\Property(
* property="comments",
* type="text",
* description="Commentaire",
* example="Iphone acheter a Albert pour 500 ils Puis débloquer par nos soin"
* ),
* @SWG\Property(
* property="Name",
* type="text",
* description="Commentaire",
* example="Iphone acheter a Albert pour 500 ils Puis débloquer par nos soin"
* )
* )
*/

class Comment extends Model
{
    protected $fillable = [
    	'comments',
    	'name'
	];

	/**
    * Relationship.
    *
    * @var string
    */
    public function intervention() {
        return $this->belongsTo('App\Intervention');
	}
}
