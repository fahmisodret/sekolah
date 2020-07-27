@extends('front.layout.index')
@section('css')
@endsection
@section('content')
    {{-- carousel --}}
    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="https://sdnwindusari2mgl.sch.id/wp-content/uploads/2020/02/IMG-20200211-WA0081.jpg" class="d-block w-100" style="max-height: 500px; overflow-y: scroll;" alt="{{asset('image/produk.jpg')}}">
              <div class="carousel-caption d-none d-md-block">
                <h3> SD Negeri 1 </h3>
                <p>Selamat datang di website resmi SD Negeri 1, media komunikasi dan informasi pihak sekolah dengan siswa terpadu.</p>
                <a href="" class="btn btn-outline-white m-2">Info Selengkapnya</a>
              </div>
            </div>
            <div class="carousel-item">
              <img src="https://sdnwindusari2mgl.sch.id/wp-content/uploads/2020/02/IMG-20200211-WA0081.jpg" class="d-block w-100" style="max-height: 500px; overflow-y: scroll;" alt="{{asset('image/produk.jpg')}}">
              <div class="carousel-caption d-none d-md-block">
                <h3> SD Negeri 1 </h3>
                <p>Selamat datang di website resmi SD Negeri 1, media komunikasi dan informasi pihak sekolah dengan siswa terpadu.</p>
                <a href="" class="btn btn-outline-white m-2">Info Selengkapnya</a>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
    </div>
    <div class="container">
        {{-- <div class="row mt-n5 mb-5">
            <div class="card col-md-2 bg-info text-white text-center offset-md-1 mb-2">
                <div class="card-body p-0 pt-3 pb-3">
                    <h5 class="card-title"><span>Unggul</span></h5>
                    <p class="card-text">Mencetak generasi yang unggul dalam ilmu, keterampilan dan akhlak</p>
                </div>
            </div>
            <div class="card col-md-2 bg-info text-white text-center offset-md-2 mb-2">
                <div class="card-body p-0 pt-3 pb-3">
                    <h5 class="card-title"><span>Kreatif</span></h5>
                    <p class="card-text">Menumbuhkan pola pikir yang kreatif dalam diri siswa</p>
                </div>
            </div>
            <div class="card col-md-2 bg-info text-white text-center offset-md-2 mb-2">
                <div class="card-body p-0 pt-3 pb-3">
                    <h5 class="card-title"><span>Inovatif</span></h5>
                    <p class="card-text">Mengembangkan model pembelajaran yang inovatif</p>
                </div>
            </div>
        </div> --}}
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
                                        <img class="w-100" src="{{asset('image/produk.jpg')}}">
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
                                                <p class="font-italic text-muted mb-2">Kegiatan ekstrakulikuler drumband merupakan bentuk kegiatan yang dilakukan oleh beberapa orang ataupun kelompok yang memainkan satu atau beberapa lagu dengan menggunakan sejumlah kombinasi alat musik secara bersama – sama. Tujuan adanya ektrakulikuler drumband ialah untuk memberikan pemahaman dan keterampilan dalam bermain musik yang diselaraskan dengan alat musik lain sehingga mampu tercipta suatu harmonisasi yang padu.</p>
                                            </div>
                                            <div class="tab-pane fade shadow rounded bg-white show p-5" id="v-pills-pramuka" role="tabpanel" aria-labelledby="v-pills-pramuka-tab">
                                                <h4 class="font-italic mb-4">Pramuka</h4>
                                                <p class="font-italic text-muted mb-2">Kegiatan ektrakulikuler pramuka di lingkup sekolah dasar biasa disebut dengan pramuka siaga, karena anggotanya berumur antara 7 – 10 tahun. Kegiatan pramuka ini bertujuan untuk membentuk kepribadian dan akhlak dalam diri siswa, menanamkan semangat cinta tanah air dan meningkatkan keterampilan. Pada tingkatan pramuka siaga, kegiatan pramuka dikemas dengan menarik dan menyenangkan.</p>
                                            </div>
                                            <div class="tab-pane fade shadow rounded bg-white show p-5" id="v-pills-senam" role="tabpanel" aria-labelledby="v-pills-senam-tab">
                                                <h4 class="font-italic mb-4">Senam</h4>
                                                <p class="font-italic text-muted mb-2">Kegiatan Senam setiap hari sabtu, seluruh murid dikumpulkan di lapangan dan diadakan senam pagi pukul 07:00 - 08:00.</p>
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
                                        <img class="w-100" src="{{asset('image/produk.jpg')}}">
                                    </div>
                                    <div class="col-md-2">
                                        <img class="w-100" src="{{asset('image/produk.jpg')}}">
                                    </div>
                                    <div class="col-md-2">
                                        <img class="w-100" src="{{asset('image/produk.jpg')}}">
                                    </div>
                                    <div class="col-md-2">
                                        <img class="w-100" src="{{asset('image/produk.jpg')}}">
                                    </div>
                                    <div class="col-md-2">
                                        <img class="w-100" src="{{asset('image/produk.jpg')}}">
                                    </div>
                                    <div class="col-md-2">
                                        <img class="w-100" src="{{asset('image/produk.jpg')}}">
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
                                        <img class="w-100" src="{{asset('image/produk.jpg')}}">
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
                                        <img class="w-100" src="{{asset('image/produk.jpg')}}">
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
                                        <img class="w-100" src="{{asset('image/produk.jpg')}}">
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
            <div class="col-md-3">
                <div class="row mlr-0 mb-5 mt-5 bg-white">
                    <div class="col-md-12">
                        <div class="card borderless bg-transparent">
                            <div class="card-body">
                                <div class="row">
                                    <img class="w-100" src="{{asset('image/user.jpg')}}">
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
                                    <img class="w-100" src="{{asset('image/produk.jpg')}}">
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
