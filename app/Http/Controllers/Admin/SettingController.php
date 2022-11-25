<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;

class SettingController extends Controller
{
    public function setting(Request $request){
    $setting=Setting::first();
    $data=$request->all();
    if($data['logo']==null)
    $data['logo']=$setting->logo;
    if($data['tab']==null)
    $data['tab']=$setting->tab;
    $setting->update($data);
    return redirect()->route('edit.setting',compact('setting'))
    ->with('success', 'تم التعديل بنجاح');
    }

    public function editSetting(){
        $setting=Setting::first();
        return view('admin.crud.setting.setting',compact('setting'));
    }
}
