@extends('backend.layouts.master')

@section('title', 'Profile Edit')

@section('content')
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="row">
                    <div class="col-md-6">Edit Profile</div>
                    <div class="col-md-6 text-right">

                    </div>
                </div>
            </div>
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    {{ Form::model($user, [
                        'route' => ['users.update', $user->id],
                        'method' => 'put',
                        'files' => true
                    ]) }}
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            {{--        <label for="title">Title</label>--}}
                            {{ Form::label('name', 'Name') }}

                            {{ Form::text('name', null, [
                                'class' => $errors->has('name') ?  'form-control is-invalid': 'form-control',
                                'placeholder' => 'Enter Name Here.....',
                                'id' => 'name'
                            ]) }}
                            @error('name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                   

                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                        {{ Form::label('email', 'Email') }}
                           
                             {{ Form::text('email', null, [
                                'class' => $errors->has('email') ?  'form-control is-invalid': 'form-control',
                                'placeholder' => 'Enter email Here.....',
                                'id' => 'email'
                            ]) }}
                        </div>
                        @error('email')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>


                  <div class="form-row">
                        <div class="col-md-12 mb-3">
                        {{ Form::label('role', 'Role') }}
                           
                             {{ Form::text('name', $user->role->name, [
                                'class' => $errors->has('name') ?  'form-control is-invalid': 'form-control',
                                'placeholder' => 'Enter email Here.....',
                                'id' => 'name'
                            ]) }}
                        </div>
                        @error('name')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    {{ Form::button('Update Profile', [
                        'type' => 'submit',
                        'class' => 'btn btn-primary'
                    ]) }}
                    {{ Form::close() }}

            </div>
        </div>
    </div>
@endsection
