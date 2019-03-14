<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Client;
use App\Produit;
use Validator;
use App\Http\Resources\ClientResource;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     * @SWG\Get(
     *     path="/api/clients",
     *     tags={"Clients"},
     *     summary="List Clients",
     *     @SWG\Response(
     *          response=200,
     *          description="Success: List all Clients",
     *          @SWG\Schema(ref="#/definitions/Client")
     *      ),
     *     @SWG\Response(
     *          response="404",
     *          description="Not Found"
     *     ),
     *     @SWG\Response(
	 * 			response="405",
	 * 			description="Invalid HTTP Method"
	 *      )
     * ),
     */
    public function index()
    {
        /* $user = Client::find(1);

        foreach ($user->produits as $role) {
            echo $role->reference;
        } */
        $listClients = Client::all();
        return $listClients;
        // Using Paginate method We explain this later in the book
        // return ClientsResource::collection(Bike::with('ratings')->paginate(10));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * 
     * @SWG\Post(
     *     path="/api/Clients",
     *     tags={"Clients"},
     *     summary="Create Client",
     *     @SWG\Parameter(
     * 			name="body",
     * 			in="body",
     * 			required=true,
     * 			@SWG\Schema(ref="#/definitions/Client"),
     * 			description="Json format",
     * 		),
     *     @SWG\Response(
     *          response=201,
     *          description="Success: A Newly Created Client",
     *          @SWG\Schema(ref="#/definitions/Client")
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
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'phone_number' => 'required'
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        // Creating a record in a different way
        $createClient = Client::create([
            'name' => $request->name,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'dept' => $request->dept,
        ]);
        //return $createClient;
        return new ClientResource($createClient);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * 
     * @SWG\Get(
     *     path="/api/clients/{id}",
     *     tags={"Clients"},
     *     summary="Get Clients by Id",
     *     @SWG\Parameter(
     *          name="id",
     *          in="path",
     *          required=true,
     *          type="integer",
     *          description="Display the specified client by id.",
     * 		),
     *     @SWG\Response(
     *          response=200,
     *          description="Success: Return the Client",
     *          @SWG\Schema(ref="#/definitions/Client")
     *      ),
     *     @SWG\Response(
     *          response="404",
     *          description="Not Found"
     *   )
     * ),
     */
    public function show(Client $client)
    {
        return new ClientResource($client);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     *
     * @SWG\Put(
     *     path="/api/clients/{id}",
     *     tags={"Clients"},
     *     summary="Update Client",
     *     @SWG\Parameter(
     *          name="id",
     *          in="path",
     *          required=true,
     *          type="integer",
     *          description="Update the specified client by id.",
     * 		),
     *     @SWG\Parameter(
     * 			name="body",
     * 			in="body",
     * 			required=true,
     * 			@SWG\Schema(ref="#/definitions/Client"),
     * 			description="Json format",
     * 		),
     *     @SWG\Response(
     *          response=200,
     *          description="Success: Return the Client updated",
     *          @SWG\Schema(ref="#/definitions/Client")
     *      ),
     *     @SWG\Response(
     *          response="422",
     *          description="Missing mandatory field"
     *     ),
     *     @SWG\Response(
     *          response="404",
     *          description="Not Found"
     *   )
     * ),
     */
    public function update(Request $request, Client $client)
    {
        $client->update($request->only(['name', 'phone_number', 'email', 'dept']));

        return new BikesResource($client);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * 
     *      @SWG\Delete(
     *     path="/api/clients/{id}",
     *     tags={"Clients"},
     *     summary="Delete client",
     *     description="Delete the specified client by id",
     *     @SWG\Parameter(
     *         description="Client id to delete",
     *         in="path",
     *         name="id",
     *         required=true,
     *         type="integer",
     *         format="int64"
     *     ),
     *     @SWG\Response(
     *         response=404,
     *         description="Not found"
     *     ),
     *     @SWG\Response(
     *         response=204,
     *         description="Success: successful deleted"
     *     ),
     * )
     */
    public function destroy($id)
    {
        $deleteClientById = Client::find($id)->delete();
        return response()->json([], 204);
    }
}
