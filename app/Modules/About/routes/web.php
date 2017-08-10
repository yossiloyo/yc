<?php

Route::group(array('module' => 'About', 'middleware' => ['web'], 'namespace' => 'App\Modules\About\Controllers'), function() {

    Route::get('about', ['as' => 'about.index', 'uses' => 'AboutController@index']);
      
});	
