<?php


namespace App\Http\View\Composers;

use App\Blog;
use App\Category;
use App\Job;
use App\Jobcategory;
use App\Profile;
use App\Event;
use App\Report;
use App\Test;
use Illuminate\Support\Facades\Cookie;
use Illuminate\View\View;


class FrontendComposer
{

    public function compose(View $view)
    {
        $blogs  = Blog::latest()->take(6)->get();
        $events  = Event::latest()->take(4)->get();
        $categories = Category::latest()->take(3)->get();
        $jobs  = Job::latest()->take(1)->get();
        $profiles = Profile::latest()->take(1)->get();
        $reports = Report::latest()->take(8)->get();
        $blogSingles =Blog::latest()->take(1)->get();
        $tests = Test::latest()->take(10)->get();
        $view->with(compact('events', 'blogs','profiles','categories','jobs','reports','blogSingles','tests'));
    }

}
