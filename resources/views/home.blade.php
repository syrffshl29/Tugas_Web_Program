@extends('layouts.app')

@section('content')
{{-- <div class="container" style="margin-top: 8em">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}
<section>
    <div class="bg-image" >
     <!-- <img src="../templete/assets/img/landing.png" alt="">-->
     <div class="container">
      <div class="row min-vh-100 py-8 align-items-center" data-inertia='{"weight":1.5}'>
        <div class="col-sm-8 col-lg-7 px-5 px-sm-3">
            <div class="overflow-hidden">
                <h1 class="fs-4 fs-md-4 lh-1 text-white" data-zanim-xs='{"delay":0}'> <b> Sehatkan Mental Dahulu, Aktifitas Maksimal Kemudian.</b> </h1> 
                <p class="text-white">Periksa sekarang kesahatan mental anda dengan psikolog profesional kami, layanan fasilitas yang lengkap dan modern.</p>
                <p class="d-block d-lg-inline-block ms-auto my-3 my-lg-0">
                  <a class="btn btn-danger btn-hover rounded-pill btn-sm border-2 d-block d-lg-inline-block ms-auto my-3 my-lg-0 mx-3" href="/quiz" target="_blank">Get Started</a>
              </p>
            </div>
            </div>
        </div>
      </div>
     </div>
    </div>
  </section>

  <section>
    <div class="container pt-5 " >
        <div class="row justify-content-center text-center">
            <div class="col-10 col-md-6">
                <h2 class="fs-2 fs-lg-2"> <b>Periksalah Diri Anda Ke Ahlinya</b> </h2>
                <p class="px-lg-4 mt-3">Dapatkan konsultasi dan dukungan ahli dengan konsel, sebuah perusahaan penasihat yang selalu berdiri di sisi anda.</p>
                <hr class="short" data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}' data-zanim-trigger="scroll" />
            </div>
        </div>
        <div class="row  ">
            <div class="col-sm-6 col-lg-3 mt-5" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                <div class="mx-auto" data-zanim-xs='{"delay":0}'class="overflow-hidden me-3"><img  src="{{ asset ('templete/assets/img/100.png') }}" alt="icon" height="" data-zanim-xs='{"delay":0}' /></div>
                <h5 class="mt-4" data-zanim-xs='{"delay":0.1}'><b>Take A Quick Assessment</b> </h5>
                <p class="mb-0 mt-3" data-zanim-xs='{"delay":0.2}'>Answer a few questions to help us understand your preverences to start therapy. you can invite your parner.
                 <br /></p>
            </div>
            <div class="col-sm-6 col-lg-3 mt-5" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                <div class="" data-zanim-xs='{"delay":0}'class="overflow-hidden"><img src="{{ asset ('templete/assets/img/200.png') }}" alt="icon" height="" data-zanim-xs='{"delay":0}' /></div>
                 <br> <br><h5 class="mt-4" data-zanim-xs='{"delay":0.1}'><b>Take A Quick Assessment</b> </h5>
                <p class="mb-0 mt-3" data-zanim-xs='{"delay":0.2}'>Answer a few questions to help us understand your preverences to start therapy. you can invite your parner.
                 <br /></p>
            </div>
            <div class="col-sm-6 col-lg-3 mt-5" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                <div class="" data-zanim-xs='{"delay":0}'class="overflow-hidden"><img src="{{ asset ('templete/assets/img/300.png') }}" alt="icon" height="" data-zanim-xs='{"delay":0}' /></div>
                <h5 class="mt-4" data-zanim-xs='{"delay":0.1}'><b>Take A Quick Assessment</b> </h5>
                <p class="mb-0 mt-3" data-zanim-xs='{"delay":0.2}'>Answer a few questions to help us understand your preverences to start therapy. you can invite your parner.
                 <br /></p>
            </div>
            <div class="col-sm-6 col-lg-3 mt-5" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                <div class="" data-zanim-xs='{"delay":0}'class="overflow-hidden"><img src="{{ asset ('templete/assets/img/400.png') }}" alt="icon" height="" data-zanim-xs='{"delay":0}' /></div>
                <h5 class="mt-4" data-zanim-xs='{"delay":0.1}'><b>Take A Quick Assessment</b> </h5>
                <p class="mb-0 mt-3" data-zanim-xs='{"delay":0.2}'>Answer a few questions to help us understand your preverences to start therapy. you can invite your parner.
                 <br /></p>
            </div>
        </div>
    </div>
  </section>

  <section >
    <div class="container py-5" style="padding-top: 10em;">
        <iframe width="1100" height="550" src=" {{ url ('https://www.youtube.com/embed/jlWMTNZNOc0') }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
  </section>

  <section>
    <div class="container py-3">
        <div class="row justify-content-center text-center">
            <h3 class="fs-2 fs-lg-2 text-black"><b>Terapis Profesional, Berlisensi, dan Berpengalaman</b> </h3>
                </div>
                <div class="row text-center justify-content-center">
                    <div class="col-sm-6 col-lg-3 mt-5" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                        <div class="" data-zanim-xs='{"delay":0}'class="overflow-hidden"><img src="{{ asset ('templete/assets/img/psikolog2.png') }}" alt="icon" height="200s" data-zanim-xs='{"delay":0}' /></div>
                        <h5 class="mt-4" data-zanim-xs='{"delay":0.1}'></h5>
                    </div>
                    <div class="col-sm-6 col-lg-3 mt-5" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                        <div class="" data-zanim-xs='{"delay":0}'><img src="{{ asset ('templete/assets/img/psikolog1.png') }}" alt="icon" height="200s" data-zanim-xs='{"delay":0}' /></div>
                        <h5 class="mt-4" data-zanim-xs='{"delay":0.1}'></h5>
                    </div>
                </div>
                <p>Berlisensi, terakreditasi, dan berpengalaman terbesar di Indonesia yang dapat membantu Anda 
                   dengan berbagai masalah termasuk depresi, kecemasan, hubungan, trauma, kesedihan,
                   dan banyak lagi. Dengan terapi kami, Anda mendapatkan profesionalisme dan kualitas yang sama 
                   seperti yang Anda harapkan, dengan berkomunikasi kapan dan bagaimana anda inginkan.</p>
            </div>
            
    </div>
  </section>

  <section>
    <div class="container py-3">
        <div class="text-center mb-7">
            <h3 class="fs-2 fs-md-3 text-black"><b>Kenapa Harus Memilih Konsel</b> </h3>
        </div>
        <div class="row ">
            <div class="col-lg-6 pe-lg-3 py-3"><img class="rounded-3 img-fluid" src=" {{ asset ('templete/assets/img/tanganpsikolog.png') }}" alt="about" /></div>
            <div class="col-lg-6 px-lg-5 mt-6 mt-lg-0 align-self-center" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                <div class="overflow-hidden">
                    <div class="px-4 px-sm-0 mt-5" data-zanim-xs='{"delay":0}'>
                        <h5 class="fs-0 fs-lg-1 text-black"><img src=" {{ asset ('templete/assets/img/favicons/brainhealth.png') }}"><span class="fs-1 me-2" data-fa-transform="flip-h"></span>Pemeliharaan Mental</h5>
                        <p class="mt-3 text-black">Tidak perlu khawatir, konsultasi tentang apa pun akan dijamin keamanannya.</p>
                    </div>
                </div>
                {{-- <div class="overflow-hidden">
                    <div class="px-4 px-sm-0" data-zanim-xs='{"delay":0}'>
                        <h5 class="fs-0 fs-lg-1 fs-1 text-black"> <img src="{{ asset ('templete/assets/img/favicons/brainhealth.png') }}"><span class="fs-1 me-2" data-fa-transform="flip-h"></span>Pemeliharaan Mental</h5>
                        <p class="mt-3 text-black">Konsel menyediakan berbagai jenis layanan kesehatan mental yang bisa diakses sesuai kebutuhanmu.</p>
                    </div>
                </div> --}}
                <div class="overflow-hidden">
                    <div class="px-4 px-sm-0 mt-5" data-zanim-xs='{"delay":0}'>
                        <h5 class="fs-0 fs-lg-1 text-black"><img src=" {{ asset ('templete/assets/img/favicons/heartlock.png') }}"><span class="fs-1 me-2" data-fa-transform="flip-h"></span>Rahasia Terjamin</h5>
                        <p class="mt-3 text-black">Tidak perlu khawatir, konsultasi tentang apa pun akan dijamin keamanannya.</p>
                    </div>
                </div>
                <div class="overflow-hidden">
                    <div class="px-4 px-sm-0 mt-5" data-zanim-xs='{"delay":0}'>
                        <h5 class="fs-0 fs-lg-1 text-black"><img src="{{ asset ('templete/assets/img/favicons/heartrate.png') }}"><span class="fs-1 me-2" data-fa-transform="grow-1"></span>Bebas Berekspresi</h5>
                        <p class="mt-3 text-black">Bebas ceritakan masalahmu dari berbagai topik pada psikolog profesional berlisensi di konsel</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
  </section>

  <section class="text-center">
    <div class="container py-5">
        <div class="text-center">
            <h3 class="fs-2 fs-md-3 text-black"><b>Apa Yang Kamu Dapatkan</b> </h3>
            <hr class="short" data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}' data-zanim-trigger="scroll" />
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                <div class="px-3 py-4 px-lg-4">
                    <div class="overflow-hidden"><img src=" {{ asset ('templete/assets/img/Dunia.png') }}" alt="icon" height="37" data-zanim-xs='{"delay":0}' /></div>
                    <div class="overflow-hidden">
                        <h5 class="mt-3 text-black" data-zanim-xs='{"delay":0.1}'>Akses Mudah</h5>
                    </div>
                    <div class="overflow-hidden">
                        <p class="mb-0 text-black" data-zanim-xs='{"delay":0.2}'>Mudah karena dapat di akses di berbagai perangkat</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                <div class="px-3 py-4 px-lg-4">
                    <div class="overflow-hidden"><img src="{{ asset ('templete/assets/img/webdashboard.png') }}" alt="icon" height="37" data-zanim-xs='{"delay":0}' /></div>
                    <div class="overflow-hidden">
                        <h5 class="mt-3 text-black" data-zanim-xs='{"delay":0.1}'>Real Time Dashboard</h5>
                    </div>
                    <div class="overflow-hidden">
                        <p class="mb-0 text-black" data-zanim-xs='{"delay":0.2}'>Kondisi aktual yang dapat di pantau secara real time</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                <div class="px-3 py-4 px-lg-4">
                    <div class="overflow-hidden"><img src=" {{ asset ('templete/assets/img/projekmanager.png') }}" alt="icon" height="37" data-zanim-xs='{"delay":0}' /></div>
                    <div class="overflow-hidden">
                        <h5 class="mt-3 text-black" data-zanim-xs='{"delay":0.1}'>Projects Followup</h5>
                    </div>
                    <div class="overflow-hidden">
                        <p class="mb-0 text-black" data-zanim-xs='{"delay":0.2}'>Daftar kegiatan setelah tes</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                <div class="px-3 py-4 px-lg-4">
                    <div class="overflow-hidden"><img src=" {{ asset ('templete/assets/img/gender.png') }}" alt="icon" height="37" data-zanim-xs='{"delay":0}' /></div>
                    <div class="overflow-hidden">
                        <h5 class="mt-3 text-black" data-zanim-xs='{"delay":0.1}'>Psycolog Recomendation</h5>
                    </div>
                    <div class="overflow-hidden">
                        <p class="mb-0 text-black" data-zanim-xs='{"delay":0.2}'>Rekomendasi psikolog terbaik</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                <div class="px-3 py-4 px-lg-4">
                    <div class="overflow-hidden"><img src=" {{ asset ('templete/assets/img/Sekolah.png') }}" alt="icon" height="37" data-zanim-xs='{"delay":0}' /></div>
                    <div class="overflow-hidden">
                        <h5 class="mt-3 text-black" data-zanim-xs='{"delay":0.1}'>Schools Partnership</h5>
                    </div>
                    <div class="overflow-hidden">
                        <p class="mb-0 text-black" data-zanim-xs='{"delay":0.2}'>Daftar via sekolah</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                <div class="px-3 py-4 px-lg-4">
                    <div class="overflow-hidden"><img src=" {{ asset ('templete/assets/img/Medali.png') }}" alt="icon" height="37" data-zanim-xs='{"delay":0}' /></div>
                    <div class="overflow-hidden">
                        <h5 class="mt-3 text-black" data-zanim-xs='{"delay":0.1}'>Certified Result</h5>
                    </div>
                    <div class="overflow-hidden">
                        <p class="mb-0 text-black" data-zanim-xs='{"delay":0.2}'>Hasil tes bersertifikat</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
@endsection
