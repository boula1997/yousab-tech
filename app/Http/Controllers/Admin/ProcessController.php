<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\ProcessRequest;
use Illuminate\Support\Facades\File;
use App\Models\Process;
use Illuminate\Http\Request;
use App\Models\File as ModelsFile;

class ProcessController extends Controller
{
    /**s
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Responses
     */

    function __construct()
    {
        $this->middleware('permission:process-list|process-create|process-edit|process-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:process-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:process-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:process-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $processes = Process::latest()->get();
        return view('admin.crud.processes.index', compact('processes'))
            ->with('i', (request()->input('process', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.crud.processes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProcessRequest $request)
    {

        $data = $request->except('image');
        $process = Process::create($data);
        $file = $request->file('image');
        $data['image'] = $request->image->store('images');
        $file->move('images', $data['image']);
        ModelsFile::create(['url' => $data['image'], 'fileable_id' => $process->id, 'fileable_type' => 'App\Models\Process']);
        return redirect()->route('processes.index')
            ->with('success', 'تم الانشاء');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Process  $process
     * @return \Illuminate\Http\Response
     */
    public function show(Process $process)
    {
        return view('admin.crud.processes.show', compact('process'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Process  $process
     * @return \Illuminate\Http\Response
     */
    public function edit(Process $process)
    {
        // dd($process);
        return view('admin.crud.processes.edit', compact('process'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\portfolio  $process
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Process $process)
    {
        $data = $request->except('image');
        $process->update($data);
        if ($request->hasFile('image')) {
            if (file_exists($process->file->url))
                File::delete($process->file->url);
            $process->file->delete();
            $file = $request->file('image');
            $data['image'] = $request->image->store('images');
            $file->move('images', $data['image']);
            ModelsFile::create(['url' => $data['image'], 'fileable_id' => $process->id, 'fileable_type' => 'App\Models\Process']);
        } else {
            $data['image'] = $process->image;
        }

      


        return redirect()->route('processes.index', compact('process'))
            ->with('success', 'تم التعديل بنجاح');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Process  $process
     * @return \Illuminate\Http\Response
     */
    public function destroy(Process $process)
    {
        $process->delete();
        $process->file->delete();
        File::delete($process->file->url);


        return redirect()->route('processes.index')
            ->with('success', 'تم الحذف');
    }
}
