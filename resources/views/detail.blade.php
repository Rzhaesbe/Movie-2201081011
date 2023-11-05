@extends('layout.template')

@section('title', $movie['judul'])

@section('content')
    @if ($movie)
        <div class="container mt-3">
            <div class="row">
                <div class="col-md-4">
                    <img src="/images/{{ $movie['foto_sampul'] }}" class="img-fluid rounded movie-poster"
                        alt="{{ $movie['judul'] }} Poster">
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="card-title">{{ $movie['judul'] }}</h1>
                            <p class="card-text">{{ $movie['sinopsis'] }}</p>
                            <p class="card-text"><strong>Tahun :</strong> {{ $movie['tahun'] }}</p>
                            <p class="card-text"><strong>Pemain :</strong> {{ implode(', ', $movie['pemain']) }}</p>
                            <div class="mt-3">
                                <strong>Rating Pengguna: <span class="star1">&#9733;</span>{{ $movie['rating'] }}
                                </strong>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3 text-center">
                        <a href="/" class="btn btn-success">
                            <i class="fa fa-arrow-left"></i> Kembali
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="container mt-5 text-center">
            <div class="alert alert-danger" role="alert">
                Data film tidak ditemukan!
            </div>
            <div class="mt-3">
                <a href="/" class a="btn btn-success">
                    <i class="fa fa-arrow-left"></i> Kembali
                </a>
            </div>
        </div>
    @endif
@endsection
