<?php

use Illuminate\Http\Request; 

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
Route::middleware('auth:api')->get('/professional', function (Request $request) {
    return $request->user();
}); 
Route::middleware('auth:api')->get('/city', function (Request $request) {
    return $request->user();
}); 
Route::middleware('auth:api')->get('/category', function (Request $request) {
    return $request->user();
}); 
Route::middleware('auth:api')->get('/subcategory', function (Request $request) {
    return $request->user();
}); 
Route::middleware('auth:api')->get('/post', function (Request $request) {
    return $request->user();
}); 


Route::apiResources(['user' => 'API\UserController']);
Route::apiResources(['google' => 'API\UserController@google']);
Route::apiResources(['professional' => 'API\ProfessionalController']);
Route::apiResources(['profess' => 'API\ProfessController']); 
Route::apiResources(['city' => 'API\CityController']);
Route::apiResources(['guestemail' => 'API\GuestEmailController']);
Route::apiResources(['guestphone' => 'API\GuestPhoneController']);
Route::apiResources(['guestlist' => 'API\GuestListController']);
Route::apiResources(['enquiry' => 'API\EnquiryController']);
Route::apiResources(['category' => 'API\CategoryController']); 
Route::apiResources(['subcategory' => 'API\SubcategoryController']);
Route::apiResources(['post' => 'API\PostController']);
Route::apiResources(['postinvitation' => 'API\InvitationController']);
Route::apiResources(['guestemail' => 'API\GuestEmailController']);
Route::apiResources(['guestphone' => 'API\GuestPhoneController']);
Route::get('profile', 'API\UserController@profile'); 
Route::get('mypost', 'API\PostController@mypost');  
Route::get('mysubcategory', 'API\SubcategoryController@mysubcategory');
Route::put('profile', 'API\UserController@updateProfile');
Route::get('findUser', 'API\UserController@search');
Route::get('findPost', 'API\PostController@search');
Route::get('findCategory', 'API\CategoryController@search');
Route::get('findSubcategory', 'API\SubcategoryController@search');
Route::get('findPartner', 'API\ProfessionalController@search');
Route::get('findEnquiry', 'API\EnquiryController@search');
Route::get('mypofession', 'API\ProfessionalController@mypofession');
Route::get('citydata', 'API\CityController@citydata');
Route::get('findShowcategory', 'API\PostController@showme');
