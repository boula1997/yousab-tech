<?php

namespace App\Http\Controllers\Admin;

use App\Models\Counter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\CounterRequest;

class CounterController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    
    function __construct()
    {
         $this->middleware('permission:counter-list|counter-create|counter-edit|counter-delete', ['only' => ['index','show']]);
         $this->middleware('permission:counter-create', ['only' => ['create','store']]);
         $this->middleware('permission:counter-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:counter-delete', ['only' => ['destroy']]);
    }

    
    public function index()
    {
        $counters = Counter::latest()->get();
        return view('admin.crud.counters.Index', compact('counters'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.crud.counters.create');
    }
 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CounterRequest $request)
    { 
    
        Counter::create($request->all());
        return redirect()->route('counters.index')
            ->with('success', 'تم الانشاء');
    }
 
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Counter  $counter
     * @return \Illuminate\Http\Response
     */
    public function show(Counter $counter)
    {
        return view('admin.crud.counters.show', compact('counter'));
    }
 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Counter  $counter
     * @return \Illuminate\Http\Response
     */
    public function edit(Counter $counter)
    {
    //    dd($counter->title);
        return view('admin.crud.counters.edit', compact('counter'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\portfolio  $counter
     * @return \Illuminate\Http\Response
     */
    public function update(CounterRequest $request, Counter $counter)
    {

         $data=$request->all();
 
         $counter->update($data);
 
 
        return redirect()->route('counters.index')
            ->with('success', 'تم التعديل بنجاح');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Counter  $counter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Counter $counter)
    {
        $counter->delete();
 
        return redirect()->route('counters.index')
            ->with('success', 'تم الحذف');
    }
}
