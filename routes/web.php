<?php
use App\Shoe;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::get('api/tasks', function () {
    $shoes = Shoe::all();
    return view('shoes.index',compact('shoes'));
});
/*Route::get('/', function () {
    $shoes = Shoe::all();
    return view('vue1', compact('shoes'));
});*/
Route::get('/', function () {
    /*$shoes = Shoe::all();*/
    /*$shoes=json_encode($shoes);*/
    return view('shoes.index1');
});
Route::get('/shoes', 'ShoesController@index');
Route::get('/adding', 'ShoesController@adding');
Route::get('/{shoe}', 'ShoesController@show');
Route::post('/index/add', 'ShoesController@add');
Route::post('/index/size', 'ShoesController@querySize');
Route::delete('/{shoe}', 'ShoesController@delete');
Route::get('/{shoe}/edit', 'ShoesController@edit');
Route::patch('/{shoe}', 'ShoesController@update');
