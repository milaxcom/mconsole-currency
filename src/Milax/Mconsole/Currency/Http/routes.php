<?php

/**
 * Currency module routes file
 */
Route::group([
    'prefix' => config('mconsole.url'),
    'middleware' => ['web', 'mconsole'],
    'namespace' => 'Milax\Mconsole\Currency\Http\Controllers',
], function () {
    
    //

});
