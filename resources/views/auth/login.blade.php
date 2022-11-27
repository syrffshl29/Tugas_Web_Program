@extends('layouts.app')

@section('content')
{{-- <div class="bg-holder overlay overlay-2" style="background-image:url( ../templete/assets/img/bglogin1.png ); width:100%;" >

</div> --}}
<div class="d-flex flex-column">
    <img src="{{ asset('templete/assets/img/bglogin1.png') }}" style=" max-width: 100%; max-height: 100vh"  alt="">

    <div class=" position-absolute container " style="top: 200px; left:130px">
                     
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card">
                    <div class="card-header ">
                        <h2 class="text-danger" > <b></b>{{ __('SIGN IN') }}</h2>
                    </div>
    
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            
                            <div class="form-floating mb-3">
                                <input  id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="name@example.com" />
                                <label for="email" class="col-md-4 col-form-label text-md-start">{{ __('Email Address') }}</label>

                                @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                            </div>
                            {{-- <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
    
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div> --}}
                            
                            <div class="form-floating mb-3">
                                <input  id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="password" />
                                <label for="password" class="col-md-4 col-form-label text-md-start">{{ __('Password') }}</label>

                                @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                            </div>
                            {{-- <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
    
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div> --}}
    
                            <div class="form-floating mb-3">
                                
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
    
                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Password') }}
                                        </label>
                                    </div>
                                
                            </div>
    
                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                {{--<a class="small" href="password.html">Forgot Password?</a>--}} 
                                 {{--<a class="btn btn-danger" href="index.html">Login</a>--}}

                                 @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                 @endif

                                 <button type="submit" class="btn btn-danger">
                                    {{ __('Login') }}
                                </button>
                             </div>

                            {{-- <div class="row mb-3 ">
                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                 @endif
                                <div class="col-md-6 ms-auto ">

                                    <button type="submit" class="btn btn-danger">
                                        {{ __('Login') }}
                                    </button>
                                </div>
                                
                            </div> --}}
                            
                             </form>
                        </div>
                        <div class="card-footer text-center py-3">
                                  <div class="small"><a href="{{ route('register') }}">Need an account? Sign up!</a></div>
                              </div>
                    </div>
                </div>
            </div>
        </div> 
</div>

@endsection
