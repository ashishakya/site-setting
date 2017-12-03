<?php
Route::group(['middleware' => 'web'], function () {
    Route::get('sitesetting', 'Proshore\SiteSetting\Http\Controllers\SiteSettingController@edit')
         ->name('sitesetting.edit');
    Route::put('sitesetting/{sitesetting}', 'Proshore\SiteSetting\Http\Controllers\SiteSettingController@update')
         ->name('sitesetting.update');
    Route::post('sitesetting', 'Proshore\SiteSetting\Http\Controllers\SiteSettingController@store')
         ->name('sitesetting.store');

});

