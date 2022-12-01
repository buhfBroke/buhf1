<?php
use Illuminate\Support\Facades\Route;
Route::get ('/dir/test/',function ()  {return '!!1';});
Route::get('/user/show-{id}' , function ($id) { 
	return $id;
})->where('id','[A-Za-z]+');
Route::get('user/{id}', function ($id) {
  return 'User '.$id;
})->where ('id' , '[0-9]+');
Route::get('user/{name}', function ($Name) {
  return 'Name' .$Name;
})->where('name' , '[A-Za-z]+');
Route::get('/sun/{num1}/{num2}', function ($a , $b) {
  return $a + $b;});
Route::get('/user2/{id?}' , function ($id = 0) {
	return $id;
})->where('$id' , '[0-9]+' );
Route::get('test/show', [App\Http\Controllers\TestController::class,'show']);

Route::get('/page/show' , [App\Http\Controllers\Page::class,'showOne']);

Route::get('page/all' , [App\Http\Controllers\Page::class,'showall']);

Route::get ('test/show/{param}',[App\Http\Controllers\Page::class,'buhf']);


Route::get('show/sool/{id}', [App\Http\Controllers\Page::class,'showOne1']
)->where('$id' , '[0-5]+');

Route::get('test/show/{param1}/{param2}', [App\Http\Controllers\TestController::class,'show12']);

Route::get('test/sum/{num1}/{num2}', [App\Http\Controllers\test::class,'sum']);

Route::get('test/emp/{id}',[App\Http\Controllers\Employee::class,'showOne4']);

Route::get('test/emp13/',[App\Http\Controllers\TestController::class,'showOne13']);

?> 