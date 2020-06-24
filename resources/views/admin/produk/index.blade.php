@extends('admin.layout.index')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 card">
            <div class="card-body">
                <h3 class="box-title">Data Produk</h3>
                <a href="{{url("admin/produk/create")}}" class="btn btn-success btn-sm">Tambah</a> 
                <hr style="margin: 10px 0 15px 0">
                {{-- <table class="table table-bordered data-table"> --}}
                <div class="col-md-12">
                    <table class="table table-hover table-striped data-table" id="table_produk">
                        <thead>
                          <tr>
                            {{-- <th>No</th> --}}
                            <th>Code</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
    <script type="text/javascript">
      $(function () {
        var table = $('.data-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('admin.produk.index') }}",
            columns: [
                // {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {data: 'code', name: 'code'},
                {data: 'name', name: 'name'},
                {data: 'price', name: 'price'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
        });
      });
    </script>
@endsection
