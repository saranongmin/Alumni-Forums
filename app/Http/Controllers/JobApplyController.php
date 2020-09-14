<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JobApply;
class JobApplyController extends Controller
{
    public function submit(Request $request)
    {
   $jobEntry = new JobApply();
        $jobEntry->JobApply = $request->input('JobApply');
        $jobEntry->save();
        return redirect('/')->with('status', 'INSERTED');

    }
}
