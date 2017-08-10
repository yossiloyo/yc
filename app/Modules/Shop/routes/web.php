<?php

Route::group(array('module' => 'Shop', 'middleware' => ['web'], 'namespace' => 'App\Modules\Shop\Controllers'), function() {

    Route::get('shop', ['as' => 'shop.index', 'uses' => 'ShopController@index']);
    
});	
