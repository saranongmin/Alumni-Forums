<?php

namespace App\Http\Controllers;

use App\JobSubcategory;
use App\Jobcategory;

use Carbon\Carbon;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;
use Image;

class JobSubcategoryController extends Controller
{
    public function index()
    {

        $sl = !is_null(\request()->page) ? (\request()->page -1 )* 10 : 0;

        $JobSubcategories = JobSubcategory::orderBy('created_at', 'desc')->get();

        return view('backend.job-subcategories.index', compact('JobSubcategories', 'sl'));
    }
    public function create()
    {
        $jobcategories = JobCategory::pluck('title','id');
        return view('backend.job-subcategories.create',compact('jobcategories'));
    }

    public function store(Request $request)
    {
        try {


            $data = $request->all();
            
            JobSubcategory::create($data);


            return redirect()->route('job-subcategories.index')->withStatus('Created Successfully !');
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
    public function show(JobSubcategory $JobSubcategory) //route model model binding/ dependency injection
    {

        return view('backend.job-subcategories.show', compact('JobSubcategory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(JobSubcategory $JobSubcategory)
    {
        $jobcategories = Jobcategory::pluck('title','id');

        return view('backend.job-subcategories.edit', compact('JobSubcategory','jobcategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JobSubcategory $JobSubcategory)
    {
        try{
            $data = $request->all();
            
            $JobSubcategory->update($data);
            return redirect()->route('job-subcategories.index')->withStatus('Updated Successfully !');
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
    public function destroy(JobSubcategory $JobSubcategory)
    {
        try{
            $JobSubcategory->delete();
            return redirect()->route('job-subcategories.index')->withStatus('Deleted Successfully !');
        }catch (QueryException $e){
            return redirect()->back()->withErrors($e->getMessage());
        }
    }

}
