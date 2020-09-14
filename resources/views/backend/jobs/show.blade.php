@extends('backend.layouts.master')

@section('title', 'Job Details')

@section('content')
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="row">
                    <div class="col-md-6">Show Job Details</div>
                    <div class="col-md-6 text-right">
                        <a href="{{ route('jobs.index') }}" class="btn btn-sm btn-outline-primary">Job List</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <th>Job Title</th>
                            <th>{{ $job->title }}</th>
                        </tr>
                        
                     
<tr>
    <th>Position Name</th>
<th>{{$job->position}}</th>
</tr>
<tr>
    <th>Company Name</th>
<th>{{$job->company_name}}</th>
</tr>

<tr>
    <th>Location Name</th>
<th>{{$job->location}}</th>
</tr>
<tr>
    <th>Job Type</th>
<th>{{$job->job_type}}</th>
</tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection

