@extends('layouts.app')

@section('content')

    
    @foreach ($pertanyaan as $p)
        {{ $p }}
    @endforeach
    
@endsection