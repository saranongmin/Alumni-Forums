@extends('backend.layouts.master')

@section('title', 'Profile')

@section('content')
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="row">
                    <div class="col-md-6">Profile</div>
                    <div class="col-md-6 text-right">
                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-outline-primary">Edit Profile</a>
                    </div>
                </div>
            </div>
            <div class="card-body">

               <!--  @if(file_exists(storage_path().'/app/public/users/'.$user->userprofile->picture) && (!is_null($user->userprofile->picture)))
                    <img src="{{ asset('storage/users/'.$user->userprofile->picture) }}" height="100">
                @else
                    <img src="{{ asset('/default-avatar.png') }}">
                @endif -->

                <table class="table table-striped">
                    <tbody>
                    <tr>
                        <th>Name</th>
                        <th>{{ $user->name }}</th>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <th>{{ $user->email }}</th>
                    </tr>
                    
                    <!-- <tr>
                        <th>Facebook</th>
                        <th>{{ $user->userprofile->facebook_url }}</th>
                    </tr>
                    <tr>
                        <th>Bio</th>
                        <th>{{ $user->userprofile->bio }}</th>
                    </tr> -->
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection

