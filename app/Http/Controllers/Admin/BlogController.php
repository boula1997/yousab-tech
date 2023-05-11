<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\BlogRequest;
use Illuminate\Support\Facades\File;
use App\Models\Blog;
use Exception;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $blog;
    public function __construct(Blog $blog)
    {
        $this->blog = $blog;
    }


    public function index()
    {
        try {
            $blogs = $this->blog->latest()->get();
            return view('admin.crud.blogs.Index', compact('blogs'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
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
        try {
            $data = $request->all();
            $data['image'] = upload_image($request->image);
            $this->blog->create($data);
            return redirect()->route('blogs.index')
                ->with('success', 'تم الانشاء');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
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
        //    dd($blog->title);
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

        try {
            $data = $request->all();

            if ($request->hasFile('image')) {
                delete_file($blog->image);
                $data['image'] = upload_image($request->image);
            } else {
                $data['image'] = $blog->image;
            }

            $blog->update($data);


            return redirect()->route('blogs.edit', compact('blog'))
                ->with('success', 'تم التعديل بنجاح');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        try {
            delete_file($blog->image);
            $blog->delete();
            return redirect()->route('blogs.index')
                ->with('success', 'تم الحذف');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
