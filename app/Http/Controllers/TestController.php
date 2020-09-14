<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Test;
use App\Http\Requests\TestRequest;
class TestController extends Controller
{
    public function index()
    {

    	$sl =!is_null(\request()->page)?(\request()->page-1)*10:0;
    	return view('frontend.tests.index',compact($sl));
    }

    public function create()
    {
    	return view('frontend.tests.create');
    }
    public function store(TestRequest $request)
    {

    try{

         Test::create($request->all());
        return redirect()->route('tests.index')->withStatus('Created Successfully');

    }
    catch (QueryException $e){
          return redirect()->back()->withInput()->withErrors($e->getMessage());
}



}
}
