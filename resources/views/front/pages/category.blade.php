@extends('front.layout.index')
@section('css')
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="row mlr-0 mb-5 mt-5 bg-white">
                    <div class="col-md-12">
                        <h3>Uncategorized</h3>
                        <div class="undertitle-l bg-info"></div>
                    </div>
                </div>
                <div class="row mlr-0 mb-5 mt-5 bg-white">
                    <div class="col-md-12">
                        <div class="card borderless bg-transparent">
                            <div class="card-body">
                                <div class="text-center">
                                    <h3>{{$category->title}}</h3>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <img class="w-100" src="{{$category->image_url}}">
                                    </div>
                                    <div class="col-md-12">
                                        {!!$category->content!!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mlr-0 mb-5 mt-5 bg-white">
                    <?php $no=1; ?>
                    @foreach($categories as $item)
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
                                                <p class="font-italic text-muted mb-2">{!!Str::limit(strip_tags($item->content), 200)!!}</p>
                                            </div>
                                            <a href="{{route('category', ['pg'=>$item->slug])}}" class="btn btn-sm btn-primary pull-right">
                                                <i class="fa fa-search"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="pagination-wrapper"> {!! $categories->appends(['pg' => Request::get('pg')])->render() !!} </div>
            </div>
            @include('front.sidebar')
        </div>
    </div>
@endsection
@section('js')
@endsection
