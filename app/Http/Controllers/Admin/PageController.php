<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\PageRequest;
use App\Models\File as ModelsFile;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class PageController extends Controller
{
    /**s
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Responses
     */

    function __construct()
    {
        $this->middleware('permission:page-list|page-create|page-edit|page-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:page-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:page-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:page-delete', ['only' => ['destroy']]);
    }

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
    public function store(PageRequest $request)
    {
        
        $data = $request->all();
        $file = $request->file('image');
        $data['image'] = $request->image->store('images');
        $file->move('images', $data['image']);
        $page = Page::create($data);
        ModelsFile::create(['url' => $data['image'], 'fileable_id' => $page->id, 'fileable_type' => 'App\Models\Page']);
        return redirect()->route('pages.index')
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
        // dd($page);
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
        ], [
            'title.required' => 'حقل الاسم مطلوب',
            'description.required' => 'حقل الوصف مطلوب',
        ]);
        $data = $request->all();

        if ($request->hasFile('image')) {
            if (file_exists($page->file->url))
                File::delete($page->file->url);
            $page->file->delete();
            $file = $request->file('image');
            $data['image'] = $request->image->store('images');
            $file->move('images', $data['image']);
            ModelsFile::create(['url' => $data['image'], 'fileable_id' => $page->id, 'fileable_type' => 'App\Models\Page']);
        } else {
            $data['image'] = $page->image;
        }

        $page->update($data);


        return redirect()->route('pages.index', compact('page'))
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
        $page->file->delete();
        File::delete($page->file->url);


        return redirect()->route('pages.index')
            ->with('success', 'تم الحذف');
    }
}
