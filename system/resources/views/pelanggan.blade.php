@extends('admin/base')

@section('content')

<!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Pelanggan Kopi Kopi</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Pelanggan</th>
                    <th>Produk</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>Zainal</td>
                    <td>Kopi Kintamani
                    </td>
                  </tr>
                  <tr>
                    <td>Udin</td>
                    <td>Aceh Gayo
                    </td>
                  </tr>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->


@endsection