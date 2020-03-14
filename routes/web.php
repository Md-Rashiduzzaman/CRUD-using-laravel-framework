<?php

Route::get('/',function(){
    return view('welcome');
}); //route er khetre: top to bottom, left to right  

// Route::get('/countries/{id}', 'CountriesController@showcountrydetail');
//ai jaigai ai url ta create url er purbe dile error dibe trying to get property 
//atar solution hosse ata
// Route::get('/countries/{id}', 'CountriesController@showcountrydetail')->where(['id' => '[0-9]+']);
//detail column er jonne url set holo r id hosse variable

Route::get('/countries/create', 'CountriesController@create');
//create method

Route::get('/countries', 'CountriesController@showallcountry');
//all data view from database table

Route::post('/countries/create', 'CountriesController@store');
//post method lage data store korar jonne r controller a store function add korbo

Route::get('/countries/{id}', 'CountriesController@showcountrydetail');
//ata hosse view

Route::get('/countries/{id}/edit', 'CountriesController@edit');
//Route::get('/countries/{country}/edit', 'CountriesController@edit');
//model binding er jonne id er jaigai country hobe
//dynamic edit action base to id field r id hosse variable
//ata o secure na,ata o delete er get er moto url dia j keu edit korte parbe

Route::delete('/countries/{country}/delete', 'CountriesController@delete');
//get method a korle problem ase karon keu jodi delete er url
//(127.0.0.1:8000/countries/2/delete) maane 2 no. id ta bangladesh er, 
//ai url a hit korle bangladesh row ta delete hoye jabe
//delete method use korle url dia admin sara j keu delete korte parbe na 

Route::patch('/countries/{country}/edit', 'CountriesController@update');
//update er jonne patch method dite hoi r controller a update function add korbo

