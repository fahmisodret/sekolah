@extends('front.layout.index')
@section('css')
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Produk</div>
                    <div class="card-body">
                        @foreach($produk as $data)
                        <div class="card col-md-3">
                            <div class="card-header" style="background: transparent;"></div>
                            <img class="card-img-top" src="{{asset('image/produk.jpg')}}" alt="Card image cap">
                            <div class="card-body p-0 pt-2 pb-3">
                                <h5 class="card-title"><span>{{$data->name}}</span></h5>
                                <p class="card-text">Rp.{{number_format($data->price, 0, '.', '.')}}</p>
                                <a href="{{route('order', $data->code)}}" class="btn btn-success btn-block">Beli</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
@endsection
