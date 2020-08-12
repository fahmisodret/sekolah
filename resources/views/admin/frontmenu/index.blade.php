@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Menu</div>
                    <div class="card-body">
                        <a href="{{ url('/admin/front/menu/create') }}" class="btn btn-success btn-sm" title="Add New Menu">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <hr/>
                            <span>File json <b>{{base_path('resources\\laravel-admin\\front.json')}}</b></span>
                        <hr/>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Url</th>
                                        <th>HasSub</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($menu->menus[0]->items as $index => $item)
                                    <tr>
                                        <td>{{ $index }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->url }}</td>
                                        <td>{{ (isset($item->hasSub) && $item->hasSub)?'yes':'no' }}</td>
                                        <td>
                                            <a href="{{ url('/admin/front/menu/' . $index . '/edit') }}" title="Edit Menu"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                                            {!! Form::open([
                                                'method' => 'DELETE',
                                                'url' => ['/admin/front/menu', $index],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {{-- {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i>', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-sm',
                                                        'title' => 'Delete Menu',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!} --}}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
