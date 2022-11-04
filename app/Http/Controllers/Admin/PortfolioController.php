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

        $data=$request->all();
        $data['image']=json_encode($data['images']);
        Gallery::create($data);

        return redirect()->route('portfolios.index')
            ->with('success', 'تم الانشاء');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallery  $data
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $data)
    {
        return view('admin.crud.portfolios.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $data
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $data)
    {
    //    dd($data->title);
        return view('admin.crud.portfolios.edit', compact('data'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\portfolio  $data
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $data)
    {
        $request->validate([
            'name' => 'title',
        ]);
        $data->update($request->all());

        return redirect()->route('portfolios.index')
            ->with('success', 'تم التعديل بنجاح');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $data
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $data)
    {
        $data->delete();

        return redirect()->route('portfolios.index')
            ->with('success', 'تم الحذف');
    }
}
