@extends('dashboard.layouts.main')

@section('container')
<div class="content-wrapper pb-1">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Pengguna</h1>
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
                  Daftar Pengguna
                </h3>
                <a href="#" class="btn btn-success btn-sm float-right" data-toggle="modal" data-target="#ModalTambah">Tambahkan Pengguna</a>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                  <!-- Morris chart - Sales -->
                  <div class="chart tab-pane active" id="revenue-chart" style="position: relative">
                       <table class="table">
                        <thead class="thead">
                          <tr>
                            <th scope="col">Nama</th>
                            <th scope="col">Dibuat</th>
                            <th scope="col">Email</th>
                            <th scope="col">Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Johanes Ronaldo</td>
                            <td>10 Agustus 2022</td>
                            <td>johanesronaldo@gmail.com</td>
                            <td>
                                <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#ModalEdit">Edit</a>
                                <a href="#" class="btn btn-danger">Hapus</a>
                            </td>
                          </tr>
                          <tr>
                            <td>Harry Maguire</td>
                            <td>09 Agustus 2022</td>
                            <td>maguire@gmail.com</td>
                            <td>
                                <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#ModalEdit">Edit</a>
                                <a href="#" class="btn btn-danger">Hapus</a>
                            </td>
                          </tr>
                          <tr>
                            <td>Mr. Squarepants</td>
                            <td>08 Agustus 2022</td>
                            <td>spongebob@gmail.com</td>
                            <td>
                                <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#ModalEdit">Edit</a>
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
  <div class="modal fade" id="ModalTambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Pengguna</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form method="POST" action="{{ route('register') }}">
                <div class="form-group">
                    <label for="exampleInputName">Nama Lengkap</label>
                    <input type="text" class="form-control" id="exampleInputName" value="{{ old('name') }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Alamat Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ old('email') }}">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" value="{{ old('password') }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPlace">Tempat Lahir</label>
                    <input type="text" class="form-control" id="exampleInputPlace" value="{{ old('kota') }}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputTanggal">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="exampleInputTanggal" value="{{ old('tanggal') }}">
                  </div>
              </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          <button type="button" class="btn btn-primary">Simpan</button>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="ModalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Pengguna</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form>
                <div class="form-group">
                    <label for="exampleInputName">Nama Lengkap</label>
                    <input type="text" class="form-control" id="exampleInputName">
                  </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Alamat Email</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="form-group">
                    <label for="exampleInputPlace">Tempat Lahir</label>
                    <input type="text" class="form-control" id="exampleInputPlace">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputTanggal">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="exampleInputTanggal">
                  </div>
              </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          <button type="button" class="btn btn-primary">Simpan</button>
        </div>
      </div>
    </div>
  </div>
@endsection('container')
