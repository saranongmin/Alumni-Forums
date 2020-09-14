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





</div>




