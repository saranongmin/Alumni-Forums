@extends('backend.layouts.master')

@section('title', 'Community Create')

@section('content')
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-md-6">Create Community</div>
                <div class="col-md-6 text-right">
                    <a href="{{ route('garos.index') }}" class="btn btn-sm btn-outline-primary">List</a>
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
            {{ Form::open(['route'=> 'garos.store']) }}
@include('backend.garos.form')

                {{ Form::button('Save', [
                    'class' => 'btn btn-primary',
                    'type' => 'submit',
                ]) }}
               
            {{ Form::close() }}
        </div>
    </div>
</div>
@endsection
