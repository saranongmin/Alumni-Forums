@extends('backend.layouts.master')

@section('title', 'jobs')

@section('content')
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-md-6">User List</div>

                <div class="col-md-6 text-right">
                    <a href="{{ route('user-roles.create') }}" class="btn btn-sm btn-outline-primary">Add User</a>
                   
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
             {{--id="dataTable"--}}
                             <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>SL#</th>
                        <th>Job Title</th>
                                               <th>Position</th>

                        <th style="width: 100px; text-align: center;">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(session()->has('status'))
                        <div class="alert alert-success">
                            <p>{{ session('status') }}</p>
                        </div>
                    @endif
                    @foreach($UserRoles as $UserRole)
                    <tr>
                        <td>{{ ++$sl }}</td>
                        <td>{{ $UserRole->name }}</td>
                                              <td>{{ $UserRole->email }}</td>

                        <td>
                           
                            <a href="{{ route('user-role.edit', $UserRole->id) }}" class="btn btn-sm btn-outline-warning">Edit</a>

{{--                            <a href="#" class="btn btn-sm btn-outline-danger">Delete</a>--}}

                            <form action="{{ route('user-role.destroy', $UserRole->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Are You Sure Want To Delete?')">Delete</button>
                            </form>

                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- {{ $jobs->links() }} -->
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



