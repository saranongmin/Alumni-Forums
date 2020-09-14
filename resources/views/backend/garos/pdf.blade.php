<h1>Category List</h1>

<table border="1">
    <tr>
        <th>SL#</th>
        <th>Name</th>
        <th>Department</th>
        
    </tr>

    @foreach($profiles as $profile)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $profile->name }}</td>
            <td>{{ $profile->department }}</td>
        </tr>
    @endforeach
</table>
