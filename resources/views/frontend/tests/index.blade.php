@extends('frontend.layouts.master')

@section('title', 'jobs')
@section('content')
<div class="col-lg-12" style="margin-top: 100px">
	<a href="{{route('tests.create')}}" class="btn btn-sm btn-outline-primary">Add Value</a>
</div>
<table class="table table-bordered" id="dataTable" width="50%" cellspacing="1">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th style="width: 10px; text-align: center;">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(session()->has('status'))
                        <div class="alert alert-success">
                            <p>{{ session('status') }}</p>
                        </div>
                    @endif
                    @foreach($tests as $test)
                    <tr>
                    	
                        <td>{{ $test->name }}</td>
                        
                        <td>
                            <a href="{{ route('tests.show', $test->id) }}" class="btn btn-sm btn-outline-info">Show</a>
                            <a href="{{ route('tests.edit', $test->id) }}" class="btn btn-sm btn-outline-warning">Edit</a>


                            <form action="{{ route('tests.destroy', $test->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Are You Sure Want To Delete?')">Delete</button>
                            </form>

                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
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