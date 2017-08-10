<?php

Route::group(array('module' => 'Talleres', 'middleware' => ['web'], 'namespace' => 'App\Modules\Talleres\Controllers'), function() {

    Route::get('talleres', ['as' => 'talleres.index', 'uses' => 'TalleresController@index']);
    
});	
