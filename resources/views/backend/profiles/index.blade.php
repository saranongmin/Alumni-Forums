@extends('backend.layouts.master')

@section('title', 'Alumni Profile')

@section('content')
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-md-6">Alumni Information</div>
                <div class="col-md-6 text-right">
                    <a href="{{ route('profiles.create') }}" class="btn btn-sm btn-outline-primary">Add Alumni</a>
                    <a href="{{ route('profiles.trash') }}" class="btn btn-sm btn-outline-danger">Trash List</a>
                    <a href="{{ route('profiles.excel') }}" class="btn btn-sm btn-outline-info">Download Excel</a>
            <a href="{{ route('profiles.pdf') }}" class="btn btn-sm btn-outline-danger">Download Pdf</a>
                </div>
            </div>
        </div>
        
        <div class="card-body">
            <div class="table-responsive">
            
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>SL#</th>
                        <th>Name</th>
                        <th>Department</th>
                        <th>Graduation Year</th>
                        <th style="width: 100px; text-align: center;">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(session()->has('status'))
                        <div class="alert alert-success">
                            <p>{{ session('status') }}</p>
                        </div>
                    @endif
                    @foreach($profiles as $profile)
                    <tr>
                        <td>{{ ++$sl }}</td>
                        <td>{{ $profile->name }}</td>
                        <td>{{ $profile->department}}</td>
                        <td>{{ $profile->graduation_year}}</td>
                        <td>
                            <a href="{{ route('profiles.show', $profile->id) }}" class="btn btn-sm btn-outline-info">Show</a>
                            <a href="{{ route('profiles.edit', $profile->id) }}" class="btn btn-sm btn-outline-warning">Edit</a>



                            <form action="{{ route('profiles.destroy', $profile->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Are You Sure Want To Delete?')" class="btn btn-sm btn-outline-danger">Delete</button>
                            </form>

                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
           
        </div>
        
        
    </div>

</div>
@endsection
@push('css')
    <!-- Custom styles for this page -->
    <link href="{{ asset('ui/backend') }}/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endpush

@push('script')
    <!-- Page level plugins -->
    <script src="{{ asset('ui/backend') }}/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ asset('ui/backend') }}/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('ui/backend') }}/js/demo/datatables-demo.js"></script>
@endpush


