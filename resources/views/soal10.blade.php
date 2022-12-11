@extends('layouts.appsoal')

@section('content')
<section class="py-5" style="margin-bottom: 2em">
    <div class="container" style="font-family: poppins">
        <div class="text-center" style="font-size: 24px">
            <p>8 dari 27 soal</p>
            <div class="progress">
                <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="36" aria-valuemin="0" aria-valuemax="100" style="width: 36%"></div>
              </div>
        </div>
        <div class="text-center mt-5" style="font-size: 24px">
            <p>Soal H</p>
            <p>Silakan pilih 3 dari daftar berikut</p>
        </div>
        <div class="" style="width: 30rem; font-size: 24px; margin-left:17em ">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck">
            <label class="form-check-label me-5" for="defaultCheck">Pemain Musik Band</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck">
            <label class="form-check-label me-5" for="defaultCheck">Ahli Penyuluh Jembatan</label>
          </div>
              <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck">
            <label class="form-check-label" for="defaultCheck">Pegawai Kantor Post</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck">
            <label class="form-check-label" for="defaultCheck">Penjahit</label>
          </div><div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck">
            <label class="form-check-label" for="defaultCheck">Ahli Phsycotherapy</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck">
            <label class="form-check-label" for="defaultCheck">Peternak Ayam</label>
          </div><div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck">
            <label class="form-check-label" for="defaultCheck">Ahli Representasi Permata</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck">
            <label class="form-check-label" for="defaultCheck">Juru Bayar</label>
          </div><div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck">
            <label class="form-check-label" for="defaultCheck">Ahli Geologi</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck">
            <label class="form-check-label" for="defaultCheck">Petugas Humas</label>
          </div><div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck">
            <label class="form-check-label" for="defaultCheck">Penata Etalase</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck">
            <label class="form-check-label" for="defaultCheck">Penulis Sandawara Radio </label>
          </div>
          <div class="mt-md-4">
            <a href=" {{route('saol11')}} " class="card-link btn btn-danger rounded-pill" style="margin-left: 7em">Berikutnya</a>
          </div> 
           </div>
             
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script>
$('input[type=checkbox]').on('change', function(evt) {
   if($('input[id=defaultCheck]:checked').length >= 4) {
       this.checked = false;
       alert('Hanya boleh memilih maksimal 3 kategori !');
   }
});
</script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</section>
@endsection