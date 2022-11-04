<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::latest()->paginate(5);
        return view('Admin.crud.blogs.index', compact('blogs'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.crud.blogs.create');
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
        $data['image']=json_encode($data['images']);
        Blog::create($data);

        return redirect()->route('blogs.index')
            ->with('success', 'تم الانشاء');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $data
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $data)
    {
        return view('Admin.crud.blogs.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $data
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $data)
    {
    //    dd($data->title);
        return view('Admin.crud.blogs.edit', compact('data'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\blog  $data
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $data)
    {
        $request->validate([
            'name' => 'title',
        ]);
        $data->update($request->all());

        return redirect()->route('blogs.index')
            ->with('success', 'تم التعديل بنجاح');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $data
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $data)
    {
        $data->delete();

        return redirect()->route('blogs.index')
            ->with('success', 'تم الحذف');
    }
}
