<?php

use Illuminate\Support\Facades\Route;
use App\Models\Profile;
use App\Models\User;
use App\Models\Country;
use App\Models\City;


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
   // return view('welcome');
    // $user = User::Find(3);
    // $profile = new Profile;
    // $profile->address="Jakarta";
    // $user->profile()->save($profile);
//  return ($user->Profile);
$profile = Profile::find(1);
return($profile->user->name);
});

Route::get('/country', function(){
    // $country = Country::all();
    // // $city = new City;
    // // $city->name = "jakarta";
    // // $country->city()->save($city);
    // return ($country);
    $city = City::Find(4);
    return($city->Country->name);

});

Route::get('/has-many', 'RelationController@index');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix' => 'account'], function() {
    Route::get('/login', 'TestController@login');
    Route::get('/logout', 'TestController@logout');
});

Route::group(['prefix'=> 'profile'], function(){
    Route::get('/about', 'TestController@about');
    Route::get('/school', 'TestController@school');
    Route::get('/languange', 'TestController@languange');

});

Route::group(['prefix' => 'test'], function() {
    Route::get('/create', 'TestController@create');
    Route::get('/store', 'TestController@store')->name('test.store');
    Route::get('/datadiri', 'TestController@datadiri');
    Route::get('/inputdatadiri', 'TestController@inputdatadiri')->name('test.inputdatadiri');
    Route::get('/datadiri/index', 'TestController@index')->name('test.index');
    Route::get('/datadiri/edit{id}', 'TestController@edit')->name('test.edit');
    Route::put('/datadiri/update{id}', 'TestController@updatedata')->name('test.updatedata');
    Route::delete('/datadiri/destroy{id}','TestController@destroy')->name('test.destroy');

});

Route::get('posts/store','postcontroller@store');
Route::get('posts/index','postcontroller@index')->name('posts.index');
Route::get('posts/show/{id}','postcontroller@show');
Route::put('posts/update/{id}', 'postcontroller@update')->name('posts.update');
Route::get('posts/edit/{id}','Postcontroller@edit')->name('posts.edit');
Route::delete('posts/destroy/{id}','Postcontroller@destroy')->name('posts.destroy');
//Route::get('/product/{id}', 'TestController@product');
Route::get('/product', 'TestController@product');



