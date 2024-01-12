@extends('frontend.layout')

@section('content')
<div class="container mt-5">
        <div class="card card-hero-primary">
            <img src="{{ asset('frontend/assets/images/g.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body text-white card-hero position-absolute text-center">
                <h1 class="card-title card-title-hero">Indonesia</h1>
                <p class="card-text">Nikmati keindahan seluruh indonesia hanya dengan satu sentuhan.</p>
                <a href="https://api.whatsapp.com/send/?phone=%2B6281395863537&text&type=phone_number&app_absent=0" class="btn btn-primary">Liburan Sekarang</a>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row mt-5">
            <h3 class="text-center mb-4">Paket Travel Indonesia</h3>
            @foreach($travel_packages as $travel_package)
                <div class="col-lg-4 mb-5">
                    <div class="card" style="border: none">
                        <img src="{{ Storage::url($travel_package->galleries->first()->image) }}" class="card-img-top" style="height: 400px;object-fit: cover;"
                            height="100" alt="{{ $travel_package->galleries->first()->title }}">
                        <div class="card-body">
                            <h4 class="card-title text-center">{{ $travel_package->title }}</h4>
                        </div>
                        <div class="card-body d-block p-0 mx-auto w-75">
                            <a href="{{ route('travel.detail', $travel_package->slug) }}" class="d-block mb-3 card-link btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row mt-5">
            <h3 class="text-center mb-4">Artikel Terbaru</h3>
            @foreach($posts as $post)
                <div class="col-lg-4">
                    <div class="card border-0 mb-3">
                        <a href="{{ route('blog.show', $post->slug) }}" style="color: #111;text-decoration: none">
                            <img src="{{ Storage::url($post->thumbnail) }}" style="height: 500px;object-fit: cover;" class="card-img-top"
                                alt="{{ $post->title }}">
                            <div class="card-body">
                                <h5 class="card-title text-center">{{ $post->title }}</h5>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection