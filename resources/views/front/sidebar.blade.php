            <div class="col-md-3">
                <?php $kepsek = App\Karyawan::where('is_show', 1)->first(); ?>
                @if($kepsek)
                    <div class="row mlr-0 mb-5 mt-5 bg-white">
                        <div class="col-md-12">
                            <div class="card borderless bg-transparent">
                                <div class="card-body">
                                    <div class="row">
                                        <img class="w-100" src="{{$kepsek->image_url}}">
                                        <div class="rounded bg-white">
                                            <div class="text-center">
                                                <h5>{{$kepsek->name}}</h5>
                                                <h6 class="text-muted">-{{$kepsek->grade}}-</h6>
                                            </div>
                                            <p class="font-italic text-muted mb-2">{!!$kepsek->message!!}</p>
                                        </div>
                                        <a href="" class="btn btn-block btn-light">Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr/>
                @endif
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-header bg-white">
                            <h3>Tautan</h3>
                            <div class="undertitle-l bg-info"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="list-group">
                                    @foreach(App\Tautan::limit(4)->get() as $item)
                                        <a href="{{$item->url}}" target="_blank" class="list-group-item list-group-item-action">{{$item->title}}</a>
                                    @endforeach
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
                                    <img class="w-100" src="{{App\Iklan::first()->image_url}}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
