@extends('backend.layouts.master')

@section('title', 'news Details')

@section('content')
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="row">
                    <div class="col-md-6">Show Job category</div>
                    <div class="col-md-6 text-right">
                        <a href="{{ route('jobcategories.index') }}" class="btn btn-sm btn-outline-primary">List</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <th>Title</th>
                            <th>{{ $jobcategory->title }}</th>
                        </tr>
                        
                     
<tr>
    <th>Description</th>
<th>{{$jobcategory->description}}</th>
</tr>

                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection

