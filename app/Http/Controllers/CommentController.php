<?php

namespace App\Http\Controllers;

use App\Notifications\BlogComment;
use App\Blog;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class CommentController extends Controller
{
    public function blogComment(Request $request, Blog $blog)
    {
        $blog->comments()->create([
            'body' => $request->body,
            'commented_by' => auth()->user()->id,
        ]);

        if(!is_null( $blog->createdBy)){
            $blog->createdBy->notify(new BlogComment($blog, auth()->user(), $request->body));;
        }


        return redirect()->back();
    }
}
