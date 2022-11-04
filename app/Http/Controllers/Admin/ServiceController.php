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
        ]);

        $data=$request->all();
        Service::create($data);

        return redirect()->route('services.index')
            ->with('success', 'تم الانشاء');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $data
     * @return \Illuminate\Http\Response
     */
    public function show(Service $data)
    {
        return view('admin.crud.services.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $data
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $data)
    {
    //    dd($data->title);
        return view('admin.crud.services.edit', compact('data'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\service  $data
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $data)
    {
        $request->validate([
            'name' => 'title',
        ]);
        $data->update($request->all());

        return redirect()->route('services.index')
            ->with('success', 'تم التعديل بنجاح');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $data
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $data)
    {
        $data->delete();

        return redirect()->route('services.index')
            ->with('success', 'تم الحذف');
    }
}
