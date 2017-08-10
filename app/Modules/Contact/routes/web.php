<?php

Route::group(array('module' => 'Contact', 'middleware' => ['web'], 'namespace' => 'App\Modules\Contact\Controllers'), function() {

      Route::get('contact', ['as' => 'contact.index', 'uses' => 'ContactController@index']);
      Route::post('contact', ['as' => 'contact.send', 'uses' => 'ContactController@send']);
    
});	
