@extends('admin.layout.index')

@section('content')
<div class="col-md-12 card">
  <div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Edit User</h3>
        <hr/>
    </div>
    <div class="box-body">
        <hr style="margin: 10px 0 15px 0">
        <form name="form-soal" method="POST" class="form-horizontal" id="formSoal" action="{{ url('/admin/user/update/'.$data->id) }}">
            {{ csrf_field() }}
            <div class="box-body">
                <div class="form-group">
                    <label for="name" class="col-md-4 control-label">Name</label>
                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="name" value="{{$data->name}}" required autocomplete="name" autofocus>
                    </div>
                </div>

                <div class="form-group">
                    <label for="phone" class="col-md-4 control-label">Phone</label>

                    <div class="col-md-6">
                        <input id="phone" type="text" class="form-control" name="phone" value="{{$data->phone}}" required autocomplete="phone" autofocus>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <div id="wrap-btn">
                            <a href="{{ url('/admin/user')}}" class="btn btn-danger">Kembali</a>
                            <button type="submit" class="btn btn-info" id="btnSimpan">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
