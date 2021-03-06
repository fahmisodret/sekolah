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
                                <div class="row">
                                    <div class="col-md-9">
                                        <div class="rounded bg-white">
                                            <p class="font-italic text-muted mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Mauris pharetras et ultrices neque ornare aenean euismod elementum nisi. Sagittis purus sit amet volutpat consequat mauris. Non arcu risus quis varius quam quisque id diam. Libero nunc consequat interdum varius sit. Nunc pulvinar sapien et ligula ullamcorper malesuada proin libero nunc bairuka. Vulputate enim nulla aliquet porttitor. Eget duis at tellus at urna condimentum mattis. Ut tellus elementum sagittis vitae nam aliquam.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <img class="w-100" src="{{asset("image/produk.jpg")}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mlr-0 mb-5 mt-5 bg-white">
                    <div class="col-md-12">
                        <div class="card borderless">
                            <div class="card-body">
                                <div class="text-center">
                                    <h3>KEGIATAN</h3>
                                    <div class="undertitle bg-info"></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <!-- Tabs nav -->
                                        <div class="nav flex-column nav-pills nav-pills-custom" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                            <a class="nav-link mb-3 p-3 shadow active" id="v-pills-drumband-tab" data-toggle="pill" href="#v-pills-drumband" role="tab" aria-controls="v-pills-drumband" aria-selected="true">
                                                <i class="fa fa-user-circle-o mr-2"></i>
                                                <span class="font-weight-bold small text-uppercase">Drumband</span>
                                            </a>
                                            <a class="nav-link mb-3 p-3 shadow" id="v-pills-pramuka-tab" data-toggle="pill" href="#v-pills-pramuka" role="tab" aria-controls="v-pills-pramuka" aria-selected="false">
                                                <i class="fa fa-calendar-minus-o mr-2"></i>
                                                <span class="font-weight-bold small text-uppercase">Pramuka</span>
                                            </a>
                                            <a class="nav-link mb-3 p-3 shadow" id="v-pills-senam-tab" data-toggle="pill" href="#v-pills-senam" role="tab" aria-controls="v-pills-senam" aria-selected="false">
                                                <i class="fa fa-calendar-minus-o mr-2"></i>
                                                <span class="font-weight-bold small text-uppercase">Senam</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="tab-content" id="v-pills-tabContent">
                                            <div class="tab-pane fade shadow rounded bg-white show active p-5" id="v-pills-drumband" role="tabpanel" aria-labelledby="v-pills-drumband-tab">
                                                <h4 class="font-italic mb-4">Drumband</h4>
                                                <p class="font-italic text-muted mb-2">Libero nunc consequat interdum varius sit. Nunc pulvinar sapien et ligula ullamcorper malesuada proin libero nunc bairuka. Vulputate enim nulla aliquet porttitor. Eget duis at tellus at urna condimentum mattis. Ut tellus elementum sagittis vitae nam aliquam.</p>
                                            </div>
                                            <div class="tab-pane fade shadow rounded bg-white show p-5" id="v-pills-pramuka" role="tabpanel" aria-labelledby="v-pills-pramuka-tab">
                                                <h4 class="font-italic mb-4">Pramuka</h4>
                                                <p class="font-italic text-muted mb-2">Libero nunc consequat interdum varius sit. Nunc pulvinar sapien et ligula ullamcorper malesuada proin libero nunc bairuka. Vulputate enim nulla aliquet porttitor. Eget duis at tellus at urna condimentum mattis. Ut tellus elementum sagittis vitae nam aliquam.</p>
                                            </div>
                                            <div class="tab-pane fade shadow rounded bg-white show p-5" id="v-pills-senam" role="tabpanel" aria-labelledby="v-pills-senam-tab">
                                                <h4 class="font-italic mb-4">Senam</h4>
                                                <p class="font-italic text-muted mb-2">Libero nunc consequat interdum varius sit. Nunc pulvinar sapien et ligula ullamcorper malesuada proin libero nunc bairuka. Vulputate enim nulla aliquet porttitor. Eget duis at tellus at urna condimentum mattis. Ut tellus elementum sagittis vitae nam aliquam.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mlr-0 mb-5 mt-5 bg-white">
                    <div class="col-md-12">
                        <div class="card borderless">
                            <div class="card-body">
                                <div class="">
                                    <h3>Instansi Terkait</h3>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <img class="w-100" src="{{asset("image/produk.jpg")}}">
                                    </div>
                                    <div class="col-md-2">
                                        <img class="w-100" src="{{asset("image/produk.jpg")}}">
                                    </div>
                                    <div class="col-md-2">
                                        <img class="w-100" src="{{asset("image/produk.jpg")}}">
                                    </div>
                                    <div class="col-md-2">
                                        <img class="w-100" src="{{asset("image/produk.jpg")}}">
                                    </div>
                                    <div class="col-md-2">
                                        <img class="w-100" src="{{asset("image/produk.jpg")}}">
                                    </div>
                                    <div class="col-md-2">
                                        <img class="w-100" src="{{asset("image/produk.jpg")}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mlr-0 mb-5 mt-5 bg-white">
                    <div class="col-md-12 b-t-2">
                        <button class="btn btn-warning pull-left">1</button>
                        <div class="card borderless bg-transparent">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-2">
                                        <img class="w-100" src="{{asset("image/produk.jpg")}}">
                                    </div>
                                    <div class="col-md-10">
                                        <div class="rounded bg-white">
                                            <h6 class="font-weight-bold">HALAL BI HALAL</h6>
                                            <p class="font-italic text-muted mb-2">Nunc pulvinar sapien et ligula ullamcorper malesuada proin libero nunc bairuka. Vulputate enim nulla aliquet porttitor. Eget duis at tellus at urna condimentum mattis. Ut tellus elementum sagittis vitae nam aliquam.</p>
                                        </div>
                                        <a href="" class="btn btn-sm btn-primary pull-right">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 b-t-2">
                        <button class="btn btn-warning pull-left">2</button>
                        <div class="card borderless bg-transparent">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-2">
                                        <img class="w-100" src="{{asset("image/produk.jpg")}}">
                                    </div>
                                    <div class="col-md-10">
                                        <div class="rounded bg-white">
                                            <h6 class="font-weight-bold">PRAMUKA</h6>
                                            <p class="font-italic text-muted mb-2">Nunc pulvinar sapien et ligula ullamcorper malesuada proin libero nunc bairuka. Vulputate enim nulla aliquet porttitor. Eget duis at tellus at urna condimentum mattis. Ut tellus elementum sagittis vitae nam aliquam.</p>
                                        </div>
                                        <a href="" class="btn btn-sm btn-primary pull-right">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 b-t-2">
                        <button class="btn btn-warning pull-left">3</button>
                        <div class="card borderless bg-transparent">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-2">
                                        <img class="w-100" src="{{asset("image/produk.jpg")}}">
                                    </div>
                                    <div class="col-md-10">
                                        <div class="rounded bg-white">
                                            <h6 class="font-weight-bold">UPACARA</h6>
                                            <p class="font-italic text-muted mb-2">Nunc pulvinar sapien et ligula ullamcorper malesuada proin libero nunc bairuka. Vulputate enim nulla aliquet porttitor. Eget duis at tellus at urna condimentum mattis. Ut tellus elementum sagittis vitae nam aliquam.</p>
                                        </div>
                                        <a href="" class="btn btn-sm btn-primary pull-right">
                                            <i class="fa fa-search"></i>
                                        </a>
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
