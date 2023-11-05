@extends('layout.template')

@section('title', 'Search Results')

@section('content')
    <style>
        .card-title a {
            text-decoration: none;
            /* Menghilangkan garis bawah */
            color: inherit;
            /* Mengambil warna default teks */
        }
    </style>
    <div class="container">
        <h1>Search Results for "{{ $query }}"</h1>
        @if (count($results) > 0)
            <div class="row">
                @foreach ($results as $result)
                <div class="col-md-3 mb-3">
                    <div class="card" style="width: 18rem;">
                        <img src="/images/{{ $result['foto_sampul'] }}" class="card-img-top" alt="{{ $result['judul'] }}">
                        <div class="star">
                            <span>&#9733;</span>
                            <h5 class="card-title rating">{{ $result['rating'] }}</h5>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $result['judul'] }}</h5>
                             
                            <p class="card-text">{{ implode(',', $result['pemain']) }}</p>
                            <a href="/movie/{{ $result['id'] }}" class="btn btn-primary">Detail</a>
                            <a href="/" class="btn btn-warning">Tonton Sekarang</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        @else
            <p>Film Tidak Di Temukan</p>
        @endif
        <a href="/" class="btn btn-success">Kembali</a>
    </div>
@endsection
