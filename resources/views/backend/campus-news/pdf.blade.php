<h1>Category List</h1>

<table border="1">
    <tr>
        <th>SL#</th>
        <th>Title</th>
        <th>Description</th>
        
    </tr>

    @foreach($profiles as $profile)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $profile->title }}</td>
            <td>{{ $profile->description }}</td>
        </tr>
    @endforeach
</table>
