<?php

Route::group(array('module' => 'Videos', 'middleware' => ['api'], 'namespace' => 'App\Modules\Videos\Controllers'), function() {

    Route::resource('Videos', 'VideosController');
    
});	
