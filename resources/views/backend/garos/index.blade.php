@extends('backend.layouts.master')

@section('title', 'Garos')

@section('content')
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-md-6">Garo Community </div>
                <div class="col-md-6 text-right">
                    <a href="{{ route('garos.create') }}" class="btn btn-sm btn-outline-primary">Add Community</a>
                    
                </div>
            </div>
        </div>
        
        <div class="card-body">
          <div class="table-responsive" >
            {{--id="dataTable"--}}
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>SL#</th>
                         <th>Image</th>
                        <th>Name</th>
                        <th>University</th>
                          <th>Department</th>
                        <th style="width: 100px; text-align: center;">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(session()->has('status'))
                        <div class="alert alert-success">
                            <p>{{ session('status') }}</p>
                        </div>
                    @endif


                    @foreach($garos as $garo)

                    <tr>
                        <td>{{ ++$sl }}</td>                       

                        <td>
                            @if(file_exists(storage_path().'/app/public/garos/'.$garo->image ) && (!is_null($garo->image)))
                                <img src="{{ asset('storage/garos/'.$garo->image) }}" height="100">
                            @else
                                <img src="{{ asset('/default-avatar.png') }}">
                            @endif
                        </td>
                   
                        <td>{{ $garo->name }}</td>
                        <td>{{ $garo->university}}</td>
                                                <td>{{ $garo->department}}</td>

                        <td>
                            <a href="{{ route('garos.show', $garo->id) }}" class="btn btn-sm btn-outline-info">Show</a>
                              @can('garos.viewAny')
        
                            <a href="{{route('garos.index')}}">
        
        
                            <a href="{{ route('garos.edit', $garo->id) }}" class="btn btn-sm btn-outline-warning">Edit</a>


                            <form action="{{ route('garos.destroy', $garo->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Are You Sure Want To Delete?')" class="btn btn-sm btn-outline-danger">Delete</button>
                            </form>
                            @endcan

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
