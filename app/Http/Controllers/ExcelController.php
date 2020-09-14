<?php

namespace App\Http\Controllers;

use App\Profile;

use App\Exports\ProfileExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
class ExcelController extends Controller
{
     public function profiles()
    {
        return Excel::download(new ProfileExport(), 'profiles.xlsx');
    }
}
