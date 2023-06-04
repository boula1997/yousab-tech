<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use Illuminate\Support\Facades\File;


class SettingController extends Controller
{
    public function setting(Request $request){
        $setting=Setting::first();
        $data=$request->all();
        if(!$request->hasFile('logo'))
    $data['logo']=$setting->logo;
    else{
        File::delete($setting->logo);
        $file = $request->file('logo');
        $data['logo']=$request->logo->store('images');
        $file->move('images',$data['logo']);
    }

    if(!$request->hasFile('tab'))
    $data['tab']=$setting->tab;
    else{
        File::delete($setting->tab);
        $file2 = $request->file('tab');
        $data['tab']=$request->tab->store('images');
        $file2->move('images',$data['tab']);
    }





    $setting->update($data);
    return redirect()->route('edit.setting',compact('setting'))
    ->with('success', 'تم التعديل بنجاح');
    }
    
    public function editSetting(){
        $setting=Setting::first();
        return view('admin.crud.setting.setting',compact('setting'));
    }
}
