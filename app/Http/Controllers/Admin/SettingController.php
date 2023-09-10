<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use Illuminate\Support\Facades\File;


class SettingController extends Controller
{
    private $setting;
    function __construct(Setting $setting)
    {
        $this->middleware('permission:setting-list|setting-create|setting-edit|setting-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:setting-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:setting-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:setting-delete', ['only' => ['destroy']]);
        $this->setting=$setting;
    }


    public function setting(Request $request)
    {
        $setting = $this->setting->first();
        $data = $request->except('0','1');
        if (!$request->hasFile('logo'))
            $data['logo'] = $setting->logo;
        else {
            File::delete($setting->logo);
            $file = $request->file('logo');
            $data['logo'] = $request->logo->store('images');
            $file->move('images', $data['logo']);
        }

        if (!$request->hasFile('tab'))
            $data['tab'] = $setting->tab;
        else {
            File::delete($setting->tab);
            $file2 = $request->file('tab');
            $data['tab'] = $request->tab->store('images');
            $file2->move('images', $data['tab']);
        }





        $setting->update($data);
        return redirect()->route('edit.setting', compact('setting'))
            ->with('success', trans('general.update_successfully'));
    }

    public function editSetting()
    {
        $setting = $this->setting->first();
        return view('admin.crud.setting.setting', compact('setting'));
    }
}
