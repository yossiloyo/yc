<?php

Route::group(array('module' => 'Principal', 'middleware' => ['api'], 'namespace' => 'App\Modules\Principal\Controllers'), function() {

    Route::resource('Principal', 'PrincipalController');
    
});	
