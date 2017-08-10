<?php

Route::group(array('module' => 'Principal', 'middleware' => ['web'], 'namespace' => 'App\Modules\Principal\Controllers'), function() {

    Route::get('/', ['as' => 'principal.index', 'uses' => 'PrincipalController@index']);
    
    
});	
