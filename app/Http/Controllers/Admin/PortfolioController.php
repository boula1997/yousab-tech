<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolios = Gallery::latest()->paginate(5);
        return view('admin.crud.portfolios.Index', compact('portfolios'))
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
    public function store(Request $request)
    { 
        // dd($request->all());
        $request->validate([
            'title' => 'required',
        ]);

        $portfolio=$request->all();
        $portfolio['image']=json_encode($portfolio['images']);
        Gallery::create($portfolio);

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
        return view('admin.crud.portfolios.show', compact('portfolio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $portfolio)
    {
    //    dd($portfolio->title);
        return view('admin.crud.portfolios.edit', compact('portfolio'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $portfolio)
    {
        $request->validate([
            'name' => 'title',
        ]);
        $portfolio->update($request->all());

        return redirect()->route('portfolios.index')
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

        return redirect()->route('portfolios.index')
            ->with('success', 'تم الحذف');
    }
}
