<?php
/**
 *
 * User: YuGang Yang
 * Date: 7/13/15
 * Time: 12:20
 */

Route::get('/', function(){
    return redirect('/admin/auth/login');
});

Route::controllers([
    'admin/auth' => 'Infinite\Backend\Controllers\Auth\AuthController',
]);
