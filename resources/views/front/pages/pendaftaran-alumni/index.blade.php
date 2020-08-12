@extends('front.layout.index')
@section('css')
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="row mlr-0 mb-5 mt-5 bg-white">
                    <div class="col-md-12">
                        <h3>Pendaftaran Alumni</h3>
                        <div class="undertitle-l bg-info"></div>
                    </div>
                </div>
                <div class="row mlr-0 mb-5 mt-5 bg-white">
                    <div class="col-md-12 b-t-2">
                        <h5 class="mt-3">Form Alumni</h5>
                        <div class="undertitle-l bg-info"></div>
                        {!! Form::open(['url' => '/front/create_alumni', 'class' => 'form-horizontal', 'files' => true]) !!}
                            @include ('admin.alumni.form', ['formMode' => 'create'])
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
            @include('front.sidebar')

        </div>
    </div>
@endsection
@section('js')
@endsection
