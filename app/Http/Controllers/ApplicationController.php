<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Candidate;
use App\Models\Employer;
use App\Models\Job;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $id = auth()->id();
        $emp  = Employer::where("user_id", "=", $id )->first();
        $employer_id = $emp->id;

        $applications = Application::whereHas('job', function ($query) use ($employer_id) {
            $query->where('employer_id', $employer_id);
        })
            ->with('candidate', 'job')
            ->paginate(10);

        return view('adminlte::applications.index', compact('applications'));
    }



    /**
     * Apply to Job.
     */

    public function apply($id)
    {
        $user_id = auth()->id();
        $can  = Candidate::where("user_id", "=", $user_id )->first();

        $exist = Application::where('job_id', $id)
            ->where('candidate_id', $can->id)
            ->first();

        if ($exist) {
            return redirect()->back()->with('error', 'El registro ya existe');
        }else{
            $apply = new Application();
            $apply->job_id = $id;
            $apply->candidate_id = $can->id;
            $apply->save();

            return redirect()->route('jobs.see')->with('success', 'Oferta Aplicada');
        }

    }


    public function seeAplications()
    {
        $id = auth()->id();
        $emp  = Candidate::where("user_id", "=", $id )->first();
        $candidate_id = $emp->id;

        $applications = Application::whereHas('job', function ($query) use ($candidate_id) {
            $query->where('candidate_id', $candidate_id);
        })
            ->with('candidate', 'job')
            ->paginate(10);

        return view('adminlte::applications.applications', compact('applications'));
    }



}


