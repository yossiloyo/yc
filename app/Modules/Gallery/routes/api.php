<?php

Route::group(array('module' => 'Gallery', 'middleware' => ['api'], 'namespace' => 'App\Modules\Gallery\Controllers'), function() {

    Route::resource('Gallery', 'GalleryController');
    
});	
