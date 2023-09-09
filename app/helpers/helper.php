<?php

use App\Models\Admin;
use App\Models\Blog;
use App\Models\Contact;
use App\Models\Counter;
use App\Models\Gallery;
use App\Models\Image;
use App\Models\Page;
use App\Models\Partner;
use App\Models\Testimonial;
use App\Models\Process;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Slider;
use App\Models\Team;
use App\Models\User;
use App\Models\Video;
use Illuminate\Support\Facades\File;
use Spatie\Permission\Models\Role;

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
    $file->move('images', $path);
    return $path;
}


function delete_file($file)
{
    if (file_exists($file))
        File::delete($file);
}

function successResponse($data = [], $message = "success", $status = 200)
{
    return response()->json(
        [
            "status" => $status,
            "message" => $message,
            "data" => $data,
        ],
        $status
    );
}

function failedResponse($data = [], $message = "error", $status = 400)
{
    return response()->json(
        [
            "status" => $status,
            "message" => $message,
            "data" => $data,
        ],
        $status
    );
}

function itemsCount($model)
{
    $items = [
        "blogs" => count(Blog::get()),
        "contacts" => count(Contact::get()),
        "counters" => count(Counter::get()),
        "Portfolios" => count(Gallery::get()),
        "images" => count(Image::get()),
        "pages" => count(Page::get()),
        "partners" => count(Partner::get()),
        "services" => count(Service::get()),
        "testimonials" => count(Testimonial::get()),
        "processes" => count(Process::get()),
        "sliders" => count(Slider::get()),
        "services" => count(Service::get()),
        "teams" => count(Team::get()),
        "users" => count(User::get()),
        "admins" => count(Admin::get()),
        "videos" => count(Video::get()),
        "roles" => count(Role::get()),
    ];


    return $items[$model];
}
