@extends('layout.template')

@section('title', 'Homepage')

@section('content')
<h1>Popular Movies</h1>
<div class="row justify-content-center">
    @foreach ($movies as $movie)
        <div class="col-md-3 mb-3">
            <div class="card" style="width: 18rem;">
                <img src="/images/{{ $movie['foto_sampul'] }}" class="card-img-top" alt="{{ $movie['judul'] }}">
                <div class="star">
                    <span>&#9733;</span>
                    <h5 class="card-title rating">{{ $movie['rating'] }}</h5>
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $movie['judul'] }}</h5>

                    <p class="card-text">{{ implode(',', $movie['pemain']) }}</p>
                    <a href="/movie/{{ $movie['id'] }}" class="btn btn-primary">Detail</a>
                    <a href="/" class="btn btn-warning">Tonton Sekarang</a>
                </div>
            </div>
        </div>
        @endforeach
</div>


@endsection
