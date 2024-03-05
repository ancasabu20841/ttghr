<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Employer;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $id = auth()->id();
        $emp  = Employer::where("user_id", "=", $id )->first();

        $jobs = "";
        if(isset($emp)){
            $jobs = Job::where("employer_id", "=",$emp->id )->
            paginate(10);
        }

        return view('adminlte::jobs.index', compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('adminlte::jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $id = auth()->id();
        $emp  = Employer::where("user_id", "=", $id )->first();

        $job = new Job();
        $job->employer_id = $emp->id;
        $job->title = $request->input('title');
        $job->description = $request->input('description');
        $job->available = $request->has('available');
        $job->save();

        return redirect()->route('jobs.index')->with('success', 'Oferta Creada con Exito');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $job = Job::findOrFail($id);
        return view('adminlte::jobs.edit', compact('job'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, $id)
    {
        $job = Job::findOrFail($id);
        $request->except(['_token', '_method']);
        $job->update($request->all());
        return redirect()->route('jobs.index')->with('success', 'Oferta Actualizada');
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy($id)
    {
        $job = Job::findOrFail($id);
        $job->delete();

        return redirect()->route('jobs.index')->with('success', 'Oferta Borrada');

    }
    /**
     * See list Jobs.
     */

    public function findJobs()
    {
        $jobs = Job::paginate(10);
        return view('adminlte::jobs.see', compact('jobs'));
    }

    public function list()
    {
        $jobs = Job::with('employer')
            ->where('available', 1)
            ->orderBy('created_at', 'desc')
            ->take(6)
            ->get();

        $jobs = $jobs->map(function ($job) {
            return [
                'title' => $job->title,
                'description' => $job->description,
                'company_name' => $job->employer->company_name,
            ];
        });

        return response()->json($jobs);

    }

    public function searchJobs(Request $request)
    {
        $searchText = $request->get('term');

        $jobs = Job::with('employer')->where('title', 'like', '%' . $searchText . '%')
            ->orWhere('description', 'like', '%' . $searchText . '%')
            ->orWhereHas('employer', function ($query) use ($searchText) {
                $query->where('company_name', 'like', '%' . $searchText . '%');
            }) ->orderBy('created_at', 'desc')
            ->take(6)
            ->get();

        $jobs = $jobs->map(function ($job) {
            return [
                'title' => $job->title,
                'description' => $job->description,
                'company_name' => $job->employer->company_name,
            ];
        });

        return response()->json($jobs);
    }
}
