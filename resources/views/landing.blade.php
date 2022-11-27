@extends('layouts.dashboard')

@section('title')
    Landing
@endsection

@section('content')
    <body>
        <section>
          <nav class="navbar navbar-expand-lg bg-white fixed-top d-flex container-fluid ">
            <a class="navbar-brand mx-5" href="/">
                <img src="../templete/assets/img/logo-konsel.png" alt="logo" />
            </a>
            <button class="navbar-toggler p-0" type="button" data-bs-toggle="collapse" data-bs-target="#primaryNavbarCollapse" aria-controls="primaryNavbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="hamburger hamburger--emphatic">
                    <span class="hamburger-box">
                        <span class="hamburger-inner">
                        </span>
                    </span>
                </span>
            </button>
            <div class="collapse navbar-collapse mx-5" id="primaryNavbarCollapse">
                <p class="d-block d-lg-inline-block ms-auto my-3 my-lg-0">
                    <a class="btn btn-outline-danger rounded-pill btn-sm border-2 d-block d-lg-inline-block ms-auto my-3 my-lg-0 mx-3" href="/login" target="_blank">Login</a>
                    <a class="btn btn-danger btn-hover rounded-pill btn-sm border-2 d-block d-lg-inline-block ms-auto my-3 my-lg-0 mx-3" href="/quiz" target="_blank">Get Started</a>
                </p>
            </div>
        </nav>            
        </section>
        
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
        @include('layouts.partials.footer')
    </body>
@endsection