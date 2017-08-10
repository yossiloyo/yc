<?php

Route::group(array('module' => 'Videos', 'middleware' => ['web'], 'namespace' => 'App\Modules\Videos\Controllers'), function() {

    Route::get('videos', ['as' => 'videos.index', 'uses' => 'VideosController@index']);
    
});	
