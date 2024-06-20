<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\VaccancyRequest;
use App\Models\File as ModelsFile;
use App\Models\Vaccancy;
use Exception;
use Illuminate\Support\Facades\File;

class VaccancyController extends Controller
{
    /**s
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Responses
     */
    private $vaccancy;

    function __construct(Vaccancy $vaccancy)
    {
        $this->middleware('permission:vaccancy-list|vaccancy-create|vaccancy-edit|vaccancy-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:vaccancy-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:vaccancy-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:vaccancy-delete', ['only' => ['destroy']]);
        $this->vaccancy = $vaccancy;
    }

    public function index()
    {
        try {
            $vaccancies = $this->vaccancy->latest()->get();
            return view('admin.crud.vaccancies.index', compact('vaccancies'))
                ->with('i', (request()->input('vaccancy', 1) - 1) * 5);
        } catch (Exception $e) {
            dd($e->getMessage());
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
        return view('admin.crud.vaccancies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VaccancyRequest $request)
    {

        try {
            $data = $request->except('image','profile_avatar_remove');
            $vaccancy = $this->vaccancy->create($data);
            return redirect()->route('vaccancies.index')
                ->with('success', trans('general.created_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vaccancy  $vaccancy
     * @return \Illuminate\Http\Response
     */
    public function show(Vaccancy $vaccancy)
    {
        return view('admin.crud.vaccancies.show', compact('vaccancy'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vaccancy  $vaccancy
     * @return \Illuminate\Http\Response
     */
    public function edit(Vaccancy $vaccancy)
    {
        // dd($vaccancy);
        return view('admin.crud.vaccancies.edit', compact('vaccancy'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\portfolio  $vaccancy
     * @return \Illuminate\Http\Response
     */
    public function update(VaccancyRequest $request, Vaccancy $vaccancy)
    {
        try {
            $data = $request->except('image','profile_avatar_remove');
            $vaccancy->update($data);
            return redirect()->route('vaccancies.index', compact('vaccancy'))
                ->with('success', trans('general.update_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vaccancy  $vaccancy
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vaccancy $vaccancy)
    {

        try {
            $vaccancy->delete();
            return redirect()->route('vaccancies.index')
                ->with('success', trans('general.deleted_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }
}
