<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\ProfileRequest;
use App\Models\Admin;
use Illuminate\Http\Request;
use DB;
use Hash;
use Illuminate\Support\Arr;
use App\Models\File as ModelsFile;
use Illuminate\Support\Facades\File;

class ProfileController extends Controller
{

    public function edit()
    {
        $admin = Admin::find(auth('admin')->user()->id);
        return view('admin.crud.profile.edit', compact('admin'));
    }


    public function update(ProfileRequest $request)
    {
        $input = $request->all();
        if (!empty($input['password'])) {
            $input['password'] = Hash::make($input['password']);
        } else {
            $input = Arr::except($input, array('password'));
        }

        $admin = Admin::find(auth('admin')->user()->id);
        $admin->update($input);


        if ($request->hasFile('image')) {
            if ($admin->file && file_exists($admin->file->url))
            {File::delete($admin->file->url);
            $admin->file->delete();}
            $file = $request->file('image');
            $data['image'] = $request->image->store('images');
            $file->move('images', $data['image']);
            ModelsFile::create(['url' => $data['image'], 'fileable_id' => $admin->id, 'fileable_type' => 'App\Models\Admin']);
        }
        return redirect()->route('dashboard')
            ->with('success', 'Admin updated successfully');
    }
}
