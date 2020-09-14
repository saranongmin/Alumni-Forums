@extends('frontend.layouts.master')

@section('title', 'Job Apply')
@section('content')
<section class="job-area relative" id="home" style="height:500px">
    <div class="overlay overlay-bg"></div>
    <div class="container">
     <div class="row fullscreen d-flex align-items-center justify-content-center">
       <div class="job-content col-lg-12"></div>
         </div>
         </div>
      </section>

<div class="container-fluid" style="margin-top: 30px">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-md-6">Alumni Member Name List</div>
                <div class="col-md-6 text-right">
                    <a href="{{ route('aprofiles.create') }}" class="btn btn-sm btn-outline-primary">Registration if you are graduate</a>
                </div>
            </div>
        </div>
         <div class="card-body">
            <div class="table-responsive" width="30%">
<table class="table table-bordered" id="dataTable" width="30%" cellspacing="0">                    <thead>
                    <tr>
                        <th>SL#</th>
                        <th>Name</th>
                        
                        </tr>
                    </thead>
                    <tbody>
                    @if(session()->has('status'))
                        <div class="alert alert-success">
                            <p>{{ session('status') }}</p>
                        </div>
                    @endif
                    @foreach($aprofiles as $aprofile)
                    <tr>
                        <td>{{ ++$sl }}</td>
                        
                        <td>{{ $aprofile->name }}</td>

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
