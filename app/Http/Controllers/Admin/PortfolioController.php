<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\PortfolioRequest;
use Illuminate\Support\Facades\File;
use App\Models\Gallery;
use App\Models\Image;
use Illuminate\Http\Request;
use App\Models\File as ModelsFile;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    function __construct()
    {
        $this->middleware('permission:portfolio-list|portfolio-create|portfolio-edit|portfolio-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:portfolio-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:portfolio-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:portfolio-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $portfolios = Gallery::latest()->get();
        return view('admin.crud.portfolios.index', compact('portfolios'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.crud.portfolios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PortfolioRequest $request)
    {
        $portfolio = Gallery::create($request->except('images'));
        $portfolio->uploadFiles();

        return redirect()->route('portfolios.index')
            ->with('success', 'تم الانشاء');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallery  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $portfolio)
    {
        $images = $portfolio->images;
        return view('admin.crud.portfolios.show', compact('portfolio', 'images'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $portfolio)
    {
        $images = $portfolio->images;
        return view('admin.crud.portfolios.edit', compact('portfolio', 'images'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(PortfolioRequest $request, Gallery $portfolio)
    {
        $portfolio->update($request->except('images', 'delimages'));

        $portfolio->updateFiles();

        return redirect()->route('portfolios.index', compact('portfolio'))
            ->with('success', 'تم التعديل بنجاح');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $portfolio)
    {

        $portfolio->delete();
        $portfolio->deleteFiles();

        return redirect()->route('portfolios.index')
            ->with('success', 'تم الحذف');
    }
}
