@extends('backend.layouts.master')

@section('title', 'Events')

@section('content')
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-md-6">Upcoming Event</div>
                <div class="col-md-6 text-right">
                    <a href="{{ route('events.create') }}" class="btn btn-sm btn-outline-primary">Add Event</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">                    <thead>
                    <tr>
                        <th>SL#</th>
                        <th>Event Name</th>
                        <th>Date</th>
                       
                        <th style="width: 150px; text-align: center;">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(session()->has('status'))
                        <div class="alert alert-success">
                            <p>{{ session('status') }}</p>
                        </div>
                    @endif
                    @foreach($events as $event)
                    <tr>
                        <td>{{ ++$sl }}</td>
                        
                        <td>{{ $event->name }}</td>
                        <td>{{ $event->date }}</td>


                        <td>
                            <a href="{{ route('events.show', $event->id) }}" class="btn btn-sm btn-outline-info">Show</a>
                            <a href="{{ route('events.edit', $event->id) }}" class="btn btn-sm btn-outline-warning">Edit</a>


                            <form action="{{ route('events.destroy', $event->id) }}" method="post">
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
