<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Testimonial;
use App\Models\Process;
use App\Models\Gallery;
use App\Models\Slider;
use App\Models\Counter;
use App\Models\Faq;
use App\Models\Setting;
use Exception;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $service;
    private $testimonial;
    private $slider;
    private $process;
    private $counter;
    private $portfolio;
    private $faq;
    // private $settings;

    public function __construct(Service $service, Testimonial $testimonial, Slider $slider, Process $process, Counter $counter, Gallery $portfolio,Faq $faq)
    {
        $this->service = $service;
        $this->testimonial = $testimonial;
        $this->slider = $slider;
        $this->process = $process;
        $this->counter = $counter;
        $this->portfolio = $portfolio;
        $this->faq=$faq;
        // $this->settings=$settings;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        try {
            $services = $this->service->get();
            $testimonials = $this->testimonial->get();
            $processes = $this->process->take(9)->latest()->get();
            $sliders = $this->slider->get();
            $counters = $this->counter->get();
            $portfolios = $this->portfolio->get();
            $faqs=$this->faq->get();
            // $settings=$this->settings->get();

            return view('front.index', compact('testimonials', 'services', 'processes', 'portfolios', 'sliders', 'counters','faqs'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }
}
