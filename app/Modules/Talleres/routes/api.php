<?php

Route::group(array('module' => 'Talleres', 'middleware' => ['api'], 'namespace' => 'App\Modules\Talleres\Controllers'), function() {

    Route::resource('Talleres', 'TalleresController');
    
});	
