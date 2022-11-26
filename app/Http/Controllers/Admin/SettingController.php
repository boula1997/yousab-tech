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
    if(!$request->hasFile('logo'))
    $data['logo']=$setting->logo;
    else{
        $file = $request->file('logo');
        $name=$file->getClientOriginalName();
        $file->move('images',$name);
        $data['logo']='images/'.$name;
    }

    if(!$request->hasFile('tab'))
    $data['tab']=$setting->tab;
    else{
        $file2 = $request->file('tab');
        $name2=$file2->getClientOriginalName();
        $file2->move('images',$name2);
        $data['tab']='images/'.$name2;
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
