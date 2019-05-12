# API-Laravel-repair


Dans le composre.json rejouter dans le require
'''
"laravel/tinker": "^1.0",
'''

faire un 
'''
composer update
'''
puis 
'''
php artisan vendor:publish --provider="Tymon\JWTAuth\Providers\LaravelServiceProvider"
'''

Creer une cle secret dans le fichier env

'''
php artisan jwt:secret
'''



Ouvrir User.php (model)
'''

use Tymon\JWTAuth\Contracts\JWTSubject;
...
class User extends Authenticatable implements JWTSubject
{
	...

	/**
	 * Get JSON WEB TOKEN methods.
	 *
	 * @var array
	 */
	public function getJWTIdentifier()
	{
	  return $this->getKey();
	}
	public function getJWTCustomClaims()
	{
	  return [];
	}
}
'''


creer le controller AuthController

'''
php artisan make:controller API/AuthController
'''


Creer le routes 
'''
// Register Routes
Route::post('register', 'API\AuthController@register');
Route::post('login', 'API\AuthController@login');
Route::post('logout', 'API\AuthController@logout'); 

'''




pour vloauer uen page si on n'est pas connecte

dans le contruct du controller 
'''
$this->middleware('auth:api')
'''
