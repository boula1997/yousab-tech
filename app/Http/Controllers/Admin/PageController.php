<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class PageController extends Controller
{
    /**s
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $pages = Page::latest()->get();
        return view('admin.crud.pages.Index', compact('pages'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.crud.pages.create');
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
        Page::create($data);
        return redirect()->route('Pages.index')
            ->with('success', 'تم الانشاء');
    }
 
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        return view('admin.crud.pages.show', compact('page'));
    }
 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
    //    dd($page->title);
        return view('admin.crud.pages.edit', compact('page'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\portfolio  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Page $page)
    {
        $request->validate([
            'title' => 'required',
         ],['title.required'=>'حقل الاسم مطلوب',
         'description.required'=>'حقل الوصف مطلوب',]);
         
         $data=$request->all();
 
         if($request->hasFile('image')){

            if(file_exists($page->image))
            File::delete($page->image);
            $file = $request->file('image');
            $name=$file->getClientOriginalName();
            $file->move('images',$name);
            $data['image']='images/'.$name;

         }
 
         else
        { $data['image']=$page->image;}
 
         $page->update($data);
 
 
        return redirect()->route('pages.index')
            ->with('success', 'تم التعديل بنجاح');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        $page->delete();
 
        return redirect()->route('pages.index')
            ->with('success', 'تم الحذف');
    }
}
