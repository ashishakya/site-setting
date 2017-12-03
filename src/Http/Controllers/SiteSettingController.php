<?php

namespace Proshore\SiteSetting\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Proshore\SiteSetting\Models\SiteSetting;

class SiteSettingController extends Controller
{

    /**
     * Edit Site Setting
     *
     * @return boolean
     */
    public function edit()
    {
        $siteSetting = SiteSetting::get()->first();
        if (!$siteSetting) {
            $siteSetting = new SiteSetting();
        }

        $fields = config('sitesetting.fields');

        return view('SiteSetting::index', compact(['siteSetting', 'fields']));
    }


    /**
     * Updating the site settings with json encoding
     *
     * @param Request $request Illuminate Request parameter
     * @param int     $id      site setting id to be updated
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $siteSetting = SiteSetting::find($id);

        if (SiteSetting::saveMetaData($siteSetting, $request)) {
            return redirect()
                ->route('sitesetting.edit')
                ->with('success', __('Site setting updated successfully'));
        } else {
            return redirect()
                ->route('sitesetting.edit')
                ->with('error', __('Something went wrong. Site setting could not be uploaded'));
        }
    }


    /**
     * Save site setting meta data for the first time
     *
     * @param Request $request Illuminate Request parameter
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $siteSetting = new SiteSetting();

        if (SiteSetting::saveMetaData($siteSetting, $request)) {
            return redirect()
                ->route('sitesetting.edit')
                ->with('success', __('Site setting updated successfully'));
        } else {
            return redirect()
                ->route('sitesetting.edit')
                ->with('error', __('Something went wrong. Site setting could not be uploaded'));
        }
    }

}
