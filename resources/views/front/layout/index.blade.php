<!DOCTYPE html>
<html class="v2" dir="ltr" xmlns="http://www.w3.org/1999/xhtml" xmlns:b="http://www.google.com/2005/gml/b" xmlns:data="http://www.google.com/2005/gml/data" xmlns:expr="http://www.google.com/2005/gml/expr" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('front.layout.head')
<body style="background: #eaf3ff;">
    <div id="app">
        {{-- <nav class="navbar navbar-expand navbar-light bg-primary">
            <div class="container">
                <ul class="navbar-nav list-inline ml-auto">
                    <li class="list-inline-item">
                        <a href="https://www.facebook.com/acmethemes/" target=""><i class="fa fa-facebook text-white"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://twitter.com/acme_themes" target=""><i class="fa fa-twitter text-white"></i></a></li>
                    <li class="list-inline-item">
                        <a href="https://www.linkedin.com/company/acmethemes" target=""><i class="fa fa-linkedin text-white"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://plus.google.com/u/1/+AcmeThemes" target=""><i class="fa fa-google-plus text-white"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://www.instagram.com/acmethemes/" target="_blank"><i class="fa fa-instagram text-white"></i></a>
                    </li>
                </ul>
            </div>
        </nav> --}}
        <nav class="navbar sticky-top navbar-expand-lg navbar-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand text-primary" href="#" style="font-weight: bold"><img src="{{asset('image/logo.png')}}" width="30" height="30" class="d-inline-block align-top w-100" alt=""></a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-3 mb-lg-3">
                    @foreach($frontMenus->menus as $item)
                        @foreach($item->items as $menu)
                            @if(isset($menu->hasSub) && $menu->hasSub == true)
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        {{$menu->title}}
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        @foreach($menu->subs as $sub)
                                            <a class="dropdown-item" href="{{$sub->url}}">{{$sub->title}}</a>
                                        @endforeach
                                    </div>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a class="nav-link" href="{{$menu->url}}">{{$menu->title}} <span class="sr-only">(current)</span></a>
                                </li>
                            @endif
                        @endforeach
                    @endforeach
                </ul>
                {{-- <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form> --}}
            </div>
        </nav>
        <main class="py-4">
            <div class="container">
                @if (Session::has('flash_message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ Session::get('flash_message') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                @if (count($errors) > 0)
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger alert-dismissible fade show" id="formMessage" role="alert">
                            {{ $error }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endforeach
                @endif
            </div>
            @yield('content')
        </main>
        <div class="row mlr-0 bg-dark">
            <div class="col-md-12">
                <div class="card borderless bg-transparent text-white">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="">
                                    <h3>Tentang Kami</h3>
                                </div>
                                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Mauris pharetras et ultrices neque ornare aenean euismod elementum nisi...</span>
                            </div>
                            <div class="col-md-3">
                                <div class="">
                                    <h3>Informasi</h3>
                                </div>
                                <ul>
                                    <li><i class="fa fa-phone"></i> Kontak Kami : 021-xxxx-xxxx</li>
                                    <li><i class="fa fa-envelope"></i> Email : sekolah@sekolah.com</li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <div class="">
                                    <h3>Tentang Kami</h3>
                                </div>
                                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Mauris pharetras et ultrices neque ornare aenean euismod elementum nisi...</span>
                            </div>
                            <div class="col-md-3">
                                <div class="">
                                    <h3>Informasi</h3>
                                </div>
                                <ul>
                                    <li><i class="fa fa-phone"></i> Kontak Kami : 021-xxxx-xxxx</li>
                                    <li><i class="fa fa-envelope"></i> Email : sekolah@sekolah.com</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('front.layout.script')
</body>
</html>