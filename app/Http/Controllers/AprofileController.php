<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aprofile;
use App\Http\Requests\AprofilesRequest;


class AprofileController extends Controller
{
    public function index()
    {
         $sl = !is_null(\request()->page) ? (\request()->page -1 )* 10 : 0;

        $aprofiles = Aprofile::orderBy('created_at', 'desc')->get();

        return view('frontend.aprofiles.index', compact('aprofiles', 'sl'));

    }

    public function create()

    {

        return view('frontend.aprofiles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AprofilesRequest $request)
    {
      
        try {        
           

            Aprofile::create($request->all());
            return redirect()->route('aprofiles.index')->withStatus('Created Successfully !');
        }catch (QueryException $e){
          return redirect()->back()->withInput()->withErrors($e->getMessage());
    

        }
    }
}
