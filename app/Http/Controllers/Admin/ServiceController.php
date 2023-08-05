<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\ServiceRequest;
use Illuminate\Support\Facades\File;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\File as ModelsFile;

class ServiceController extends Controller
{
    /**s
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Responses
     */

    function __construct()
    {
        $this->middleware('permission:service-list|service-create|service-edit|service-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:service-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:service-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:service-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $services = Service::latest()->get();
        return view('admin.crud.services.index', compact('services'))
            ->with('i', (request()->input('service', 1) - 1) * 5);
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
    public function store(ServiceRequest $request)
    {

        $data = $request->except('image');
        $service = Service::create($data);
        $file = $request->file('image');
        $data['image'] = $request->image->store('images');
        $file->move('images', $data['image']);
        ModelsFile::create(['url' => $data['image'], 'fileable_id' => $service->id, 'fileable_type' => 'App\Models\Service']);
        return redirect()->route('services.index')
            ->with('success', 'تم الانشاء');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        return view('admin.crud.services.show', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        // dd($service);
        return view('admin.crud.services.edit', compact('service'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\portfolio  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $data = $request->except('image');
        $service->update($data);
        if ($request->hasFile('image')) {
            if (file_exists($service->file->url))
                File::delete($service->file->url);
            $service->file->delete();
            $file = $request->file('image');
            $data['image'] = $request->image->store('images');
            $file->move('images', $data['image']);
            ModelsFile::create(['url' => $data['image'], 'fileable_id' => $service->id, 'fileable_type' => 'App\Models\Service']);
        } else {
            $data['image'] = $service->image;
        }

      


        return redirect()->route('services.index', compact('service'))
            ->with('success', 'تم التعديل بنجاح');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $service->delete();
        $service->file->delete();
        File::delete($service->file->url);


        return redirect()->route('services.index')
            ->with('success', 'تم الحذف');
    }
}
