@extends('backend.layouts.master')

@section('title', 'jobcategory Edit')

@section('content')
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="row">
                    <div class="col-md-6">Edit news</div>
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
                {{ Form::model($jobcategory, [
                    'route' => ['jobcategories.update', $jobcategory->id],
                    'method' => 'put'
                ]) }}
                    @include('backend.jobcategories.form')

                    {{ Form::button('Submit form', [
                        'type' => 'submit',
                        'class' => 'btn btn-primary'
                    ]) }}
                </form>
                {{ Form::close() }}

            </div>
        </div>
    </div>
@endsection
