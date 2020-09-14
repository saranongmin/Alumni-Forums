@extends('backend.layouts.master')

@section('title', 'profiles')

@section('content')
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="row">
                    <div class="col-md-6">Profile (Trash)</div>
                    <div class="col-md-6 text-right">
                        <a href="{{ route('profiles.index') }}" class="btn btn-sm btn-outline-primary">List</a>
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
                            <th>Name</th>
                            <th>Department</th>
                            <th style="width: 230px; text-align: center;">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(session()->has('status'))
                            <div class="alert alert-success">
                                <p>{{ session('status') }}</p>
                            </div>
                        @endif
                        @foreach($profiles as $profile)
                            <tr>
                                <td>{{ ++$sl }}</td>
                                <td>{{ $profile->name }}</td>
                                <td>{{ $profile->department }}</td>
                                <td>
                                    <a href="{{ route('profiles.show_trash', $profile->id) }}" class="btn btn-sm btn-outline-info">Show</a>

                                    {!! Form::open([
                                           'route' => ['profiles.restore_trash', $profile->id],
                                           'method' => 'put',
                                           'style' => 'display:inline'
                                    ]) !!}
                                        <button type="submit" class="btn btn-sm btn-outline-warning" onclick="return confirm('Are You Sure Want To Restore?')">Restore</button>
                                    {!! Form::close() !!}

                                    {!! Form::open([
                                           'route' => ['profiles.delete_trash', $profile->id],
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
                {{ $profiles->links() }}
            </div>
        </div>

    </div>
@endsection

