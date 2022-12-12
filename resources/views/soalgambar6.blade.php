@extends('layouts.appsoal')

@section('content')
<section class="py-5" style="margin-bottom: 2em">
    <div class="container" style="font-family: poppins">
        <div class="text-center" style="font-size: 24px">
            <p>15 dari 27 soal</p>
            <div class="progress">
                <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100" style="width: 58%"></div>
              </div>
        </div>
        <div class="text-center mt-5" style="font-size: 24px">
            <p>Soal N</p>
            <p>Silakan pilih salah satu gambar dibawah</p>
        </div>
        <div class="container">
            <div class="row " style="margin-left:10em">
                <div class="col-md-6">
                    <img src="{{asset ('templete/assets/img/soalgambar11.png')}}" alt="">
                    <div class="form-check " style="margin-left:10em ">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                          gambar 1
                        </label>
                      </div>
                </div>
                <div class="col-md-6">
                    <img src="{{asset ('templete/assets/img/soalgambar12.png')}}" alt="">
                    <div class="form-check" style="margin-left:8em ">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                          gambar 2
                        </label>
                      </div>
                </div>
            </div>
            <div class="mt-md-4">
                <a href=" {{route ('soalgambar7')}} " class="card-link btn btn-danger rounded-pill" style="margin-left: 38em">Berikutnya</a>
              </div>
        </div>
             
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</section>
@endsection