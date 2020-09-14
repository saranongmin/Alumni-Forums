<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Category;
use App\Event;
use App\Report;
use App\Job;


class FrontendController extends Controller
{
    
     public function welcome()
    {
         $categories = Category::all();
        $blogs  = Blog::latest()->take(7)->get();
        return view('welcome',compact('categories','blogs'));
    }

    public function blog()
    {
        $blog = Blog::all();
        return view('frontend.blogs',compact('blog'));
    }
    
    public function blogDetails(Blog $blog)
    {
        $blogs  = Blog::latest()->take(1)->get();
        return view('frontend.blog-single', compact('blogs'));
    }

    public function job()
    {

       $job = Job::all();
        return view('frontend.jobs',compact('job'));
   }

       public function event()
       {
          $event = Event::all();
          return view('frontend.events',compact('event'));
        }
         public function eventDetails(Event $event)
         {
              $events  = Event::latest()->take(1)->get();
            return view('frontend.event-details', compact('events'));
         }

         public function reports()
         {
            $reports = Report::all();
            return view('frontend.reports',compact('reports'));
         }

}
