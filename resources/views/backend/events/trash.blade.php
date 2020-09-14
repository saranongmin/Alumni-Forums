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
                        <a href="{{ route('events.index') }}" class="btn btn-sm btn-outline-primary">List</a>
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
                            <th>Title</th>
                            <th>Time</th>
                            <th>Date</th>
                            <th style="width: 230px; text-align: center;">Action</th>
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
                                <td>{{ $event->title }}</td>
                                <td>{{ $event->time }}</td>
                                <td>{{ $event->date }}</td>

                                <td>
                                    <a href="{{ route('events.show_trash', $event->id) }}" class="btn btn-sm btn-outline-info">Show</a>

                                    {!! Form::open([
                                           'route' => ['events.restore_trash', $event->id],
                                           'method' => 'put',
                                           'style' => 'display:inline'
                                    ]) !!}
                                        <button type="submit" class="btn btn-sm btn-outline-warning" onclick="return confirm('Are You Sure Want To Restore?')">Restore</button>
                                    {!! Form::close() !!}

                                    {!! Form::open([
                                           'route' => ['events.delete_trash', $event->id],
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
                {{ $events->links() }}
            </div>
        </div>

    </div>
@endsection

