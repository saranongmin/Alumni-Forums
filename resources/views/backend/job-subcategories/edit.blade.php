@extends('backend.layouts.master')

@section('title', 'Sub Category Edit')

@section('content')
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="row">
                    <div class="col-md-6">Edit Sub Category</div>
                    <div class="col-md-6 text-right">
                        <a href="{{ route('jobcategories.index') }}" class="btn btn-sm btn-outline-primary">List</a>
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
                {{ Form::model($JobSubcategory, [
                    'route' => ['job-subcategories.update', $JobSubcategory->id],
                    'method' => 'put',
                     'files' => true,
                ]) }}
]
                    @include('backend.job-subcategories.form')
                    {{ Form::button('Submit form', [
                        'type' => 'submit',
                        'class' => 'btn btn-primary'
                    ]) }}
                {{ Form::close() }}

            </div>
        </div>
    </div>
@endsection
