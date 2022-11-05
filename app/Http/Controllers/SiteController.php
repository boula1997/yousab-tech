<?php

namespace App\Http\Controllers;
use App\Models\Service;
use App\Models\Blog;
use App\Models\Gallery;
use App\Models\Setting;
use App\Models\Slider;
use App\Models\Page;
use App\Models\Partner;
use App\Models\Team;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {
        $services=Service::get();
        $sliders=Slider::get();
        $blogs=Blog::get();
        $portfolios=Gallery::get();
        $about_section=Page::where('identifier','about')->first();
        $contact_section=Page::where('identifier','contact')->first();
        $advantage_section=Page::where('identifier','advantage')->first();
        $setting=Setting::first();
        $blogs_footer=Blog::take(3)->get();
        $portfolios=Gallery::get();

         return view('front.index',compact('services','blogs_footer','portfolios','sliders','setting','blogs','contact_section','about_section','advantage_section','setting','blogs'));


    }

    public function blogs()
    {
        $blogs=Blog::get();
        $setting=Setting::first();
        $blogs_footer=Blog::take(3)->get();
        $portfolios=Gallery::get();
        $blog_section=Page::where('identifier','blog')->first();
        $partners=Partner::get();


        return view('front.blogs.blog',compact('blogs','blogs_footer','portfolios','setting','blog_section','partners'));
    }

    public function single_blog(Request $request)
    {
        $id=$request->input('id');
        $blog=Blog::findorfail($id);
        $setting=Setting::first();  
        $blogs_footer=Blog::take(3)->get();
        $portfolios=Gallery::get();
        return view('front.blogs.single-blog',compact('blog','setting','blogs_footer','portfolios'));
        
    }

    public function sliders()
    {
        $data=Slider::get();
        return view('front.index',compact('data'));
    }

    public function settings()
    {
        $data=Setting::first();
        return view('front.layouts.master',compact('data'));
    }

    public function teams()
    {
        $teams=Team::get();
        return view('admi.team',compact('teams'));
    }

    public function services()
    {
        $services=Service::get();
        $setting=Setting::first();
        $blogs_footer=Blog::take(3)->get();
        $portfolios=Gallery::get();
        $service_section=Page::where('identifier','service')->first();
        $partners=Partner::get();
        // dd($service_section->title);
        return view('front.services.service',compact('services','setting','blogs_footer','portfolios','service_section','partners'));
    }

    public function single_service(Request $request)
    {   
        $id=$request->input('id');
        $service=Service::findorfail($id);
        $setting=Setting::first();
        $blogs_footer=Blog::take(3)->get();
        $portfolios=Gallery::get();
        return view('front.services.single-service',compact('service','setting','blogs_footer','portfolios'));
    }

    public function portfolios(Request $request)
    {
        $setting=Setting::first();
        $blogs_footer=Blog::take(3)->get();
        $portfolio_section=Page::where('identifier','portfolio')->first();
        $portfolio=Gallery::findorfail($request->input('id'));
        $portfolios=Gallery::get();
        $images=json_decode($portfolio->image);
        $partners=Partner::get();
        return view('front.portfolio',compact('portfolios','portfolio','setting','blogs_footer','portfolio_section','partners','images'));
    }

    public function single_portfolio()
    {

        return view('front.portfolio',compact('portfolio'));
        
    }

    public function contact()
    {
        $contact_section=Page::where('identifier','contact')->first();
        $setting=Setting::first();
        $blogs_footer=Blog::take(3)->get();
        $portfolios=Gallery::get();
        $about_section=Page::where('identifier','about')->first();
        $advantage_section=Page::where('identifier','advantage')->first();
        $partners=Partner::get();

        return view('front.contact',compact('setting','blogs_footer','portfolios','about_section','contact_section','advantage_section','partners'));

    }

    public function about()
    {
        $blogs_footer=Blog::take(3)->get();
        $portfolios=Gallery::get();
        $about_section=Page::where('identifier','about')->first();
        $advantage_section=Page::where('identifier','advantage')->first();
        $setting=Setting::first();
        $teams=Team::get();
        $partners=Partner::get();


        return view('front.about',compact('setting','blogs_footer','portfolios','about_section','advantage_section','teams','partners'));
    }

    public function contact_post(ContactRequest $request)
    {
        // dd($request->input('message'));
        $data=$request->all();
        $data['message']=$request->input('message');
        // dd($data);
        Contact::create($data);
    }

}
