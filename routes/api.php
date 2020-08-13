<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/users/{id}', 'UserController@update');
Route::delete('/users/{id}', 'UserController@delete');
Route::get('/insight/overview', 'InsightController@overviewStatistics');
Route::get('/payments/personal-accounts', 'InsightController@personalAccounts');
Route::get('/payments/multiple', 'InsightController@multiplePayments');
// transactions on a particular date
Route::post('/payments/on-date', 'TreasuryController@getByBeneficiaryOnDate')->name('payments.beneficiary');

Route::get('/documentation', function(){
    return view("apidoc.index");
});
Route::get('/collection.json', function(){
    return Storage::disk('local')->download('apidoc/collection.json');
})->name("apidoc.json");

Route::post('auth/register', 'Auth\RegisterController@register');
Route::post('auth/login', 'Auth\LoginController@login')->name('login');
 
Route::group([

    'middleware' => 'api',
    //'namespace' => 'App\Http\Controllers',
    'prefix' => 'auth'

], function ($router) {
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

});
Route::group([

    'middleware' => 'api',
    //'namespace' => 'App\Http\Controllers',
    'prefix' => 'treasury'

], function ($router) {
     
    Route::resource('','TreasuryController', [
        'only' => ['index', 'store']
    ]);
    //Route::get('/', 'TreasuryController@get');
    Route::get('/search', 'TreasuryController@search');
    Route::delete('/{id}', 'TreasuryController@destroy');
    Route::get('/{id}', 'TreasuryController@show');
    Route::put('/{id}', 'TreasuryController@update');
    

});

Route::group([

    'middleware' => 'api',
    //'namespace' => 'App\Http\Controllers',
    'prefix' => 'temporary-treasury'

], function ($router) {
     
    Route::resource('','TreasuryTemporaryController', [
        'only' => ['index']
    ]);
    //Route::get('/', 'TreasuryController@get');
    Route::delete('/{id}', 'TreasuryTemporaryController@destroy');
    Route::get('/{id}', 'TreasuryTemporaryController@show');
    Route::put('/{id}', 'TreasuryTemporaryController@update');
    Route::post('/{id}/accept', 'TreasuryTemporaryController@accept');
    Route::post('/{id}/decline', 'TreasuryTemporaryController@decline');

});

Route::group([
    'middleware' => 'api', 
    'prefix' => 'payments'
], function ($router) {
    //Route::get('/without-names', 'InsightController@withoutNames');  
});

Route::group([
    'middleware' => 'api', 
    'prefix' => 'users'
], function ($router) {
    Route::get('/', 'UserController@index');  
});
Route::get('/payments/without-names', 'InsightController@withoutNames');





