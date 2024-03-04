<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Candidate;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class CandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function showRegistrationForm()
    {
        return view('adminlte::auth.register_candidate');
    }



    public function register(Request $request)
    {
        $file = $request->file('cv');
        $filename = null;

        if ($request->hasFile('cv')) {

            $filename = rand().$file->getClientOriginalName();
            $file->move(storage_path('app/public/cv'), $filename);

        }

        $user =  User::create([
            'name' => $request->input('first_name'),
            'email' =>  $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'user_type' => 'candidate',
        ]);

        Candidate::create([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'phone' => $request->input('phone'),
            'cv' => $filename,
            'user_id' => $user->id,
        ]);



        Auth::login($user);

        return redirect()->route('home_candidate');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
