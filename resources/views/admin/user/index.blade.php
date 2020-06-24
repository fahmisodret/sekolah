@extends('admin.layout.index')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 card">
            <div class="card-body">
                <div class="col-md-6">
                    <h3 class="box-title">Data User</h3>
                </div>
                <hr style="margin: 10px 0 15px 0">
                <table class="table table-hover table-striped" id="table_user">
                    <thead>
                      <tr>
                        <th>name</th>
                        <th>phone</th>
                        <th>email</th>
                        <th>role</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                        @if(count($kel) <= 0)
                        <tr>
                            <td colspan="4"><caption>Data Kosong</caption></td>
                        <tr>
                        @endif
                        @foreach($kel as $item)
                        <tr>
                            <td>{{$item->name}}{!!($item->id == Auth::id())?'<b>(Me)</b>':''!!}</td>
                            <td>{{$item->phone}}</td>
                            <td>{{$item->email}}</td>
                            <td>{{($item->role == 1)?'Admin':'Superuser'}}</td>
                            <td><div style="text-align:center">
                                <a href="{{url("admin/user/edit/".$item->id)}}" class="btn btn-warning btn-xs">Ubah</a> 
                                <a href="{{url("admin/user/destroy/".$item->id)}}" class="btn btn-danger btn-xs">Hapus</a> 
                                <a href="{{url("admin/user/verif/".$item->id)}}" class="btn btn-info btn-xs">{{($item->status == 0)?'Verify':'disable'}}</a> 
                            </div></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
