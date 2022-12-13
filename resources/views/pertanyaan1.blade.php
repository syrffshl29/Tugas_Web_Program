{{-- @extends('layouts.app')

@section('content')

    
    {{-- @foreach ($pertanyaan as $pertanyaan)
    <div class="container" style="margin-top: 5em"></div>    
    {{ $pertanyaan }}

    @endforeach --}}

    {{-- <body style="background: lightgray">

        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card border-0 shadow rounded">
                        <div class="card-body">
                            <a href="" class="btn btn-md btn-success mb-3">TAMBAH POST</a>
                            <table class="table table-bordered">
                                <thead>
                                  <tr>
                                    <th scope="col">GAMBAR</th>
                                    <th scope="col">JUDUL</th>
                                    <th scope="col">CONTENT</th>
                                    <th scope="col">AKSI</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  @forelse ($pertanyaan as $pertanyaan)
                                    <tr>
                                        <td class="text-center">
                                            <img src="" class="rounded" style="width: 150px">
                                        </td>
                                        <td>
                                            {{ $pertanyaan->pertanyaan}}
                                        </td>
                                        <td>{{ $pertanyaan->test_id }}</td>
                                        <td class="text-center">
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="" method="POST">
                                                <a href="" class="btn btn-sm btn-primary">EDIT</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                            </form>
                                        </td>
                                    </tr>
                                  @empty
                                      <div class="alert alert-danger">
                                          Data Post belum Tersedia.
                                      </div>
                                  @endforelse
                                </tbody>
                              </table>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    
        <script>
            //message with toastr
            @if(session()->has('success'))
            
                toastr.success('{{ session('success') }}', 'BERHASIL!'); 
    
            @elseif(session()->has('error'))
    
                toastr.error('{{ session('error') }}', 'GAGAL!'); 
                
            @endif --}}
        {{-- </script> --}}
    
    {{-- </body> --}}

{{-- @endsection --}} 

@extends('layouts.appsoal')

@section('content')
<section class="py-5" style="margin-bottom: 2em">
    <div class="container" style="font-family: poppins">
        <div class="text-center" style="font-size: 24px">
            <p>1 dari 27 soal</p>
            <div class="progress">
                <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="4" aria-valuemin="0" aria-valuemax="100" style="width: 4%"></div>
              </div>
        </div>
        <div class="text-center mt-5" style="font-size: 24px">
            <p>Soal A</p>
            <p>Silakan pilih 3 dari daftar berikut</p>
        </div>

        @forelse ($pertanyaan as $pertanyaan)
        <div class="mx-auto" style="width: 30rem; font-size: 24px; ">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck">
            <label class="form-check-label me-5" for="defaultCheck">
              <td>
                {{ $pertanyaan->pertanyaan}}
            </td>
            </label>
          </div>
          @empty
            <div class="alert alert-danger">
                Data Post belum Tersedia.
            </div>
           @endforelse
           <div class="mt-md-4">
            <a href="" class="card-link btn btn-danger rounded-pill" style="margin-left: 7em">Berikutnya</a>
          </div> 
</div>
<script>
    $('input[type=checkbox]').on('change', function(evt) {
       if($('input[id=defaultCheck]:checked').length >= 4) {
           this.checked = false;
           alert('Hanya boleh memilih maksimal 3 kategori !');
       }
    });
    </script>
<script>
    //message with toastr
    @if(session()->has('success'))
    
        toastr.success('{{ session('success') }}', 'BERHASIL!'); 

    @elseif(session()->has('error'))

        toastr.error('{{ session('error') }}', 'GAGAL!'); 
        
    @endif
</script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</section>
@endsection