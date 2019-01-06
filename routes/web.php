<?php
Route::get('/', 'ClienteController@index')->name('indexCliente');
Route::get('/cliente', function(){
    return redirect(route('indexCliente'));
});
Route::post('/', 'ClienteController@store')->name('StoreCliente');
Route::patch('/', 'ClienteController@update')->name('updateCliente');
Route::get('/novo', 'ClienteController@create')->name('createCliente');
Route::get('/cliente/{id}', 'ClienteController@show')->name('showCliente');
Route::get('/cliente/{id}/edit', 'ClienteController@edit')->name('editCliente');
Route::delete('/cliente/{id}', 'ClienteController@destroy')->name('destroyCliente');