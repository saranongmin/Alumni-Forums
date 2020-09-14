<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Resume;
use App\Http\Requests\ResumeRequest;


class ResumeController extends Controller
{
 public function index()
    {
         $sl = !is_null(\request()->page) ? (\request()->page -1 )* 10 : 0;

        $resumes = Resume::orderBy('created_at', 'desc')->get();

        return view('frontend.resumes.index', compact('resumes', 'sl'));

    }

    public function create()

    {

        return view('frontend.resumes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ResumeRequest $request)
    {
      
        try {        
           

            Resume::create($request->all());
            return redirect()->route('resumes.index')->withStatus('Created Successfully !');
        }catch (QueryException $e){
          return redirect()->back()->withInput()->withErrors($e->getMessage());
    

        }
    }
}