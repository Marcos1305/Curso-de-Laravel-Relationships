<?php

// One To One

Route::get('one-to-one', 'OneToOneController@oneToOne');
Route::get('one-to-one-inverse', 'OneToOneController@oneToOneInverse');
Route::get('one-to-one-insert', 'OneToOneController@oneToOneinsert');



//One To Many
Route::get('one-to-many', 'OneToManyController@oneToMany');
Route::get('many-to-one', 'OneToManyController@manyToOne');
Route::get('one-to-many-two', 'OneToManyController@manyToOneTwo');
Route::get('one-to-many-insert', 'OneToManyController@OneToManyInsert');


//HAS MANY THROUGH
Route::get('has-many-through', 'OneToManyController@hasManyThrough');

//MANY  TO MANY
Route::get('many-to-many', 'ManyToManyController@manyToMany');
Route::get('many-to-many-inverse', 'ManyToManyController@manyToManyInverse');

Route::get('/', function () {
    return view('welcome');
});
