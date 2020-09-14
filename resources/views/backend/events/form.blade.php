
<div class="form-row">
    <div class="col-md-12 mb-3">
        {{ Form::label('name', 'Event Name') }}

        {{ Form::text('name', null, [
            'class' => $errors->has('name') ?  'form-control is-invalid': 'form-control',
            'placeholder' => 'Enter Event name Here.....',
            'id' => 'name'
        ]) }}
        @error('name')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
</div>


<div class="form-row">
    <div class="col-md-12 mb-3">
        {{ Form::label('place', 'Event Placement') }}<br>
         {{ Form::text('place', null, [
            'class' => $errors->has('place') ?  'form-control is-invalid': 'form-control',
            'placeholder' => ' Event place.....',
            'id' => 'place'
        ]) }}
        @error('name')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
</div>


<div class="form-row">
    <div class="col-md-12 mb-3">
        {{ Form::label('date', 'Event Date') }}<br>


        {{ Form::date('date', null, [
            'class' => $errors->has('date') ?  'form-control is-invalid': 'form-control',
          'placeholder' => 'Enter Event date  .....',
            'id' => 'date'
        ]) }}
    </div>
    @error('date')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>



