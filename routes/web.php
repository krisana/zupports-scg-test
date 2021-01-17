<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ApisController;
use App\Http\Controllers\VisitorsStatisticController;
use App\Http\Controllers\FoodsController;
use App\Http\Controllers\ReviewsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/home', [HomeController::class, 'index']);

Route::get('/', [ApisController::class, 'index']);
Route::get('/getrestaurants', [ApisController::class, 'getRestaurants']);
Route::get('/getbyradius/{lat}/{lng}/{radius}', [ApisController::class, 'getByRadius']);
Route::get('/getbytype/{lat}/{lng}/{type}', [ApisController::class, 'getByType']);
Route::get('/getbyspecific/{lat}/{lng}', [ApisController::class, 'getBySpecific']);
Route::get('/getplaces', [ApisController::class, 'getPlaces']);

// Route::get('/', 'ApisController@index');
// Route::get('/getrestaurants', 'ApisController@getRestaurants');
// Route::get('/getbyradius/{lat}/{lng}/{radius}', 'ApisController@getByRadius');
// Route::get('/getbytype/{lat}/{lng}/{type}', 'ApisController@getByType');
// Route::get('/getbyspecific/{lat}/{lng}', 'ApisController@getBySpecific');
// Route::get('/getplaces', 'ApisController@getPlaces');

// statistics - visitors
// Route::get('/stat/vistors/{place_id}', 'VisitorsStatisticController@vistors');
// Route::get('/stat/savevisit/{place_id}', 'VisitorsStatisticController@saveStatistics');

Route::get('/stat/vistors/{place_id}', [VisitorsStatisticController::class, 'vistors']);
Route::get('/stat/savevisit/{place_id}', [VisitorsStatisticController::class, 'saveStatistics']);

// statistics - foods
// Route::get('/stat/foods/{place_id}', 'FoodsController@foods');
// Route::get('/stat/savefood/{place_id}', 'FoodsController@saveFood');

Route::get('/stat/foods/{place_id}', [FoodsController::class, 'foods']);
Route::get('/stat/savefood/{place_id}', [FoodsController::class, 'saveFood']);


// get review
// Route::get('/review/{place_id}', 'ReviewsController@getReview');
Route::get('/eview/{place_id}', [ReviewsController::class, 'getReview']);
