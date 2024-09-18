<?php

namespace App\Http\Controllers\Admin;

use App\Models\Fee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\FeeRequest;
use App\Models\Admin;
use App\Models\Project;
use Exception;

class FeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $fee;
    function __construct(Fee $fee)
    {
        $this->middleware('permission:fee-list|fee-create|fee-edit|fee-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:fee-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:fee-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:fee-delete', ['only' => ['destroy']]);
        $this->fee = $fee;
    }


    public function index()
    {
        try {

            $fees = $this->fee->latest()->get();
            return view('admin.crud.fees.index', compact('fees'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
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
        $employees=Admin::get();
        $projects=Project::where('status',1)->get();
        return view('admin.crud.fees.create',compact('employees','projects'));
    }
    public function bulkAction(Request $request)
    {


        $feeIds = $request->input('fees');
        $action = $request->input('action');
         
        if(!isset($request->employees)&& $action == 'assign')
        return redirect()->back()->with('error', __('Select Employee!'));
    
        $fee=Fee::whereIn('id', $feeIds)->first();
        $fees=Fee::whereIn('id', $feeIds)->get();
        if ($action == 'assign') {
            foreach($fees as $fee) {
                $feessameTitles=Fee::where('title', $fee->title)->get();
                foreach($feessameTitles as $feesameTitle){
                    foreach($request->employees as $employee){
                    Fee::create([
                        'title'=>$feesameTitle->title,
                        'employee_id'=>$employee,
                        'project_id'=>$feesameTitle->project_id
                    ]);
                }
                $feesameTitle->delete();
             }
            }
            return redirect()->back()->with('success', __('Fees assigned successfully.'));
        } elseif ($action == 'delete') {
            $fees=Fee::whereIn('id', $feeIds)->get();
            foreach($fees as $fee) {
             Fee::where('title',$fee->title)->update(['status' => !$fee->status]);
            }; 
            return redirect()->back()->with('success', __('Fees deleted successfully.'));
        }
    
        return redirect()->back()->with('error', __('Invalid action selected.'));
    }
    

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FeeRequest $request)
    {
        try {
            $titles = explode('+', $request->title);
            foreach ($titles as $title) {
                foreach ($request->employees as $employee) {
                    Fee::create([
                        'title' => $title,
                        'employee_id' => $employee,
                        'project_id' => $request->project_id
                    ]);
                }
            }
    
            // Get the previous and the one before the previous route
            $previousRoute = session('previousRoute');
            $twoRoutesAgo = session('twoRoutesAgo');
    
            // Redirect to either the previous or the one before
            return redirect($twoRoutesAgo)
                ->with(['success' => __('general.created_successfully')]);
    
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fee  $fee
     * @return \Illuminate\Http\Response
     */
    public function show(Fee $fee)
    {
        return view('admin.crud.fees.show', compact('fee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fee  $fee
     * @return \Illuminate\Http\Response
     */
    public function edit(Fee $fee)
    {
        //    dd($fee->title);
        $employees=Admin::get();
        $projects=Project::where('status',1)->get();
        return view('admin.crud.fees.edit', compact('fee','employees','projects'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\portfolio  $fee
     * @return \Illuminate\Http\Response
     */
    public function update(FeeRequest $request, Fee $fee)
    {
        try {
            $data = $request->all();
            $fee->update($data);
            return redirect()->back()->with(['success' => __('general.created_successfully')]);
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fee  $fee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fee $fee)
    {
        try {
            $fee->update([
                'status' => !$fee->status,
                'created_at' => now() // or use Carbon::now()
            ]);
            return redirect()->back()->with(['success' => __('general.created_successfully')]);
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }
}
