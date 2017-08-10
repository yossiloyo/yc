<?php

Route::group(array('module' => 'About', 'middleware' => ['api'], 'namespace' => 'App\Modules\About\Controllers'), function() {

    Route::resource('About', 'AboutController');
    
});	
