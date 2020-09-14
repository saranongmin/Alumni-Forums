<?php

namespace App\Http\Controllers;
use App\Profile;
use App\Job;
use Carbon\Carbon;
use Image;
use App\Exports\ProfileExport;
use App\Http\Requests\ProfileRequest;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;


class ProfileController extends Controller
{

/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $this->authorize('profiles.viewAny');

        $sl = !is_null(\request()->page) ? (\request()->page -1 )* 10 : 0;

        $profiles = Profile::orderBy('created_at', 'desc')->get();

        return view('backend.profiles.index', compact('profiles', 'sl'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {

        return view('backend.profiles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProfileRequest $request)
    {
      
        try {        
           

            Profile::create($request->all());
            return redirect()->route('profiles.index')->withStatus('Created Successfully !');
        }catch (QueryException $e){
          return redirect()->back()->withInput()->withErrors($e->getMessage());
    

        }
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile) //route model model binding/ dependency injection
    {

        return view('backend.profiles.show', compact('profile'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {

        return view('backend.profiles.edit', compact('profile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProfileRequest $request, Profile $profile)
    {
        try{
            $profile->update($request->all());
            return redirect()->route('profiles.index')->withStatus('Updated Successfully !');
        }catch (QueryException $e){
            return redirect()->back()->withInput()->withErrors($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        try{
            $profile->delete();
            return redirect()->route('profiles.index')->withStatus('Deleted Successfully !');
        }catch (QueryException $e){
            return redirect()->back()->withErrors($e->getMessage());
        }
    }

    public function trash()
    {
        $sl = !is_null(\request()->page) ? (\request()->page -1 )* 10 : 0;

        $profiles = Profile::onlyTrashed()->paginate(10);
        return view('backend.profiles.trash', compact('profiles', 'sl'));
    }

    public function showTrash($id) 
    {


        $profile = Profile::onlyTrashed()
                            ->where('id', $id)
                            ->first();



        return view('backend.profiles.show', compact('profile'));
    }

    public function restoreTrash($id)
    {
        try{

            $profile = Profile::onlyTrashed()
                ->where('id', $id)
                ->first();

            $profile->restore();

            return redirect()->route('profiles.trash')->withStatus('Updated Successfully !');
        }catch (QueryException $e){
            return redirect()->back()->withInput()->withErrors($e->getMessage());
        }
    }

    public function deleteTrash($id)
    {
        try{
            $profile = Profile::onlyTrashed()
                ->where('id', $id)
                ->first();

            $profile->forceDelete();

            return redirect()->route('profiles.trash')->withStatus('Deleted Successfully !');
        }catch (QueryException $e){
            return redirect()->back()->withErrors($e->getMessage());
        }
    }
    public function myJob()
    {

    return view('backend.jobs.index');

    }

}

    

