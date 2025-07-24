{{-- /resources/views/index.blade.php --}}

{{-- Menggunakan layout utama --}}
@extends('layouts.app')

{{-- Mengatur judul halaman spesifik untuk halaman ini --}}
@section('title', 'Warung Zura - Nikmatnya Bikin Lupa Diet!')

{{-- Memulai section konten --}}
@section('content')

<section class="hero">
    <div class="container">
        <div class="row">

            <div class="col-lg-5 col-12 m-auto">
                <div class="heroText">
                    <h1 class="text-white mb-lg-5 mb-3">Warung Zura</h1>
                    <div class="c-reviews my-3 d-flex flex-wrap align-items-center">
                        <div class="d-flex flex-wrap align-items-center">
                            <h4 class="text-white mb-0 me-3">5/5</h4>
                            <div class="reviews-stars">
                                <i class="bi-star-fill reviews-icon"></i>
                                <i class="bi-star-fill reviews-icon"></i>
                                <i class="bi-star-fill reviews-icon"></i>
                                <i class="bi-star-fill reviews-icon"></i>
                                <i class="bi-star-fill reviews-icon"></i>
                            </div>
                        </div>
                        <p class="text-white w-100">Nikmatnya Bikin Lupa Diet!</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-7 col-12">
                <div id="carouselExampleCaptions" class="carousel carousel-fade hero-carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="carousel-image-wrap">
                                <img src="{{ asset('images/slide/jay-wennington-N_Y88TWmGwA-unsplash.jpg') }}" class="img-fluid carousel-image" alt="Lokasi Warung Zura">
                            </div>
                            <div class="carousel-caption">
                                <span class="text-white">
                                    <i class="bi-geo-alt me-2"></i>
                                    Nabire, Papua Tengah
                                </span>
                                <h4 class="hero-text">Bumi Wonorejo</h4>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="carousel-image-wrap">
                                <img src="{{ asset('images/slide/jason-leung-O67LZfeyYBk-unsplash.jpg') }}" class="img-fluid carousel-image" alt="Papeda">
                            </div>
                            <div class="carousel-caption">
                                <div class="d-flex align-items-center">
                                    <h4 class="hero-text">PAPEDA</h4>
                                    <span class="price-tag ms-4"><small>Rp.</small>26.500</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="carousel-image-wrap">
                                <img src="{{ asset('images/slide/ivan-torres-MQUqbmszGGM-unsplash.jpg') }}" class="img-fluid carousel-image" alt="Ikan Kuah Kuning">
                            </div>
                            <div class="carousel-caption">
                                <div class="d-flex align-items-center">
                                    <h4 class="hero-text">Kuah Kuning</h4>
                                    <span class="price-tag ms-4"><small>Rp.</small>20.250</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>

                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

        </div>
    </div>

    <div class="video-wrap">
        <img src="{{ asset('images/background/tampilan.jpg') }}" alt="background-tampilan" class="custom-video">
    </div>
    
    <div class="overlay"></div>
</section>

<section class="menu section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center mb-lg-5 mb-4">Menu Spesial</h2>
            </div>

            {{-- Nantinya bagian ini bisa dibuat dinamis dari database --}}
            <div class="col-lg-4 col-md-6 col-12">
                <div class="menu-thumb">
                    <div class="menu-image-wrap">
                        <img src="{{ asset('images/breakfast/brett-jordan-8xt8-HIFqc8-unsplash.jpg') }}" class="img-fluid menu-image" alt="Nasi Goreng">
                        <span class="menu-tag bg-warning">Breakfast</span>
                    </div>
                    <div class="menu-info d-flex flex-wrap align-items-center">
                        <h4 class="mb-0">Nasi Goreng Spesial</h4>
                        <span class="price-tag bg-white shadow-lg ms-6"><small>Rp.</small>20.000</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12">
                <div class="menu-thumb">
                    <div class="menu-image-wrap">
                        <img src="{{ asset('images/lunch/farhad-ibrahimzade-MGKqxm6u2bc-unsplash.jpg') }}" class="img-fluid menu-image" alt="Es Teler">
                        <span class="menu-tag bg-warning">Lunch</span>
                    </div>
                    <div class="menu-info d-flex flex-wrap align-items-center">
                        <h4 class="mb-0">ES Teler</h4>
                        <span class="price-tag bg-white shadow-lg ms-4"><small>Rp.</small>20.500</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12">
                <div class="menu-thumb">
                    <div class="menu-image-wrap">
                        <img src="{{ asset('images/dinner/keriliwi-c3mFafsFz2w-unsplash.jpg') }}" class="img-fluid menu-image" alt="Konro Bakar">
                        <span class="menu-tag bg-warning">Dinner</span>
                    </div>
                    <div class="menu-info d-flex flex-wrap align-items-center">
                        <h4 class="mb-0">Konro Bakar</h4>
                        <span class="price-tag bg-white shadow-lg ms-4"><small>Rp.</small>50.000</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="BgImage"></section>

<section class="news section-padding">
    <div class="container">
        <div class="row">
            <h2 class="text-center mb-lg-5 mb-4">Berita &amp; Acara</h2>
            
            <div class="col-lg-6 col-md-6 col-12">
                <div class="news-thumb mb-4">
                    <a href="/pembaruan-kami/detail">
                        <img src="{{ asset('images/news/pablo-merchan-montes-Orz90t6o0e4-unsplash.jpg') }}" class="img-fluid news-image" alt="Gaya Hidup Sehat">
                    </a>
                    <div class="news-text-info news-text-info-large">
                        <span class="category-tag bg-danger">Unggulan</span>
                        <h5 class="news-title mt-2">
                            <a href="/pembaruan-kami/detail" class="news-title-link">Gaya Hidup Sehat dan Tips Hidup Bahagia</a>
                        </h5>
                    </div>
                </div> 
            </div>

            <div class="col-lg-6 col-md-6 col-12">
                <div class="news-thumb mb-4">
                    <a href="/pembaruan-kami/detail">
                        <img src="{{ asset('images/news/stefan-johnson-xIFbDeGcy44-unsplash.jpg') }}" class="img-fluid news-image" alt="Makanan Sehat">
                    </a>
                    <div class="news-text-info news-text-info-large">
                        <span class="category-tag bg-danger">Unggulan</span>
                        <h5 class="news-title mt-2">
                            <a href="/pembaruan-kami/detail" class="news-title-link">Cara membuat makanan sehat</a>
                        </h5>
                    </div>
                </div> 
            </div>
        </div>
    </div>
</section>

@endsection
