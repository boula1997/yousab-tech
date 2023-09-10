<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Models\Service;
use App\Models\Testimonial;
use App\Models\Process;
use App\Models\Gallery;
use App\Models\Slider;
use App\Models\Counter;
use Exception;

class ContactController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $service;
    private $testimonial;
    private $contact;
    private $process;
    private $counter;
    private $portfolio;

    public function __construct(Service $service, Testimonial $testimonial, contact $contact, Process $process, Counter $counter, Gallery $portfolio)
    {
        $this->service = $service;
        $this->testimonial = $testimonial;
        $this->contact = $contact;
        $this->process = $process;
        $this->counter = $counter;
        $this->portfolio = $portfolio;
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
            $processes = $this->process->get();
            $counters = $this->counter->get();
            $portfolios = $this->portfolio->get();
            return view('front.index', compact('testimonials', 'services', 'processes', 'portfolios', 'counters'));
        } catch (Exception $e) {
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactRequest $request)
    {
        // dd($request->input('message'));
        $data = $request->all();
        $data['message'] = $request->input('message');
        // dd($data);
        $this->contact->create($data);
    }
}
