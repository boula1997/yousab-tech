<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\BlogRequest;
use App\Models\File as ModelsFile;
use App\Models\Blog;
use Exception;
use Illuminate\Support\Facades\File;

class BlogController extends Controller
{
    /**s
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Responses
     */

    function __construct()
    {
        $this->middleware('permission:blog-list|blog-create|blog-edit|blog-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:blog-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:blog-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:blog-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $blogs = Blog::latest()->get();
        return view('admin.crud.blogs.Index', compact('blogs'))
            ->with('i', (request()->input('blog', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.crud.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogRequest $request)
    {

        $data = $request->except('image');
        $blog = Blog::create($data);
        $file = $request->file('image');
        $data['image'] = $request->image->store('images');
        $file->move('images', $data['image']);
        ModelsFile::create(['url' => $data['image'], 'fileable_id' => $blog->id, 'fileable_type' => 'App\Models\Blog']);
        return redirect()->route('blogs.index')
            ->with('success', 'تم الانشاء');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        return view('admin.crud.blogs.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        // dd($blog);
        return view('admin.crud.blogs.edit', compact('blog'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\portfolio  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(BlogRequest $request, Blog $blog)
    {
        $data = $request->except('image');
        $blog->update($data);

        if ($request->hasFile('image')) {
            if (file_exists($blog->file->url))
                File::delete($blog->file->url);
            $blog->file->delete();
            $file = $request->file('image');
            $data['image'] = $request->image->store('images');
            $file->move('images', $data['image']);
            ModelsFile::create(['url' => $data['image'], 'fileable_id' => $blog->id, 'fileable_type' => 'App\Models\Blog']);
        } else {
            $data['image'] = $blog->image;
        }



        return redirect()->route('blogs.index', compact('blog'))
            ->with('success', 'تم التعديل بنجاح');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        $blog->file->delete();
        File::delete($blog->file->url);


        return redirect()->route('blogs.index')
            ->with('success', 'تم الحذف');
    }
}
