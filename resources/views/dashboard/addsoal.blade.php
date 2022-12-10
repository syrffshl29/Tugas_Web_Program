@extends('dashboard.layouts.main')

@section('container')
<div class="content-wrapper pb-1">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tambahkan Isi Paket Soal</h1>
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
                  Judul Paket Soal
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
                            <th scope="col">No.</th>
                            <th scope="col">Jenis Soal</th>
                            <th scope="col">Dibuat</th>
                            <th scope="col">Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>Pilih Gambar</td>
                            <td>10 Agustus 2022</td>
                            <td>
                                <a href="#" class="btn btn-warning">Edit</a>
                                <a href="#" class="btn btn-danger">Hapus</a>
                            </td>
                          </tr>
                          <tr>
                            <td>2</td>
                            <td>Pilih Profesi</td>
                            <td>10 Agustus 2022</td>
                            <td>
                                <a href="#" class="btn btn-warning">Edit</a>
                                <a href="#" class="btn btn-danger">Hapus</a>
                            </td>
                          </tr>
                          <tr>
                            <td>3</td>
                            <td>Setuju & Tidak Setuju</td>
                            <td>10 Agustus 2022</td>
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
                <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Pilih Jenis Soal</label>
                <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                    <option selected>Pilih...</option>
                    <option value="1">Pilih Gambar</option>
                    <option value="2">Pilih Profesi</option>
                    <option value="3">Setuju & Tidak Setuju</option>
                </select>
                <div class="form-group">
                    <label for="exampleInputPertanyaan">Pertanyaan</label>
                    <input type="text" class="form-control" id="exampleInputPertanyaan">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Pilih Gambar 1</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Pilih Gambar 2</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                </div>
                <div class="form-group">
                    <label for="exampleInputPilihan1">Input Pilihan 1</label>
                    <input type="text" class="form-control" id="exampleInputPilihan1">
                </div>
                <div class="form-group">
                    <label for="exampleInputPilihan2">Input Pilihan 2</label>
                    <input type="text" class="form-control" id="exampleInputPilihan3">
                </div>
                <div class="form-group">
                    <label for="exampleInputPilihan3">Input Pilihan 3</label>
                    <input type="text" class="form-control" id="exampleInputPilihan3">
                </div>
                <div class="form-group">
                    <label for="exampleInputPilihan4">Input Pilihan 4</label>
                    <input type="text" class="form-control" id="exampleInputPilihan4">
                </div>
                <div class="form-group">
                    <label for="exampleInputPilihan5">Input Pilihan 5</label>
                    <input type="text" class="form-control" id="exampleInputPilihan5">
                </div>
                <div class="form-group">
                    <label for="exampleInputPilihan6">Input Pilihan 6</label>
                    <input type="text" class="form-control" id="exampleInputPilihan6">
                </div>
                <div class="form-group">
                    <label for="exampleInputPilihan7">Input Pilihan 7</label>
                    <input type="text" class="form-control" id="exampleInputPilihan7">
                </div>
                <div class="form-group">
                    <label for="exampleInputPilihan8">Input Pilihan 8</label>
                    <input type="text" class="form-control" id="exampleInputPilihan8">
                </div>
                <div class="form-group">
                    <label for="exampleInputPilihan9">Input Pilihan 9</label>
                    <input type="text" class="form-control" id="exampleInputPilihan9">
                </div>
                <div class="form-group">
                    <label for="exampleInputPilihan10">Input Pilihan 10</label>
                    <input type="text" class="form-control" id="exampleInputPilihan10">
                </div>
                <div class="form-group">
                    <label for="exampleInputPilihan11">Input Pilihan 11</label>
                    <input type="text" class="form-control" id="exampleInputPilihan11">
                </div>
                <div class="form-group">
                    <label for="exampleInputPilihan12">Input Pilihan 12</label>
                    <input type="text" class="form-control" id="exampleInputPilihan12">
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
