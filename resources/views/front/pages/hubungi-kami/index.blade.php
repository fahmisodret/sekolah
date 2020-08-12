@extends('front.layout.index')
@section('css')
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="row mlr-0 mb-5 mt-5 bg-white">
                    <div class="col-md-12">
                        <div class="card borderless bg-transparent">
                            <div class="card-body">
                                <div class="text-center">
                                    <h3>TENTANG KAMI</h3>
                                </div>
                                {!!setting('map')!!}
                                {{-- {!! Form::open(['url' => '#', 'class' => 'form-horizontal', 'files' => true]) !!} --}}
                                <form class="form-horizontal" action="#" method="GET">
                                    <div class="form-group{{ $errors->has('nama') ? 'has-error' : ''}}">
                                        {!! Form::label('nama', 'Nama', ['class' => 'control-label']) !!}
                                        {!! Form::text('nama', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
                                        {!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
                                    </div>
                                    <div class="form-group{{ $errors->has('email') ? 'has-error' : ''}}">
                                        {!! Form::label('email', 'Email', ['class' => 'control-label']) !!}
                                        {!! Form::text('email', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
                                        {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
                                    </div>
                                    <div class="form-group{{ $errors->has('url') ? 'has-error' : ''}}">
                                        {!! Form::label('url', 'Url', ['class' => 'control-label']) !!}
                                        {!! Form::text('url', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
                                        {!! $errors->first('url', '<p class="help-block">:message</p>') !!}
                                    </div>
                                    <div class="form-group{{ $errors->has('message') ? 'has-error' : ''}}">
                                        {!! Form::label('message', 'Pesan', ['class' => 'control-label']) !!}
                                        {!! Form::textarea('message', null, ('' == 'required') ? ['class' => 'form-control editors', 'required' => 'required'] : ['class' => 'form-control editors']) !!}
                                        {!! $errors->first('message', '<p class="help-block">:message</p>') !!}
                                    </div>

                                    <div class="form-group">
                                        {!! Form::submit('Create', ['class' => 'btn btn-primary']) !!}
                                    </div>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('front.sidebar')

        </div>
    </div>
@endsection
@section('js')
@endsection
