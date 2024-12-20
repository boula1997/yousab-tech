<?php

use App\Models\Admin;
use App\Models\Category;
use App\Models\Complain;
use App\Models\Faq;
use App\Models\Message;
use App\Models\Counter;
use App\Models\Newsletter;
use App\Models\Contact;
use App\Models\Gallery;
use App\Models\Image;
use App\Models\Project;
use App\Models\Page;
use App\Models\Team;
use App\Models\Task;
use App\Models\Partner;
use App\Models\Testimonial;
use App\Models\Process;
use App\Models\Service;
use App\Models\Fee;
use App\Models\Setting;
use App\Models\User;
use App\Models\Product;
use App\Models\Vaccancy;
use App\Models\Video;
use Illuminate\Support\Facades\File;
use Jackiedo\Cart\Facades\Cart;
use Spatie\Permission\Models\Role;

const Message_Mail = "app@gmail.com";

const Newsletter_Mail = "app@gmail.com";
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
    if(auth()->user()->type=='admin'){
        $tasks=count(Task::where('status',0)->get()->unique('title'));
        $finishedTAsks=count(Task::where('status',1)->get()->unique('title'));
    }else{
        $tasks=count(Task::where('status',0)->where('employee_id',auth()->user()->id)->get()->unique('title'));
        $finishedTAsks=count(Task::where('status',1)->where('employee_id',auth()->user()->id)->get()->unique('title'));
    }
    $items = [
        "faqs" => count(Faq::get()),
        "messages" => count(Message::get()),
        "counters" => count(Counter::get()),
        "newsletters" => count(Newsletter::get()),
        "contacts" => count(Contact::get()),
        "Portfolios" => count(Gallery::get()),
        "images" => count(Image::get()),
        "pages" => count(Page::get()),
        "projects" => count(Project::get()),
        "tasks" => $tasks,
        "finishedTasks" => $finishedTAsks,
        "teams" => count(Team::get()),
        "fees" => count(Fee::get()),
        "finishedFees" => count(Fee::get()),
        "partners" => count(Partner::get()),
        "services" => count(Service::get()),
        "testimonials" => count(Testimonial::get()),
        "processes" => count(Process::get()),
        "partners" => count(Partner::get()),
        "products" => count(Product::get()),
        "users" => count(User::get()),
        "complains" => count(Complain::get()),
        "vaccancies" => count(Vaccancy::get()),

        "admins" => count(Admin::get()),
        "videos" => count(Video::get()),
        "roles" => count(Role::get()),
        "categories" => count(Category::get()),
    ];


    return $items[$model];
}

function services()
{
    $services = Service::latest()->take(6)->get();

    return $services;
}
function rest($project)
{
    $totalFee=0;
    foreach($project->fees as $fee){
        if($fee->amount>0)
        $totalFee+=$fee->amount;
    }
    return $project->cost-$totalFee;
}

function taskEmployees($title){
    $employee_ids=Task::where('title',$title)->pluck('employee_id');
    $names=Admin::whereIn('id',$employee_ids)->pluck('name');
    return json_encode($names);
}

function products()
{
    $products = Product::latest()->take(6)->get();

    return $products;
}



if (!function_exists('cart')) {

    function cart()
    {

        return Cart::name('shopping')->useForCommercial();
    }
}

if (!function_exists('tasks')) {

    function tasks($type)
    {
        return isset($type) ?  Task::where('type', $type)->get() : Task::latest()->get();;
    }
}

if (!function_exists('task')) {

    function task($type)
    {
      Task::where('type', $type)->first();
    }
}
if (!function_exists('favourite')) {

    function favourite()
    {
        return cart()->newInstance('favourites')->useForCommercial(false);
    }
}

if (!function_exists('contacts')) {

    function contacts($type)
    {
        return isset($type) ?  Contact::where('type', $type)->get() : Contact::latest()->get();;
    }
}

if (!function_exists('contact')) {

    function contact($type)
    {
      Contact::where('type', $type)->first();
    }
}

// if (!function_exists('projects')) {

//     function projects($type)
//     {
//         return isset($type) ?  Project::where('type', $type)->get() : Project::latest()->get();;
//     }
// }

// if (!function_exists('project')) {

//     function project($type)
//     {
//       Project::where('type', $type)->first();
//     }
// }
