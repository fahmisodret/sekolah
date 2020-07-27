@extends('front.layout.index')
@section('css')
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="row mlr-0 mb-5 mt-5 bg-white">
                    <div class="col-md-12">
                        <h3>Video</h3>
                        <div class="undertitle-l bg-info"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="row mlr-0 mb-5 mt-5 bg-white">
                    <div class="col-md-12">
                        <div class="card borderless bg-transparent">
                            <div class="card-body">
                                <div class="row">
                                    <img class="w-100" src="{{asset("image/user.jpg")}}">
                                    <div class="rounded bg-white">
                                        <div class="text-center">
                                            <h5>Dr.Soejhono</h5>
                                            <h6 class="text-muted">-Kepala Sekolah-</h6>
                                        </div>
                                        <p class="font-italic text-muted mb-2">Libero nunc consequat interdum varius sit. Nunc pulvinar sapien et ligula ullamcorper malesuada proin libero nunc bairuka. Vulputate enim nulla aliquet porttitor. Eget duis at tellus at urna condimentum mattis. Ut tellus elementum sagittis vitae nam aliquam.</p>
                                    </div>
                                    <a href="" class="btn btn-block btn-light">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr/>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-header bg-white">
                            <h3>Tautan</h3>
                            <div class="undertitle-l bg-info"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="list-group">
                                    <a href="" class="list-group-item list-group-item-action">Cras justo odio asli</a>
                                    <a href="" class="list-group-item list-group-item-action">Dapibus ac aso kan</a>
                                    <a href="" class="list-group-item list-group-item-action">Morbi leo risusi</a>
                                    <a href="" class="list-group-item list-group-item-action">Porta ac roso</a>
                                    <a href="" class="list-group-item list-group-item-action bg-light">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr/>
                <div class="row">
                    <div class="col-md-12">
                        <div>
                            <h3>Berlangganan</h3>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <form class="form-inline my-2 my-lg-0">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Email Address" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2"><i class="fa fa-envelope"></i></span>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <hr/>
                <div class="row mlr-0 mb-5 bg-white">
                    <div class="col-md-12">
                        <div class="card borderless bg-transparent">
                            <div class="card-body">
                                <div class="row">
                                    <div>
                                        <h3>Iklan</h3>
                                        <div class="undertitle-l bg-info"></div>
                                    </div>
                                    <img class="w-100" src="{{asset("image/produk.jpg")}}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
@endsection
