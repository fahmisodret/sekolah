@extends('front.layout.index')
@section('css')
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="row mlr-0 mb-5 mt-5 bg-white">
                    <div class="col-md-12">
                        <h3>Peserta Didik</h3>
                        <div class="undertitle-l bg-info"></div>
                    </div>
                </div>
                <div class="row mlr-0 mb-5 mt-5 bg-white">
                    <div class="col-lg-6 b-t-2">
                        <div class="card borderless bg-transparent">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-5">
                                        <img class="w-100" src="{{asset("image/user.jpg")}}">
                                    </div>
                                    <div class="col-md-7">
                                        <div class="rounded bg-white">
                                            <h6 class="font-weight-bold">Gandor</h6>
                                            <div class="undertitle-l bg-info"></div>
                                            <p class="font-italic text-muted mb-2">
                                                <code>
                                                    NISN : 00000-0000-0000<br/>
                                                    Tempat Lahir : Magelang<br/>
                                                </code>
                                            </p>
                                        </div>
                                    </div>
                                </div>
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
