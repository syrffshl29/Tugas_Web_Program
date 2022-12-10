@extends('dashboard.layouts.main')

@section('container')
<div class="content-wrapper pb-1">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Psikolog</h1>
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
                  Daftar Psikolog
                </h3>
                <a href="#" class="btn btn-success btn-sm float-right" data-toggle="modal" data-target="#ModalTambah">Tambahkan Psikolog</a>
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
                            <td>Harry Maguire</td>
                            <td>09 Agustus 2022</td>
                            <td>maguire@gmail.com</td>
                            <td>
                                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#ModalProfil">Lihat</a>
                                <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#ModalEdit">Edit</a>
                                <a href="#" class="btn btn-danger">Hapus</a>
                            </td>
                          </tr>
                          <tr>
                            <td>Mr. Squarepants</td>
                            <td>08 Agustus 2022</td>
                            <td>spongebob@gmail.com</td>
                            <td>
                                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#ModalProfil">Lihat</a>
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
  <!-- Modal Tambah Psikolog -->
  <div class="modal fade" id="ModalTambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Psikolog</h5>
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
                <div class="form-group">
                    <label for="exampleInputNomorInduk">Nomor Induk Psikolog</label>
                    <input type="number" class="form-control" id="exampleInputNomorInduk">
                </div>
                <div class="form-group">
                    <label for="exampleInputBio">Deskripsi Psikolog</label>
                    <input type="text" class="form-control" id="exampleInputBio">
                </div>
                <div class="form-grup">
                    <label for="exampleInputPic">Input Foto Psikolog</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="contohupload2">
                        <label class="custom-file-label" for="contohupload2">Pilih Gambar</label>
                    </div>
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
<!-- Modal Profil Psikolog -->
<div class="modal fade" id="ModalProfil" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Profil Psikolog</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body row">
            <div class="col-md-auto">
                <img src="data:image/jpeg;base64,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" alt="" class="img-circle" height="150" width="150">
            </div>
            <div class="col">
                <h5>Harry Maguire</h5>
                <h6>Nganjuk, 12 Desember 1992</h6>
                <h6>3557899978</h6>
                <p class="text-justify">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        </div>
        </div>
    </div>
    </div>
<!-- Modal Edit Psikolog -->
<div class="modal fade" id="ModalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Psikolog</h5>
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
                <div class="form-group">
                    <label for="exampleInputNomorInduk">Nomor Induk Psikolog</label>
                    <input type="number" class="form-control" id="exampleInputNomorInduk">
                </div>
                <div class="form-group">
                    <label for="exampleInputBio">Deskripsi Psikolog</label>
                    <input type="text" class="form-control" id="exampleInputBio">
                </div>
                <div class="form-grup">
                    <label for="exampleInputPic">Input Foto Psikolog</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="contohupload2">
                        <label class="custom-file-label" for="contohupload2">Pilih Gambar</label>
                    </div>
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
