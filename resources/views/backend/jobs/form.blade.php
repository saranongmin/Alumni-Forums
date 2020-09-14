<div class="form-row">
    <div class="col-md-6 mb-3">

        {{ Form::label('title', 'Job Title') }}


        {{ Form::text('title', null, [
            'class' => $errors->has('title') ?  'form-control is-invalid': 'form-control',
            'placeholder' => 'Enter Job Title.....',
            'id' => 'title'
        ]) }}
        @error('title')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>


   

   

<div class="col-md-6 mb-3">
        {{ Form::label('position', 'Position') }}


        {{ Form::text('position', null, [
            'class' => $errors->has('description') ?  'form-control is-invalid': 'form-control',
            'placeholder' => 'Enter Position Here.....',
            'id' => 'position',
            
        ]) }}
        @error('position')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

<div class="col-md-6 mb-3">
        {{ Form::label('company_name', 'Company Name') }}


        {{ Form::text('company_name', null, [
            'class' => $errors->has('company_name') ?  'form-control is-invalid': 'form-control',
            'placeholder' => 'Enter Company Name ',
            'id' => 'company_name',
            
        ]) }}
        @error('company_name')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>


<div class="col-md-6 mb-3">
        {{ Form::label('location', 'Location name') }}


        {{ Form::text('location', null, [
            'class' => $errors->has('location') ?  'form-control is-invalid': 'form-control',
            'placeholder' => 'Enter location Here.....',
            'id' => 'location',
            
        ]) }}
        @error('location')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>


<div class="col-md-6 mb-3">
        {{ Form::label('job_type', 'Job type name') }}


        {{ Form::text('job_type', null, [
            'class' => $errors->has('job_type') ?  'form-control is-invalid': 'form-control',
            'placeholder' => 'Enter Job type Here.....',
            'id' => 'job_type',
            
        ]) }}
        @error('job_type')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>




</div>




