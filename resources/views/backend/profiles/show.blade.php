@extends('backend.layouts.master')

@section('title', 'profiles Details')

@section('content')
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="row">
                    <div class="col-md-6">Show profiles</div>
                    <div class="col-md-6 text-right">
                        <a href="{{ route('profiles.index') }}" class="btn btn-sm btn-outline-primary">List</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <tbody>
                        <tr>
    <th>Profile Picture</th>
<th>@if(file_exists(storage_path().'/app/public/profiles/'.$profile->image ) && (!is_null($profile->image)))
                                <img src="{{ asset('storage/profiles/'.$profile->image) }}" height="100">
                            @else
                                <img src="{{ asset('/default-avatar.png') }}">
                            @endif
                        </th>
</tr>
                        <tr>
                            <th>Name</th>
                            <th>{{ $profile->name }}</th>
                        </tr>
                        <tr>
                            <th>Department</th>
                            <th>{{ $profile->department }}</th>
                        </tr>
                      <tr>
                        <th>Batch No</th>
                        <th>{{$profile->batch_id}}</th>
                      </tr>
<tr>
    <th>Graduation Year</th>
    <th>{{$profile->graduation_year}}</th>
</tr>
<tr>
    <th>Email Address</th>
    <th>{{$profile->email}}</th>
</tr>
<tr>
    <th>Phone Number</th>
    <th>{{$profile->phone}}</th>
</tr>
<tr><th>Address</th>
<th>{{$profile->address}}</th></tr>

                    </tbody>
                </table>
                
            </div>
        </div>

    </div>
@endsection

