<?php

namespace Proshore\SiteSetting\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property array|mixed settings
 */
class SiteSetting extends Model
{
    protected $fillable = [
        'meta_data',
    ];

    protected $casts = [
        'meta_data' => 'array',
    ];

    public $timestamps = false;

    /**
     * Save Meta Data.
     *
     * @param SiteSetting $siteSetting SiteSetting Model object
     * @param Request $request  Request parameter
     *
     * @return bool
     */
    protected function saveMetaData($siteSetting, $request)
    {
        $metaData = $siteSetting->meta_data;

        foreach ($request->except(['_method', '_token']) as $metaKey => $metaValue) {
            $metaData[$metaKey] = $metaValue;
        }

        $siteSetting->meta_data = $metaData;
        if ($siteSetting->save()) {
            return true;
        } else {
            return false;
        }
    }
}
