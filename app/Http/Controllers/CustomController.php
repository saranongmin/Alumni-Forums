<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Custom;
use App\Http\Requests\CustomRequest;

class CustomController extends Controller
{

    public function index()
    {

  $sl = !is_null(\request()->page) ? (\request()->page -1 )* 10 : 0;

        $customs = Custom::orderBy('created_at', 'desc')->get();

        return view('frontend.customs.index', compact('customs', 'sl'));
     }
   public function create()
    

    {

        return view('frontend.customs.create');
    }

    public function store(CustomRequest $request)
    {
      
        try {        
           

            Custom::create($request->all());
            return redirect()->route('customs.index')->withStatus('Your Information is Uploaded  Successfully !');
        }catch (QueryException $e){
          return redirect()->back()->withInput()->withErrors($e->getMessage('Created Successfully !'));
    

        }
    }
}
