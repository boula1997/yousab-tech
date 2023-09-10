<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\PageRequest;
use App\Models\File as ModelsFile;
use App\Models\Page;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class PageController extends Controller
{
    /**s
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Responses
     */
    private $page;
    function __construct(Page $page)
    {
        $this->middleware('permission:page-list|page-create|page-edit|page-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:page-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:page-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:page-delete', ['only' => ['destroy']]);
        $this->page = $page;
    }

    public function index()
    {
        try {
            $pages = $this->page->latest()->get();
            return view('admin.crud.pages.index', compact('pages'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
        } catch (Exception $e) {
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
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
        try {
            $data = $request->except('image');
            $page = $this->page->create($data);
            $page->uploadFile();
            return redirect()->route('pages.index')
                ->with('success', trans('general.created_successfully'));
        } catch (Exception $e) {
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
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
    public function update(PageRequest $request, Page $page)
    {
        try {
            $data = $request->except('image');
            $page->update($data);
            $page->updateFile();
            return redirect()->route('pages.index', compact('page'))
                ->with('success', trans('general.update_successfully'));
        } catch (Exception $e) {
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        try {
            $page->delete();
            $page->file->delete();
            $page->deleteFile();
            return redirect()->route('pages.index')
                ->with('success', trans('general.deleted_successfully'));
        } catch (Exception $e) {
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }
}
