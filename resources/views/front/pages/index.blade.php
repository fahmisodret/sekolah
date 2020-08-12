@extends('front.layout.index')
@section('css')
@endsection
@section('content')
    {{-- carousel --}}
    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                @for($i=1;$i<=$slider->count();$i++)
                    @if($i==1)
                        <li data-target="#carouselExampleIndicators" data-slide-to="{{($i-1)}}" class="active"></li>
                    @else
                        <li data-target="#carouselExampleIndicators" data-slide-to="{{($i-1)}}"></li>
                    @endif
                @endfor
            </ol>
            <div class="carousel-inner">
                @foreach($slider as $item)
                    @if($loop->first)
                        <div class="carousel-item active">
                            <img src="{{$item->image_url}}" class="d-block w-100" style="max-height: 500px; overflow-y: scroll;" alt="https://sdnwindusari2mgl.sch.id/wp-content/uploads/2020/02/IMG-20200211-WA0081.jpg">
                            <div class="carousel-caption d-none d-md-block">
                            <h3>{{$item->title}}</h3>
                            <p>{{$item->message}}</p>
                            <a href="" class="btn btn-outline-white m-2">Info Selengkapnya</a>
                            </div>
                        </div>
                    @else
                        <div class="carousel-item">
                            <img src="{{$item->image_url}}" class="d-block w-100" style="max-height: 500px; overflow-y: scroll;" alt="https://sdnwindusari2mgl.sch.id/wp-content/uploads/2020/02/IMG-20200211-WA0081.jpg">
                            <div class="carousel-caption d-none d-md-block">
                            <h3>{{$item->title}}</h3>
                            <p>{{$item->message}}</p>
                            <a href="" class="btn btn-outline-white m-2">Info Selengkapnya</a>
                            </div>
                        </div>
                    @endif
                @endforeach
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
                                            <p class="font-italic text-muted mb-2">{{Facades\Services\SettingService::get('about')['value']}}</p>
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
                                            @foreach($kegiatan as $item)
                                                @if($loop->first)
                                                    <a class="nav-link mb-3 p-3 shadow active" id="v-pills-{{strtolower(Str::snake($item->title))}}-tab" data-toggle="pill" href="#v-pills-drumband" role="tab" aria-controls="v-pills-{{strtolower(Str::snake($item->title))}}" aria-selected="true">
                                                        <i class="{{$item->icon}} mr-2"></i>
                                                        <span class="font-weight-bold small text-uppercase">{{$item->title}}</span>
                                                    </a>
                                                @else
                                                    <a class="nav-link mb-3 p-3 shadow" id="v-pills-{{strtolower(Str::snake($item->title))}}-tab" data-toggle="pill" href="#v-pills-{{strtolower(Str::snake($item->title))}}" role="tab" aria-controls="v-pills-pramuka" aria-selected="false">
                                                        <i class="{{$item->icon}} mr-2"></i>
                                                        <span class="font-weight-bold small text-uppercase">{{$item->title}}</span>
                                                    </a>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="tab-content" id="v-pills-tabContent">
                                            @foreach($kegiatan as $item)
                                                @if($loop->first)
                                                    <div class="tab-pane fade shadow rounded bg-white show active p-5" id="v-pills-{{strtolower(Str::snake($item->title))}}" role="tabpanel" aria-labelledby="v-pills-{{strtolower(Str::snake($item->title))}}-tab">
                                                        <h4 class="font-italic mb-4">{{$item->title}}</h4>
                                                        <p class="font-italic text-muted mb-2">{{$item->keterangan}}</p>
                                                    </div>
                                                @else
                                                    <div class="tab-pane fade shadow rounded bg-white show p-5" id="v-pills-{{strtolower(Str::snake($item->title))}}" role="tabpanel" aria-labelledby="v-pills-{{strtolower(Str::snake($item->title))}}-tab">
                                                        <h4 class="font-italic mb-4">{{$item->title}}</h4>
                                                        <p class="font-italic text-muted mb-2">{{$item->keterangan}}</p>
                                                    </div>
                                                @endif
                                            @endforeach
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
                                    @foreach($instansi as $item)
                                        <div class="col-md-2">
                                            <img class="w-100" src="{{$item->image_url}}">
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mlr-0 mb-5 mt-5 bg-white">
                    <?php $no=1; ?>
                    @foreach($category as $item)
                        <div class="col-md-12 b-t-2">
                            <button class="btn btn-warning pull-left">{{$no++}}</button>
                            <div class="card borderless bg-transparent">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <img class="w-100" src="{{$item->image_url}}">
                                        </div>
                                        <div class="col-md-10">
                                            <div class="rounded bg-white">
                                                <h6 class="font-weight-bold">{{$item->title}}</h6>
                                                <p class="font-italic text-muted mb-2">{!!Str::limit($item->content, 250)!!}</p>
                                            </div>
                                            <a href="" class="btn btn-sm btn-primary pull-right">
                                                <i class="fa fa-search"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            @include('front.sidebar')
        </div>
    </div>
@endsection
@section('js')
@endsection
