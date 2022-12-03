<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
   /**s
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $services = Service::latest()->get();
        return view('admin.crud.services.Index', compact('services'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.crud.services.create');
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

       $data=$request->all();

        $file = $request->file('image');
        $data['image']=$request->image->store('images');
        $file->move('images',$data['image']);
        Service::create($data);
        return redirect()->route('services.index')
            ->with('success', 'تم الانشاء');
    }
 
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        return view('admin.crud.services.show', compact('service'));
    }
 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
    //    dd($service->title);
        return view('admin.crud.services.edit', compact('service'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\portfolio  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $request->validate([
            'title' => 'required',
         ],['title.required'=>'حقل الاسم مطلوب',
         'description.required'=>'حقل الوصف مطلوب',]);
         
         $data=$request->all();
 
         if($request->hasFile('image')){

            if(file_exists($service->image))
            File::delete($service->image);
            $file = $request->file('image');
            $data['image']=$request->image->store('images');
            $file->move('images',$data['image']);

         }
 
         else
        { $data['image']=$service->image;}
 
         $service->update($data);
 
 
        return redirect()->route('services.edit',compact('service'))
            ->with('success', 'تم التعديل بنجاح');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $service->delete();
        File::delete($service->image);
 
        return redirect()->route('services.index')
            ->with('success', 'تم الحذف');
    }
 
}
