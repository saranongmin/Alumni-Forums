<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CvRequest;

use App\Cv;

class CvController extends Controller


{

    public function index()
    {
 $sl = !is_null(\request()->page) ? (\request()->page -1 )* 10 : 0;

        $cvs = Cv::orderBy('created_at', 'desc')->get();

        return view('frontend.resumes.index', compact('cvs', 'sl'));

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
    public function store(CvRequest $request)
    {
      
        try {        
           

            Cv::create($request->all());
            return redirect()->route('frontend.resumes.index')->withStatus('Created Successfully !');
        }catch (QueryException $e){
          return redirect()->back()->withInput()->withErrors($e->getMessage());
    

        }
    }
}
