<?php

$groupParameters['namespace'] = 'Proshore\SiteSetting\Http\Controllers';
if (config('proshore-site-setting.prefix')) {
    $groupParameters['prefix'] = config('proshore-site-setting.prefix');
}
if (config('proshore-site-setting.middleware')) {
    $groupParameters['middleware'] = config('proshore-site-setting.middleware');
}
Route::group($groupParameters, function () {
    Route::get('sitesetting', 'SiteSettingController@edit')
         ->name('sitesetting.edit');
    Route::put('sitesetting/{sitesetting}', 'SiteSettingController@update')
         ->name('sitesetting.update');
    Route::post('sitesetting', 'SiteSettingController@store')
         ->name('sitesetting.store');
});
