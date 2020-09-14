<h1>Blog List</h1>

<table>
    <tr>
        <th>SL#</th>
        <th>Title</th>
                <th>Image</th>

        <th>Description</th>
    </tr>

    @foreach($blogs as $blog)
        <tr>
            <td>{{ $loop->iteration }}</td>
         @if(file_exists(storage_path().'/app/public/blogs/'.$blog->image ) && (!is_null($blog->image)))
                                <img src="{{ asset('storage/blogs/'.$blog->image) }}" height="100">
                            @else
                                <img src="{{ asset('/default-avatar.png') }}">
                            @endif

            <td>{{ $blog->title }}</td>
            <td>{{ $blog->description }}</td>
        </tr>
    @endforeach
</table>
