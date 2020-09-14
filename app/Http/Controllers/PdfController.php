<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use App\Blog;
use PDF;

class PdfController extends Controller
{
	public function profiles()
    {

        $profiles = Profile::orderBy('created_at', 'desc')->get();

        $pdf = PDF::loadView('backend.profiles.pdf', compact('profiles'));
        return $pdf->download('profiles.pdf');
    }
    public function blogs()
    {
     $blogs = Blog::orderBy('created_at', 'desc')->get();

        $pdf = PDF::loadView('backend.blogs.pdf', compact('blogs'));
        return $pdf->download('blogs.pdf');

    }
    
}
