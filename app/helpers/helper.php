<?php

use App\Models\Page;
use App\Models\Setting;

 function settings(){
    return Setting::first();
}

function page($identifier){
    return Page::where('identifier', $identifier)->first();
}

function upload_image($file){
    $path=$file->store('images');
    $file->move('public/images', $path);
    return $path;
}
