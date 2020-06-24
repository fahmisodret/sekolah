@extends('admin.layout.index')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 card">
            <div class="card-body">
                <h3 class="box-title">Edit Order</h3>
                <hr style="margin: 10px 0 15px 0">
                <form name="form-soal" method="POST" class="form-horizontal" enctype="multipart/form-data" action="{{ url('/admin/order/update/'.$data->id) }}">
                    {{ csrf_field() }}
                    <div class="box-body">
                        <div class="form-group">
                            <label for="name" class="col-md-6 control-label">Code : <b>{{$data->code}}<b></label>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-md-6 control-label">Produk : <b>{{$data->produk->name}}<b></label>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-md-6 control-label">Qty : <b>{{$data->qty}}<b></label>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-md-6 control-label">Total : <b>Rp.{{number_format($data->total, 0, '.', '.')}}<b></label>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-md-6 control-label">Name</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="name" placeholder="name" value="{{$data->name}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="phone" class="col-sm-6 control-label">Phone</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="phone" placeholder="phone" value="{{$data->phone}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address" class="col-sm-6 control-label">Address</label>
                            <div class="col-sm-6">
                                <textarea class="form-control" name="address" placeholder="address" rows="4">{{$data->address}}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <div id="wrap-btn">
                                    <a href="{{ url('/admin/order')}}" class="btn btn-danger">Kembali</a>
                                    <button type="submit" class="btn btn-info" id="btnSimpan">Simpan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
