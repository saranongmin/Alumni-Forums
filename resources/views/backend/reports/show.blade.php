@extends('backend.layouts.master')

@section('title', 'news Details')

@section('content')
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="row">
                    <div class="col-md-6">Show News</div>
                    <div class="col-md-6 text-right">
                        <a href="{{ route('reports.index') }}" class="btn btn-sm btn-outline-primary">News List</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <th>Title</th>
                            <th>{{ $report->title }}</th>
                        </tr>
                        
                     
<tr>
    <th>Description</th>
<th> {{ $report->description }} </th>
</tr>

                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection

