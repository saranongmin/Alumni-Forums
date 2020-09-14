<div class="form-row">
    <div class="col-md-12 mb-3">
        {{ Form::label('name', 'Name') }}


        {{ Form::text('name', null, [
            'class' => $errors->has('name') ?  'form-control is-invalid': 'form-control',
            'placeholder' => 'Enter Tag  Name Here.....',
            'id' => 'name'
        ]) }}
        @error('name')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
</div>



{{--title, description, category_id, is_active--}}
