<div class="form-row">

    <div class="col-md-12 mb-3">
        {{ Form::label('image', ' Image') }}<br>

        {{ Form::file('image', ['accept'=>'image/*'], [
            'class' => $errors->has('image') ?  'form-control is-invalid': 'form-control',
            'id' => 'image'
        ]) }}
        @error('image')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>



    <div class="col-md-12 mb-3">

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

 <div class="col-md-12 mb-3">
        {{ Form::label('university', 'University') }}


        {{ Form::text('university', null, [
            'class' => $errors->has('university') ?  'form-control is-invalid': 'form-control',
            'placeholder' => 'Enter Department...',
            'id' => 'university'
        ]) }}
        @error('university')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-md-12 mb-3">
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
<div class="col-md-12 mb-3">
        {{ Form::label('graduation_year', 'Graduation Year') }}


        {{ Form::date('graduation_year', null, [
            'class' => $errors->has('graduation_year') ?  'form-control is-invalid': 'form-control',
            'placeholder' => 'Enter Graduation year...',
            'id' => 'graduation_year'
        ]) }}
        @error('graduation_year')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>


    <div class="col-md-12 mb-3">
        {{ Form::label('email', 'Email ') }}


        {{ Form::text('email', null, [
            'class' => $errors->has('email') ?  'form-control is-invalid': 'form-control',
            'placeholder' => 'Enter email...',
            'id' => 'email'
        ]) }}
        @error('email')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
     <div class="col-md-12 mb-3">
        {{ Form::label('phone', 'Phone Number') }}


        {{ Form::text('phone', null, [
            'class' => $errors->has('phone') ?  'form-control is-invalid': 'form-control',
            'placeholder' => 'Enter phone...',
            'id' => 'phone'
        ]) }}
        @error('phone')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    




 <div class="col-md-12 mb-3">
        {{ Form::label('company_name', 'Company  Name ') }}


        {{ Form::text('company_name', null, [
            'class' => $errors->has('company_name') ?  'form-control is-invalid': 'form-control',
            'placeholder' => 'Enter company_name...',
            'id' => 'company_name'
        ]) }}
        @error('company_name')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    
<div class="col-md-12 mb-3">
        {{ Form::label('position', 'Position ') }}


        {{ Form::text('position', null, [
            'class' => $errors->has('position') ?  'form-control is-invalid': 'form-control',
            'placeholder' => 'Enter position...',
            'id' => 'position'
        ]) }}
        @error('position')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    
    <div class="col-md-12 mb-3">
        {{ Form::label('company_location', 'Company Location ') }}


        {{ Form::text('company_location', null, [
            'class' => $errors->has('company_location') ?  'form-control is-invalid': 'form-control',
            'placeholder' => 'Enter company_location...',
            'id' => 'company_location'
        ]) }}
        @error('company_location')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
</div>







