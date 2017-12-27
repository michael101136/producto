<?php

Route::get('test' , function(){

	$user = new App\User;
	
	$user->name ='estudiante';

	$user->email = 'estudiante@gmail.com';

	$user->role_id = '4';

	$user->password = bcrypt('123');

	$user->save();

	return $user;

});

//Route::get('contacto/{nombre?}',['as' => 'contacto','uses' => 'PagesController@contacto']);
//Route::post('contactenos','PagesController@mensaje');
//
Route::get('nosotros/',['as' => 'nosotros', 'uses' => 'PagesController@nosotros']);
Route::get('/',['as' => 'inicio','uses' => 'PagesController@inicio']);
Route::get('visitarTemplos/',['as' => 'visitarTemplos', 'uses' => 'PagesController@visitarTemplos']);



Route::get('temploChuquinga/',['as' => 'temploChuquinga', 'uses' => 'PagesControllerTemplos@temploChuquinga']);



Route::resource('mensajes' , 'MesageController');

Route::Resource('usuarios' , 'UsersController');


Route::get('login','Auth\LoginController@showLoginForm');
Route::post('login','Auth\LoginController@Login');
Route::get('logout','Auth\LoginController@logout');

/*
Route::get('mensage',['as' => 'mensage.index','uses' => 'MesageController@index']);//mostrar
Route::get('mensage/create',['as' => 'mensage.create','uses' => 'MesageController@create']);//formulario
Route::post('mensage',['as' => 'mensage.store','uses' => 'MesageController@store']);//registro
Route::get('mensage/{id}',['as' => 'mensage.show','uses' => 'MesageController@show']);//ver un detalle
Route::get('mensage/{id}/edit',['as' => 'mensage.edit','uses' => 'MesageController@edit']);//ver un detalle
Route::put('mensage/{id}',['as' => 'mensage.update','uses' => 'MesageController@update']);//ver un detalle
Route::delete('mensage/{id}',['as' => 'mensage.destroy','uses' => 'MesageController@destroy']);//ver un detalle*/

Route::get('roles',function(){

	return \App\Role::with('user')->get();//trae los usuarios con sus roles

});