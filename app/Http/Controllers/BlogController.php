<?php

namespace App\Http\Controllers;
use Illuminate\Database\QueryException;
use Illuminate\Notifications\Notification;
use App\Exports\BlogExport;
use App\Http\Requests\BlogRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Blog;
use App\Tag;
use App\Category;
use App\SubCategory;
use Carbon\Carbon;
use Image;

class BlogController extends Controller
{
    public function index()
    {
         $this->authorize('blogs.viewAny');

         $sl = !is_null(\request()->page) ? (\request()->page -1 )* 10 : 0;

        $blogs = Blog::with('category', 'createdBy')->orderBy('created_at', 'desc')->paginate(10);
        return view('backend.blogs.index', compact('blogs', 'sl'));
    }

    public function create()
    { 

         $categories = Category::pluck('title', 'id')->toArray();
        $subCategories = SubCategory::pluck('title', 'id')->toArray();

        $tags = Tag::pluck('name','id')->toArray();
        $selectedTags = [];
       
           $selectedTags = [];

        return view('backend.blogs.create', compact('categories',  'tags', 'selectedTags','subCategories'));  
          }

    public function store(Request $request)
    {
        try {

            $request->validate([
                    'title' => ['required','min:10','max:100'],
                    'category_id' => 'required|exists:categories,id'
                ]
            );
            

            $data = $request->all();
            if ($request->hasFile('image')) {
                $data['image'] = $this->uploadImage($request->image, $request->title);
            }

            $data['created_by'] = auth()->user()->id;
            $blog = Blog::create($data);
            if($request->hasFile('picture')){
                foreach ($request->picture as $pic){
                    $blog->pictures()->create([
                        'picture' => $this->uploadMultipleImage($pic),
                    ]);
                }
            }

            return redirect()->route('blogs.index')->withStatus('Created Successfully !');
        }catch (QueryException $e){
            return redirect()->back()->withInput()->withErrors($e->getMessage());
        }
    }

    public function show(Blog $blog) //route model model binding/ dependency injection
    {
        return view('backend.blogs.show', compact('blog'));
    }

    public function edit(Blog $blog)
    {
    $this->authorize('blogs.update()');

     $categories = Category::pluck('title', 'id')->toArray();
        $subCategories = Category::pluck('title', 'id')->toArray();
       
$tags = Tag::pluck('name','id')->toArray();
        $selectedTags = $blog->tags->pluck('id')->toArray();
        return view('backend.blogs.edit', compact('blog','tags','selectedTags','categories','subCategories'));    }

    public function update(BlogRequest $request, Blog $blog)
    {
        
         $this->authorize('blogs.update()');

        try{
            $blog->update($request->all());
            return redirect()->route('blogs.index')->withStatus('Updated Successfully !');
        }catch (QueryException $e){
            return redirect()->back()->withInput()->withErrors($e->getMessage());
        }
    }

    public function destroy(Blog $blog)
    {
                 $this->authorize('blogs.delete()');

        try{
            $blog->delete();
            return redirect()->route('blogs.index')->withStatus('Deleted Successfully !');
        }catch (QueryException $e){
            return redirect()->back()->withErrors($e->getMessage());
        }
    }

    private function uploadImage($file, $name)
    {
        $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
        $file_name = $timestamp .'-'.$name. '.' . $file->getClientOriginalExtension();
        $pathToUpload = storage_path().'/app/public/blogs/';
        Image::make($file)->resize(634,792)->save($pathToUpload.$file_name);
        return $file_name;
    }

    private function unlink($file)
    {
        $pathToUpload = storage_path().'/app/public/blogs/';
        if ($file != '' && file_exists($pathToUpload. $file)) {
            @unlink($pathToUpload. $file);
        }
    }
    private function uploadMultipleImage($file)
    {
        $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
        $name = $file->getClientOriginalName();
        $file_name = $timestamp .'-' . $name;
        $pathToUpload = storage_path().'/app/public/blogs/';
        Image::make($file)->resize(634,792)->save($pathToUpload.$file_name);
        return $file_name;
    }
}
