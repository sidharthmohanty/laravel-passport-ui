<?php
use Illuminate\Http\Request;

use App\Http\Controllers\Api\LoginController;

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

Route::group(['middleware' => 'auth:api', 'namespace' => 'Api'], function(){
    
    Route::get('/user', 'LoginController@alluser');
    
});
 
   
Route::post('/login', [LoginController::class, "login"])->name('api.login');
Route::post('/register', [LoginController::class, "register"])->name('api.register');
