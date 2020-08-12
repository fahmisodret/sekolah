@extends('front.layout.index')
@section('css')
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="row mlr-0 mb-5 mt-5 bg-white">
                    <div class="col-md-12">
                        <h3>Foto</h3>
                        <div class="undertitle-l bg-info"></div>
                    </div>
                </div>
                <div class="row mlr-0 mb-5 mt-5 bg-white">
                    <div class="col-md-12">
                        <div class="card borderless">
                            <div class="card-body">
                                <div class="">
                                    <h3>Foto Galery</h3>
                                </div>
                                <div class="row">
                                    <?php $foto = App\Foto::latest()->paginate(12);?>
                                    @foreach($foto as $item)
                                        <div class="col-md-3">
                                            <img class="w-100" src="{{$item->image_url}}">
                                        </div>
                                    @endforeach
                                </div><br/>
                                <div class="pagination-wrapper pull-right"> {!! $foto->render() !!} </div>
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
