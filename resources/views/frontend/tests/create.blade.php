<div class="form-row">
<div class="col-md-6 mb-3">
	{{Form::open(['route'=>'tests.store'])}}
     @csrf

    {{Form::label('name','Name:')}}
    {{Form::text('name',null,[

        'class'=>$errors->has('title')? 'form-control is-invalid':
        'form-control',
        'placeholder'=>'Enter your Name',
        'id'=>'name',
        ])}}
        @error('name')
        <div class="text-danger">{{$message}}</div>
        @enderror


    </div>

    <div class="col-md-6 mb-3">
    

    {{Form::label('email','Email:')}}
    {{Form::text('email',null,[

        'class'=>$errors->has('email')? 'form-control is-invalid':
        'form-control',
        'placeholder'=>'Enter your Email',
        'id'=>'email',
        ])}}
        @error('email')
        <div class="text-danger">{{$message}}</div>
        @enderror


    </div>
<div class="col-md-6 mb-3">
     
    {{Form::label('department','Department')}}
    {{Form::select('department',[
           'C'=>'CSE',
           'S'=>'SWE',
           'B'=>'BBA',
           'E'=>'ENG',
        ],null,[
        'placeholer'=>'Department Selection',
        'class'=>$errors->has('department')? 'form-control is-invalid':
        'form-control',
        ])}}
        @error('department')
        <div class="text-danger">{{$message}}</div>
        @enderror


    </div>


<div class="col-md-6 mb-3">

{{Form::label('gender','Gender',
['class'=>'pr-3 col-form-label text-right'



])}}
<strong>Male</strong>
{{Form::radio('gender','Male',true)}}<br>
<strong>FEMale</strong>

{{Form::radio('gender','Female',false)}}

@error('gender')
<div class="text-danger">{{$message}}</div>
@enderror
</div>

<div class="col-md-6 mb-3">
    {{Form::label('age','Age')}}
    {{Form::number('age','value')}}
    @error('age')
    <div class="text-danger">{{$message}}</div>
    @enderror
</div> 


<!-- <div class="col-md-6 mb-3">
    {{Form::label('date','Date')}}
    {{Form::date('date',\Carbon\Carbon::now())}}
    @error('date')
    <div class="text-danger">{{$message}}</div>
    @enderror
</div>


<div class="col-md-6 mb-3">
    {{Form::label('image','Image')}}
    {{Form::file('image')}}
    @error('image')
    <div class="text-danger">{{$message}}</div>
    @enderror
</div> 
<div class="col-md-6 mb-3">
    {{Form::label('description','Description')}}
    {{Form::textarea('description',null,[

'placeholder'=>'Description Box',
'rows'=>'10',
'cols'=>'15',
'class'=>'form-control',
    ])}}
    @error('description')
    <div class="text-danger">{{$message}}</div>
    @enderror
</div> 

<div class="col-md-6 mb-3">
    {{Form::label('description','Description')}}
    <strong>True</strong>
    {{Form::checkbox('description',true)}}
<strong>False</strong>
        {{Form::checkbox('description',false)}}

    @error('description')
    <div class="text-danger">{{$message}}</div>
    @enderror
</div> 
 -->
   {{Form::button('Submit Form',[

'class'=>'btn btn-primary',
'type'=>'submit',
   ])}}


	{{Form::close()}}
</div>
