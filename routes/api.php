<?php

use Illuminate\Http\Request;
use App\Client;
use App\Intervention;
use App\Http\Resources\BikesResource;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Register Routes
Route::post('register', 'API\AuthController@register');
Route::post('login', 'API\AuthController@login');
Route::post('logout', 'API\AuthController@logout'); 

Route::apiResources([
    'clients' => 'API\ClientController',
    'produits' => 'API\ProduitController',
    'interventions' => 'API\InterventionController',
    'models' => 'API\ManufacturingModelController',
    'brands' => 'API\BrandController',
]);

Route::middleware('jwt.auth')->get('me', function(Request $request) {
    return auth()->user();
});