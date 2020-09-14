<?php

namespace App\Http\Controllers;
use App\Report;
use Illuminate\Http\Request;
use App\Http\Requests\ReportRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
class ReportController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $this->authorize('reports.viewAny');

        $sl = !is_null(\request()->page) ? (\request()->page -1 )* 10 : 0;

        $reports = Report::orderBy('created_at', 'desc')->get();

        return view('backend.reports.index', compact('reports', 'sl'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        $this->authorize('reports.create');

        return view('backend.reports.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReportRequest $request)
    {
      
        try {        
           

            Report::create($request->all());
            return redirect()->route('reports.index')->withStatus('Created Successfully !');
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
    public function show(Report $report) //route model model binding/ dependency injection
    {

        return view('backend.reports.show', compact('report'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Report $report)
    {

        return view('backend.reports.edit', compact('report'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ReportRequest $request, Report $report)
    {

        try{
            $report->update($request->all());
            return redirect()->route('reports.index')->withStatus('Updated Successfully !');
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
    public function destroy(Report $report)
    {

        try{
            $report->delete();
            return redirect()->route('reports.index')->withStatus('Deleted Successfully !');
        }catch (QueryException $e){
            return redirect()->back()->withErrors($e->getMessage());
        }
    }
}
