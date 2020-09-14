<h1>News List</h1>

<table border="1">
    <tr>
        <th>SL#</th>
        <th>Title</th>
        <th>Description</th>
        
    </tr>

    @foreach($news as $new)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $new->title }}</td>
            <td>{{ $new->description }}</td>
        </tr>
    @endforeach
</table>
