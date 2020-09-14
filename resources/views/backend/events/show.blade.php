@extends('backend.layouts.master')

@section('title', 'Event Details')

@section('content')
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="row">
                    <div class="col-md-6">Show Event</div>
                    <div class="col-md-6 text-right">
                        <a href="{{ route('events.index') }}" class="btn btn-sm btn-outline-primary">Event List</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <tbody>
                        <tr>
    
                        <tr>
                            <th>Event Name</th>
                            <th>{{ $event->name }}</th>
                        </tr>
                        
                     

<tr>
    <th>Event Place</th>
<th>{{$event->place}}</th>
</tr>

<tr>
    <th>Event Date</th>
<th>{{$event->date}}</th>
</tr>

                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection

