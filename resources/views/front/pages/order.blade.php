@extends('front.layout.index')
@section('css')
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="col-md-12 pt-3 pb-3">
                        <h4>Order Information</h4>
                        <p>{{$data->code}} - {{$data->name}}</p>
                        <p class="card-text">Rp.{{number_format($data->price, 0, '.', '.')}}</p>
                        <p class="card-text">Qty 1 pcs</p>
                        <hr/>
                        <h4>Customer Information</h4>
                        <form name="form-soal" method="POST" class="form-horizontal col-sm-6 pl-0 pr-0" enctype="multipart/form-data" action="{{ route('done', $data->code) }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="name" class="control-label">Name</label>
                                <input type="text" class="form-control" name="name" placeholder="name">
                            </div>
                            <div class="form-group">
                                <label for="phone" class="control-label">phone</label>
                                <input type="text" class="form-control" name="phone" placeholder="phone">
                            </div>
                            <div class="form-group">
                                <label for="address" class="control-label">Address</label>
                                <textarea class="form-control" name="address" placeholder="address" rows="4"></textarea>
                            </div>
                            <button class="btn btn-success btn-block">Beli</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
@endsection
