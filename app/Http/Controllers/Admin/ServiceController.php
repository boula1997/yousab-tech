<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $services = Service::latest()->paginate(5);
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
      ],['title.required'=>'حقل الاسم مطلوب',
      'image.required'=>'حقل الصورة مطلوب',]);
 
 
        $data=$request->all();
        $data['image']='images/'.$data['image'];
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
         'image.required'=>'حقل الصورة مطلوب',]);
         
         $data=$request->all();
 
         if($request->input('image')!==null){
             $data['image']='images/'.$data['image'];
         }
 
         else
        { $data['image']=$service->image;}
 
         $service->update($data);
 
 
        return redirect()->route('services.index')
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
 
        return redirect()->route('services.index')
            ->with('success', 'تم الحذف');
    }
 
}
