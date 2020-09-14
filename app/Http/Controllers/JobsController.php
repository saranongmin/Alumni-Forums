<?php

namespace App\Http\Controllers;

use App\Job;
use App\Http\Requests\JobRequest;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $this->authorize('jobs.viewAny');

        $sl = !is_null(\request()->page) ? (\request()->page -1 )* 20 : 0;

        $jobs = Job::orderBy('created_at', 'desc')->paginate(50);

        return view('backend.jobs.index', compact('jobs', 'sl'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        $this->authorize('jobs.create');

        return view('backend.jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JobRequest $request)
    {
      
        try {        
           

            Job::create($request->all());
            return redirect()->route('jobs.index')->withStatus('Created Successfully !');
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
    public function show(Job $job) //route model model binding/ dependency injection
    {

        return view('backend.jobs.show', compact('job'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Job $job)
    {
         // $this->authorize('jobs.update()');

        return view('backend.jobs.edit', compact('job'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(JobRequest $request, Job $job)
    {
        // $this->authorize('jobs.update()');

        try{
            $job->update($request->all());
            return redirect()->route('jobs.index')->withStatus('Updated Successfully !');
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
    public function destroy(Job $job)
    {
        $this->authorize('jobs.delete()');

        try{
            $job->delete();
            return redirect()->route('jobs.index')->withStatus('Deleted Successfully !');
        }catch (QueryException $e){
            return redirect()->back()->withErrors($e->getMessage());
        }
    }

    public function trash()
    {
        $sl = !is_null(\request()->page) ? (\request()->page -1 )* 10 : 0;

        $jobs = Job::onlyTrashed()->paginate(10);
        return view('backend.jobs.trash', compact('jobs', 'sl'));
    }

    public function showTrash($id) 
    {


        $job = Job::onlyTrashed()
                            ->where('id', $id)
                            ->first();



        return view('backend.jobs.show', compact('job'));
    }

    public function restoreTrash($id)
    {
        try{

            $job = Job::onlyTrashed()
                ->where('id', $id)
                ->first();

            $job->restore();

            return redirect()->route('jobs.trash')->withStatus('Updated Successfully !');
        }catch (QueryException $e){
            return redirect()->back()->withInput()->withErrors($e->getMessage());
        }
    }

    public function deleteTrash($id)
    {
        try{
            $job = Job::onlyTrashed()
                ->where('id', $id)
                ->first();

            $job->forceDelete();

            return redirect()->route('jobs.trash')->withStatus('Deleted Successfully !');
        }catch (QueryException $e){
            return redirect()->back()->withErrors($e->getMessage());
        }
    }




}
