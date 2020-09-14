
@extends('frontend.layouts.master')

@section('title', 'Job Apply')

@section('content')
<!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<!-- <div class="overlay overlay-bg"></div>	 -->
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-between">
						<div class="banner-content col-lg-9 col-md-12">
							<h1 class="text-uppercase">
								Alumni are the heart of University		
							</h1>
							
						</div>										
					</div>
				</div>					
			</section>
			<!-- End banner Area -->

<div class="container-fluid" style="margin-top: 30px">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-md-12">Click here for registration in alumni Member.</div>
                <div class="col-md-6 text-right">
                    
                </div>
            </div>
        </div>
        
            {{ Form::open(['route'=> 'aprofiles.store']) }}



<div class="form-row">
    
 <div class="col-md-12 mb-3">
        {{ Form::label('image', 'Profile Image') }}<br>

        {{ Form::file('image', null, [
            'class' => $errors->has('image') ?  'form-control is-invalid': 'form-control',
            'id' => 'image'
        ]) }}
        @error('image')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-md-6 mb-3">

        {{ Form::label('name', 'Name') }}


        {{ Form::text('name', null, [
            'class' => $errors->has('name') ?  'form-control is-invalid': 'form-control',
            'placeholder' => 'Enter Name.....',
            'id' => 'name'
        ]) }}
        @error('name')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>


    <div class="col-md-6 mb-3">
        {{ Form::label('department', 'Department') }}


        {{ Form::text('department', null, [
            'class' => $errors->has('department') ?  'form-control is-invalid': 'form-control',
            'placeholder' => 'Enter Department...',
            'id' => 'department'
        ]) }}
        @error('department')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-md-6 mb-3">
        {{ Form::label('batch_id', 'Batch Id') }}


        {{ Form::text('batch_id', null, [
            'class' => $errors->has('batch_id') ?  'form-control is-invalid': 'form-control',
            'placeholder' => 'Enter Batch No.....',
            'id' => 'batch_id'
        ]) }}
        @error('batch_id')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

<div class="col-md-6 mb-3">
        {{ Form::label('graduation_year', 'Graduation Year') }}


        {{ Form::date('graduation_year', null, [
            'class' => $errors->has('graduation_year') ?  'form-control is-invalid': 'form-control',
            'placeholder' => 'Enter Graduation Year....',
            'id' => 'graduation_year'
        ]) }}
        @error('graduation_year')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

<div class="col-md-6 mb-3">
        {{ Form::label('email', 'Email') }}


        {{ Form::text('email', null, [
            'class' => $errors->has('email') ?  'form-control is-invalid': 'form-control',
            'placeholder' => 'Enter Email Address....',
            'id' => 'email'
        ]) }}
        @error('email')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>


<div class="col-md-6 mb-3">
        {{ Form::label('phone', 'Phone') }}


        {{ Form::text('phone', null, [
            'class' => $errors->has('phone') ?  'form-control is-invalid': 'form-control',
            'placeholder' => 'Enter Phone Number.....',
            'id' => 'phone'
        ]) }}
        @error('phone')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

<div class="col-md-12 mb-3">
        {{ Form::label('address', 'Address') }}


        {{ Form::textarea('address', null, [
            'class' => $errors->has('address') ?  'form-control is-invalid': 'form-control',
            'placeholder' => 'Enter Address Here.....',
            'id' => 'address',
            'rows'=>'3'
        ]) }}
        @error('address')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>


{{ Form::button('Submit ', [
                    'class' => 'btn btn-primary',
                    'type' => 'submit',
                ]) }}
            {{ Form::close() }}


</div>



@endsection
