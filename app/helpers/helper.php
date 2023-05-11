<?php

use App\Models\Page;
use App\Models\Setting;
use Illuminate\Support\Facades\File;

function settings()
{
    return Setting::first();
}

function page($identifier)
{
    return Page::where('identifier', $identifier)->first();
}

function upload_image($file)
{
    $path = $file->store('images');
    $file->move('public/images', $path);
    return $path;
}


function delete_file($file)
{
    if (file_exists($file))
        File::delete($file);
}
