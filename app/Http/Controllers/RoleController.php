<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
class RoleController extends Controller
{
    public function index()
    {
    	$sl =!is_null(\request()->page)? (\request()->page-1)* 10 : 0;
    	$roles =Role::orderBy('created_at','desc')->get();
    	return view('backend.roles.index',compact('roles','sl'));
    }
}
