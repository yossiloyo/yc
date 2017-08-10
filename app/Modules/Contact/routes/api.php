<?php

Route::group(array('module' => 'Contact', 'middleware' => ['api'], 'namespace' => 'App\Modules\Contact\Controllers'), function() {

    Route::resource('Contact', 'ContactController');
    
});	
