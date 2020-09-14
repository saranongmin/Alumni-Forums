@extends('backend.layouts.master')

@section('title', 'news')

@section('content')
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-md-6">Campus News</div>
                <div class="col-md-6 text-right">
                    <a href="{{ route('campus-news.create') }}" class="btn btn-sm btn-outline-primary">Add News</a>
                    
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
{{--                id="dataTable"--}}
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>SL#</th>
                        <th>Title</th>
                       
                        <th style="width: 150px; text-align: center;">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(session()->has('status'))
                        <div class="alert alert-success">
                            <p>{{ session('status') }}</p>
                        </div>
                    @endif
                    @foreach($campusNews as $campusNew)
                    <tr>
                        <td>{{ ++$sl }}</td>
                        <td>{{ $campusNew->title }}</td>
                        
                        <td>
                            <a href="{{ route('campus-news.show', $campusNew->id) }}" class="btn btn-sm btn-outline-info">Show</a>
                            <a href="{{ route('campus-news.edit', $campusNew->id) }}" class="btn btn-sm btn-outline-warning">Edit</a>

{{--                            <a href="#" class="btn btn-sm btn-outline-danger">Delete</a>--}}

                            <form action="{{ route('campus-news.destroy', $campusNew->id) }}" method="post">
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
            {{--{{ $campusNews->links() }}--}}
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


