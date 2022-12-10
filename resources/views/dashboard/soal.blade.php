@extends('dashboard.layouts.main')

@section('container')
<div class="content-wrapper pb-1">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Daftar Soal</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <!-- /.row -->
        <section class="connectedSortable">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title text-secondary mt-1">
                  Soal
                </h3>
                <a href="#" class="btn btn-success btn-sm float-right" data-toggle="modal" data-target="#exampleModal">Tambahkan Soal</a>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                  <!-- Morris chart - Sales -->
                  <div class="chart tab-pane active" id="revenue-chart" style="position: relative">
                       <table class="table">
                        <thead class="thead">
                          <tr>
                            <th scope="col">Tipe Soal</th>
                            <th scope="col">Dibuat</th>
                            <th scope="col">Pemilik</th>
                            <th scope="col">Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Psikologi 1</td>
                            <td>10 Agustus 2022</td>
                            <td>johanesronaldo@gmail.com</td>
                            <td>
                                <a href="#" class="btn btn-warning">Edit</a>
                                <a href="#" class="btn btn-danger">Hapus</a>
                            </td>
                          </tr>
                          <tr>
                            <td>Psikologi 2</td>
                            <td>09 Agustus 2022</td>
                            <td>maguire@gmail.com</td>
                            <td>
                                <a href="#" class="btn btn-warning">Edit</a>
                                <a href="#" class="btn btn-danger">Hapus</a>
                            </td>
                          </tr>
                          <tr>
                            <td>Psikologi 3</td>
                            <td>08 Agustus 2022</td>
                            <td>spongebob@gmail.com</td>
                            <td>
                                <a href="#" class="btn btn-warning">Edit</a>
                                <a href="#" class="btn btn-danger">Hapus</a>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                   </div>
                </div>
              </div><!-- /.card-body -->
            </div>
        </section>
    </section>
    <!-- /.content -->
  </div>
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Soal</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form>
                <div class="form-group">
                    <label for="exampleInputPaketSoal">Judul Paket Soal</label>
                    <input type="text" class="form-control" id="exampleInputPaketSoal">
                </div>
              </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          <a type="button" class="btn btn-primary" href="/addsoal">Simpan</a>
        </div>
      </div>
    </div>
  </div>
@endsection('container')
