@extends('frontend.layouts.master')

@section('title', 'Job Apply')

@section('content')
<section class="job-area relative" id="home" style="height:500px">
    <div class="overlay overlay-bg"></div>
    <div class="container">
     <div class="row fullscreen d-flex align-items-center justify-content-center">
       <div class="job-content col-lg-12"></div>
                                            </div>
                    </div>
                    </section>

<div class="container-fluid" style="margin-top: 30px">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-md-12">Apply with your online resume, create new resume for the job, or make a custom application. </div>
                <div class="col-md-6 text-right">
                    
                </div>
            </div>
        </div>
        
            {{ Form::open(['route'=> 'customs.store']) }}
           
               

        <div class="form-row">
    <div class="col-md-6 mb-3" style="margin-left: 30px">
        {{ Form::label('name', 'Name ') }}<br>

        {{ Form::text('name', null, [
            'class' => $errors->has('name') ?  'form-control is-invalid': 'form-control',
            'id' => 'name'
        ]) }}
        @error('name')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="form-row">
<div class="col-md-6 mb-3" style="margin-left: 30px">
        {{ Form::label('email', 'Email') }}


        {{ Form::text('email', null, [
            'class' => $errors->has('email') ?  'form-control is-invalid': 'form-control',
            
            'id' => 'email',
            
        ]) }}
        @error('email')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
</div>



<div class="form-row">
    <div class="col-md-6 mb-3" style="margin-left: 30px">

{{ Form::label('message', 'Message') }}


        {{ Form::textarea('message', null, [
            'class' => $errors->has('message') ?  'form-control is-invalid': 'form-control',
            'id' => 'message',
            'rows' => '4',
            'placeholder'=>''

            
        ]) }}
    </div>
    @error('message')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
 {{ Form::button('Submit ', [
                    'class' => 'btn btn-primary',
                    'type' => 'submit',
                ]) }}
            {{ Form::close() }}
        


    </div>
</div>
@endsection
