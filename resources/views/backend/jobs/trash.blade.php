@extends('backend.layouts.master')

@section('title', 'profiles')

@section('content')
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="row">
                    <div class="col-md-6">Campus News (Trash)</div>
                    <div class="col-md-6 text-right">
                        <a href="{{ route('jobs.index') }}" class="btn btn-sm btn-outline-primary">List</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    {{--                id="dataTable"--}}
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>SL#</th>
                            <th>Job Title</th>
                            <th>Position</th>
                            <th>Company Name</th>
                            <th>Location Name</th>
                            <th>Job Type</th>
                            <th style="width: 230px; text-align: center;">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(session()->has('status'))
                            <div class="alert alert-success">
                                <p>{{ session('status') }}</p>
                            </div>
                        @endif
                        @foreach($jobs as $job)
                            <tr>
                                <td>{{ ++$sl }}</td>
                                <td>{{ $job->title }}</td>
                                <td>{{ $job->position }}</td>
                                <td>{{ $job->company_name }}</td>
<td>{{ $job->location }}</td>
                                <td>{{ $job->job_type }}</td>

                                <td>
                                    <a href="{{ route('jobs.show_trash', $job->id) }}" class="btn btn-sm btn-outline-info">Show</a>

                                    {!! Form::open([
                                           'route' => ['jobs.restore_trash', $job->id],
                                           'method' => 'put',
                                           'style' => 'display:inline'
                                    ]) !!}
                                        <button type="submit" class="btn btn-sm btn-outline-warning" onclick="return confirm('Are You Sure Want To Restore?')">Restore</button>
                                    {!! Form::close() !!}

                                    {!! Form::open([
                                           'route' => ['jobs.delete_trash', $job->id],
                                           'method' => 'delete',
                                           'style' => 'display:inline'
                                    ]) !!}
                                    <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are You Sure Want To Delete Permanently?')">Delete</button>
                                    {!! Form::close() !!}

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $jobs->links() }}
            </div>
        </div>

    </div>
@endsection

