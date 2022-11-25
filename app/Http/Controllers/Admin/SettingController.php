<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;

class SettingController extends Controller
{
    public function setting(Request $request){
    $setting=Setting::first();
    $setting->update($request->all());
    return view();
    }

    public function editSetting(){
        $setting=Setting::first();
        return view('admin.crud.setting.setting',compact('setting'));
    }
}
