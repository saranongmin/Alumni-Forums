@extends('backend.layouts.master')

@section('title', 'profiles Details')

@section('content')
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="row">
                    <div class="col-md-6">View Community profiles</div>
                    <div class="col-md-6 text-right">
                        <a href="{{ route('garos.index') }}" class="btn btn-sm btn-outline-primary">Garo Community List</a>
                    </div>
                </div>
            </div>


            <div class="p-4">
               
                @if(file_exists(storage_path().'/app/public/garos/'.$garo->image ) && (!is_null($garo->image)))
                    <img src="{{ asset('storage/garos/'.$garo->image) }}" height="100">
                @else
                    <img src="{{ asset('/default-avatar.png') }}">
                @endif
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <tbody>



                        <tr>
                            <th>Name</th>
                            <th>{{ $garo->name }}</th>
                        </tr>
                        
                      <tr>
                        <th>University</th>
                        <th>{{$garo->university}}</th>
                    </tr>
                    <tr>
                            <th>Department</th>
                            <th>{{ $garo->department }}</th>
                        </tr>

                        <tr>
    <th>Graduation Year</th>
   <th>{{ $garo->graduation_year }}</th>
</tr>
<tr>
    <th>Email Address</th>
    <th>{{ $garo->email }}</th>
</tr>
<tr>
    <th>Phone Number</th>
    <th>{{ $garo->phone }}</th>
</tr>
<tr><th>Company Name</th>
    <th>{{ $garo->company_name }}</th>
</tr> 
<tr><th>Position Name</th>
    <th>{{ $garo->position }}</th>
</tr>
<tr><th>Company Location</th>
    <th>{{ $garo->company_location }}</th>
</tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection

