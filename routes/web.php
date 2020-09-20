<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\BuildingController;
use App\Http\Request;

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
    return redirect()->to('home');
});

Auth::routes();

Route::group(['prefix' => 'inmuebles'], function(){
    Route::get('/', 'BuildingController@index')->name('inmuebles.index');
    Route::get('create', 'BuildingController@create')->name('inmuebles.create');
    Route::post('/', 'BuildingController@store')->name('inmuebles.store');
    Route::get('{inmueble}', 'BuildingController@show')->name('inmuebles');
    Route::get('{inmueble}/edit', 'BuildingController@edit')->name('inmuebles.edit');
    Route::put('{inmueble}', 'BuildingController@update')->name('inmuebles.update');
    Route::delete('{inmueble}', 'BuildingController@destroy')->name('inmuebles.destroy');
});


Route::get('/home', function () {
    if( Auth::user() ) 
        if( Auth::user()->rol =='admin' )
            return redirect('/admin');
        else
            return redirect('/inmuebles');
    else
        return redirect('/login');
});

// Route::get('admin','LoginController@admin');
// Route::get('normal','LoginController@normal');  