@extends('front.layout.index')
@section('css')
@endsection
@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Home</div>
                    <div class="card-body">
                        Your application's Home.
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
@endsection
