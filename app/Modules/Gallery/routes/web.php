<?php

Route::group(array('module' => 'Gallery', 'middleware' => ['web'], 'namespace' => 'App\Modules\Gallery\Controllers'), function() {

    Route::get('gallery', ['as' => 'gallery.index', 'uses' => 'GalleryController@index']);
    
});	
