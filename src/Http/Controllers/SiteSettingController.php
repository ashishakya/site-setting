<?php

namespace Proshore\SiteSetting\Http\Controllers;

use Illuminate\Http\Request;
use Proshore\SiteSetting\Models\SiteSetting;
use Illuminate\Routing\Controller as BaseController;

class SiteSettingController extends BaseController
{
    /**
     * @var SiteSetting
     */
    private $siteSetting;

    public function __construct(SiteSetting $siteSetting)
    {
        $this->siteSetting = $siteSetting;
    }

    /**
     * Edit Site Setting.
     *
     * @return bool
     */
    public function edit()
    {
        $siteSetting = $this->siteSetting->get()->first();
        if (! $siteSetting) {
            $siteSetting = $this->siteSetting;
        }

        $fields = config('proshore.site-setting.fields');

        return view('site-setting::index', compact(['siteSetting', 'fields']));
    }

    /**
     * Updating the site settings with json encoding.
     *
     * @param Request $request Illuminate Request parameter
     * @param int     $id      site setting id to be updated
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $siteSetting = $this->siteSetting->find($id);

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
     * Save site setting meta data for the first time.
     *
     * @param Request $request Illuminate Request parameter
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $siteSetting = $this->siteSetting;

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
