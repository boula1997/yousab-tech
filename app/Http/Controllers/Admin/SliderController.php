<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{  
    /**
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
        'image' => 'required',
        'description' => 'required',
     ],['title.required'=>'حقل الاسم مطلوب',
     'image.required'=>'حقل الصورة مطلوب',
     'description.required'=>'حقل الوصف مطلوب',
   ]);


   $file = $request->file('image');
   $name=$file->getClientOriginalName();
   $file->move('images',$name);
   $data=$request->all();
   $data['image']='images/'.$name;
       Slider::create($data);
       return redirect()->route('sliders.index')
           ->with('success', 'تم الانشاء');
   }

   /**
    * Display the specified resource.
    *
    * @param  \App\Models\Slider  $slider
    * @return \Illuminate\Http\Response
    */
   public function show(Slider $slider)
   {
       return view('admin.crud.sliders.show', compact('slider'));
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\Slider  $slider
    * @return \Illuminate\Http\Response
    */
   public function edit(Slider $slider)
   {
   //    dd($slider->title);
       return view('admin.crud.sliders.edit', compact('slider'));
   }
   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\portfolio  $slider
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, Slider $slider)
   {
    $request->validate([
        'title' => 'required',
     ],['title.required'=>'حقل الاسم مطلوب',
     'description.required'=>'حقل الوصف مطلوب',]);
        
        $data=$request->all();
        if($request->hasFile('image')){

            if(file_exists($slider->image))
            File::delete($slider->image);
            $file = $request->file('image');
            $name=$file->getClientOriginalName();
            $file->move('images',$name);
            $data['image']='images/'.$name;

         }
        else
       { $data['image']=$slider->image;}

        $slider->update($data);


       return redirect()->route('sliders.index')
           ->with('success', 'تم التعديل بنجاح');
   }
   /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\Slider  $slider
    * @return \Illuminate\Http\Response
    */
   public function destroy(Slider $slider)
   {
       $slider->delete();

       return redirect()->route('sliders.index')
           ->with('success', 'تم الحذف');
   }
}
