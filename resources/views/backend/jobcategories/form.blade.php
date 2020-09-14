<div class="form-row">
    <div class="col-md-6 mb-3">

        {{ Form::label('title', 'Title') }}


        {{ Form::text('title', null, [
            'class' => $errors->has('title') ?  'form-control is-invalid': 'form-control',
            'placeholder' => 'Enter Title.....',
            'id' => 'title'
        ]) }}
        @error('title')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>


   

   

<div class="col-md-12 mb-3">
        {{ Form::label('description', 'Description') }}


        {{ Form::textarea('description', null, [
            'class' => $errors->has('description') ?  'form-control is-invalid': 'form-control',
            'placeholder' => 'Enter Description Here.....',
            'id' => 'description',
            'rows'=>'3'
        ]) }}
        @error('description')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>





</div>




