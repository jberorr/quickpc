<?php
use Spatie\Sitemap\SitemapGenerator;
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

Route::get('/', function () {
    return view('welcome'); 
});

Route::get('sitemap', function () {
    SitemapGenerator::create('https://arvices.com/')->writeToFile('sitemap.xml');
    return 'sitemap created'; 
}); 



Route::post('autocomplete/fetch', [
    'uses' => 'FrontEndController@fetch',
    'as' =>'autocomplete.fetch'
]);

Route::get('/', [
    'uses' => 'FrontEndController@index',
    'as' =>'welcome'
]);

Route::get('/result', [
    'uses' => 'FrontEndController@result',
    'as' => 'result'
]);

Route::get('2020/{slug}', [
    'uses' => 'FrontEndController@singlepost',
    'as' => 'post.single'
]);

Route::get('/discussion/delete{id}', [
    'uses' => 'MyGuestController@destroy',
    'as' => 'discussion.delete'
]);

Route::get('/discussion/{slug}', [
    'uses' => 'MyGuestController@watch',
    'as' => 'discussion.store'
]);

Route::get('/cancellation/{slug}', [
    'uses' => 'API\InvitationController@cancel',
    'as' => 'discussion.cancel'
]);

Route::get('/myevents', [
    'uses' => 'MyGuestController@myevent',
    'as' => 'myevent'
]);

Route::post('/guest/store', [
    'uses' => 'MyGuestController@store',
    'as' => 'guest.store' 
]); 

Route::get('/privacy',  [
    'uses' => 'FrontEndController@privacy',
    'as' =>'privacy'
]);

Route::get('/about',  [
    'uses' => 'FrontEndController@about',
    'as' =>'about'
]);

Route::get('/my-profile',  [
    'uses' => 'FrontEndController@profile',
    'as' =>'uprofile'
]);

Route::get('/contact',  [
    'uses' => 'FrontEndController@contact',
    'as' =>'contact'
]);

Route::get('/disclaimer',  [
    'uses' => 'FrontEndController@disclaimer', 
    'as' =>'disclaimer' 
]);

Route::get('auth/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('/become-professional',  [
    'uses' => 'FrontEndController@becomeprofessional',
    'as' =>'becomeprofessional'
]);

Route::get('/create-invitation',  [
    'uses' => 'FrontEndController@invitation', 
    'as' =>'invitation'
]);

Route::get('/forgot-password',  [
    'uses' => 'FrontEndController@forgot', 
    'as' =>'forgot'
]);

Route::get('/forgot-password',  [
    'uses' => 'FrontEndController@forgot', 
    'as' =>'forgot'
]);

Route::post('/reset-password',  [
    'uses' => 'FrontEndController@password', 
    'as' =>'forgotpassword'
]);

Route::post('/post/thanks', [
    'uses' => 'EnquiryController@store',
    'as' => 'post.store' 
]);  

Route::get('/logout', function() {
auth()->logout();
return redirect()->back();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('{path}', 'FrontEndController@nofound')->where('path', '([A-z\d-/_.]+)?' );
