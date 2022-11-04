<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{  /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
       $sliders = Slider::latest()->paginate(5);
       return view('admin.crud.sliders.Index', compact('sliders'))
           ->with('i', (request()->input('page', 1) - 1) * 5);
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
       return view('admin.crud.sliders.create');
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   { 
       // dd($request->all());
       $request->validate([
           'title' => 'required',
       ]);

       $data=$request->all();
       Slider::create($data);

       return redirect()->route('sliders.index')
           ->with('success', 'تم الانشاء');
   }

   /**
    * Display the specified resource.
    *
    * @param  \App\Models\Slider  $data
    * @return \Illuminate\Http\Response
    */
   public function show(Slider $data)
   {
       return view('admin.crud.sliders.show', compact('data'));
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\Slider  $data
    * @return \Illuminate\Http\Response
    */
   public function edit(Slider $data)
   {
   //    dd($data->title);
       return view('admin.crud.sliders.edit', compact('data'));
   }
   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\portfolio  $data
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, Slider $data)
   {
       $request->validate([
           'name' => 'title',
       ]);
       $data->update($request->all());

       return redirect()->route('sliders.index')
           ->with('success', 'تم التعديل بنجاح');
   }
   /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\Slider  $data
    * @return \Illuminate\Http\Response
    */
   public function destroy(Slider $data)
   {
       $data->delete();

       return redirect()->route('sliders.index')
           ->with('success', 'تم الحذف');
   }
}
