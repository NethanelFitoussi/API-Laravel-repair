<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManufacturingModel extends Model
{
    protected $fillable = [
    	'name',
    	'picture',
    	'reference',
        'color',
        'description',
    	'brand_id',
    	'type_produits_id'
    ];
    
    /**
    * Relationship.
    *
    * @var string
    */
    public function produits() {
        return $this->hasMany('App\Produit', 'model_id');
    }
    public function type_produits() {
        return $this->belongsTo('App\TypeProduit');
    }
    public function brand() {
        return $this->belongsTo('App\Brand');
    }
}
