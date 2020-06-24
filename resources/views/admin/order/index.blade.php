@extends('admin.layout.index')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 card">
            <div class="card-body">
                <h3 class="box-title">Data Order</h3>
                <hr style="margin: 10px 0 15px 0">
                {{-- <table class="table table-bordered data-table"> --}}
                <div class="col-md-12">
                    <table class="table table-hover table-striped data-table" id="table_produk">
                        <thead>
                          <tr>
                            {{-- <th>No</th> --}}
                            <th>Code</th>
                            <th>Produk</th>
                            <th>Total Order</th>
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
            ajax: "{{ route('admin.order.index') }}",
            columns: [
                {data: 'code', name: 'code'},
                {data: 'produk.name', name: 'produk'},
                {data: 'total', name: 'total'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
        });
      });
    </script>
@endsection
