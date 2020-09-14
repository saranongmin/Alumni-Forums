@extends('backend.layouts.master')

@section('title', 'Blog Details')

@section('content')
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="row">
                    <div class="col-md-6">Show Blog</div>
                    <div class="col-md-6 text-right">
                        <a href="{{ route('blogs.index') }}" class="btn btn-sm btn-outline-primary">Blog List</a>
                    </div>
                </div>
            </div>
            <div class="p-4">
                @if(file_exists(storage_path().'/app/public/blogs/'.$blog->image ) && (!is_null($blog->image)))
                    <img src="{{ asset('storage/blogs/'.$blog->image) }}" height="100">
                @else
                    <img src="{{ asset('/default-avatar.png') }}">
                @endif
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <th>Title</th>
                            <th>{{ $blog->title }}</th>
                        </tr>
                        <tr>
                            <th>Description</th>
                            <th>{{ $blog->description }}</th>
                        </tr>
                        <tr>
                            <th>Tags</th>
                            <th>
                                @foreach($blog->tags as $tag)
                                    <li>{{ $tag->name }}</li>
                                @endforeach
                            </th>
                        </tr>

                   

                    </tbody>
                </table>


                @if(count($blog->comments)>0)
                <h3>Comments</h3>
                    <ol>
                      @foreach($blog->comments as $comment)
                         <li>
                             {{ $comment->body }}
                            Commented At <mark>{{ $comment->created_at->toFormattedDateString()  }}   {{ $comment->created_at->diffForHumans()  }}</mark>
                            By <mark>{{ $comment->commentedBy->name  }}</mark>
                         </li>
                      @endforeach
                    </ol>
                @endif


                {!! Form::open([
                 'route' => ['blogs.comment', $blog->id]
                ]) !!}

                {!! Form::label('body', 'Write Your Comment...') !!}

                {!! Form::textarea('body', null, [
                   'class' => 'form-control',
                   'id' => 'body'
                ]) !!}

                {!! Form::button('Post Comment', [
                    'class' => 'btn btn-primary',
                    'type' => 'submit'
                ]) !!}

                {!! Form::close() !!}
            </div>
        </div>

    </div>
@endsection

