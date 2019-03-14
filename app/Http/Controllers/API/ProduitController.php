<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;

use App\Produit;
use Validator;
use App\Http\Controllers\Controller;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        

        $user = Produit::find(1);

        echo $user->manufacturing_model->picture;
        echo "<img src='".  $user->manufacturing_model->picture ."'></img>";
        /* $listProduits = Produit::all();
        return $listProduits; */
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * 
     * @SWG\Post(
     *     path="/api/produits",
     *     tags={"Produits"},
     *     summary="Create produit",
     *     @SWG\Parameter(
     * 			name="body",
     * 			in="body",
     * 			required=true,
     * 			@SWG\Schema(ref="#/definitions/Produit"),
     * 			description="Json format",
     * 		),
     *     @SWG\Response(
     *          response=201,
     *          description="Success: A Newly Created Produit",
     *      ),
     *     @SWG\Response(
     *          response=401,
     *          description="Refused: Unauthenticated"
     *     ),
     *     @SWG\Response(
     *          response="422",
     *          description="Missing mandatory field"
     *     ),
     *     @SWG\Response(
     *          response="404",
     *          description="Not Found"
     *     ),
     *     @SWG\Response(
	 * 			response="405",
	 * 			description="Invalid HTTP Method"
	 *      ),
	 *      security={
	 * 		   { "api_key":{} }
	 * 		}
     * ),
     */
    public function store(Request $request)
    {
        // Creating a record in a different way
        $createProduit = Produit::create([
            'reference' => $request->reference,
            'price' => $request->price,
            'buying_price' => $request->buying_price,
            'stock' => $request->stock,
            'visible' => $request->visible,
        ]);
        return $createProduit;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
