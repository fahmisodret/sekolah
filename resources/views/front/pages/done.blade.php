@extends('front.layout.index')
@section('css')
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="col-md-12 pt-3 pb-3">
                        </table>
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center" style="border: none;">
                                <h4>Success!</h4>
                                <span><a href="{{route('home')}}" class="btn btn-danger">Kembali</a></span>
                            </li>
                        </ul>
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Order No.
                                <span>{{$data->code}}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Produk Name.
                                <span>{{$data->produk->name}}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Qty.
                                <span>{{$data->qty}} pcs</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Total.
                                <span>Rp.{{number_format($data->total, 0, '.', '.')}}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
@endsection
