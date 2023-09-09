<?php

namespace App\Http\Controllers;
use App\Models\Service;
use App\Models\Testimonial;
use App\Models\Process;
use App\Models\Blog;
use App\Models\Gallery;
use App\Models\Setting;
use App\Models\Image;
use App\Models\Slider;
use App\Models\Page;
use App\Models\Partner;
use App\Models\Team;
use App\Models\Contact;
use App\Models\Counter;
use App\Models\Video;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function __construct()
    {
        // dd('go to dashboard');
    }
    public function home()  
    {
        $services=Service::get();
        $testimonials=Testimonial::get();
        $processes=Process::get();
        $sliders=Slider::get();
        $counters=Counter::get();
        $blogs=Blog::get();
        $portfolios=Gallery::get();
        $about_section=Page::where('identifier','about')->first();
        $contact_section=Page::where('identifier','contact')->first();
        $advantage_section=Page::where('identifier','advantage')->first();
        $setting=Setting::first();
        $blogs_footer=Blog::take(3)->get();
        $portfolios=Gallery::get();

         return view('front.index',compact('testimonials','services','processes','blogs_footer','portfolios','sliders','setting','blogs','contact_section','about_section','advantage_section','setting','blogs','counters'));


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
    public function testimonials()
    {
        $testimonials=Testimonial::get();
        $setting=Setting::first();
        $blogs_footer=Blog::take(3)->get();
        $portfolios=Gallery::get();
        $testimonial_section=Page::where('identifier','testimonial')->first();
        $partners=Partner::get();
        // dd($testimonial_section->title);
        return view('front.testimonials.testimonial',compact('testimonials','setting','blogs_footer','portfolios','testimonial_section','partners'));
    }

    public function single_testimonial(Request $request)
    {   
        $id=$request->input('id');
        $testimonial=Testimonial::findorfail($id);
        $setting=Setting::first();
        $blogs_footer=Blog::take(3)->get();
        $portfolios=Gallery::get();
        return view('front.testimonials.single-testimonial',compact('testimonial','setting','blogs_footer','portfolios'));
    }
    public function processes()
    {
        $processes=Process::get();
        $setting=Setting::first();
        $blogs_footer=Blog::take(3)->get();
        $portfolios=Gallery::get();
        $process_section=Page::where('identifier','process')->first();
        $partners=Partner::get();
        // dd($process_section->title);
        return view('front.processes.process',compact('processes','setting','blogs_footer','portfolios','process_section','partners'));
    }

    public function single_process(Request $request)
    {   
        $id=$request->input('id');
        $process=Process::findorfail($id);
        $setting=Setting::first();
        $blogs_footer=Blog::take(3)->get();
        $portfolios=Gallery::get();
        return view('front.processes.single-process',compact('process','setting','blogs_footer','portfolios'));
    }

    public function portfolios(Request $request)
    {
        $setting=Setting::first();
        $blogs_footer=Blog::take(3)->get();
        $portfolio_section=Page::where('identifier','portfolio')->first();
        $portfolio=Gallery::findorfail($request->input('id'));
        $images=Image::where('gallery_id',$portfolio->id)->get();
        $portfolios=Gallery::get();
        $partners=Partner::get();
        return view('front.portfolio',compact('portfolios','portfolio','setting','blogs_footer','portfolio_section','partners','images'));
    }

    public function videos(Request $request)
    {
        $setting=Setting::first();
        $blogs_footer=Blog::take(3)->get();
        $portfolio_section=Page::where('identifier','portfolio')->first();
        $portfolios=Gallery::get();
        $partners=Partner::get();
        $videos=Video::get();
        return view('front.video',compact('portfolios','setting','blogs_footer','portfolio_section','partners','videos'));
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
