{{-- /resources/views/news.blade.php --}}

@extends('layouts.app')

@section('title', 'Pembaruan Kami - Warung Zura')

@section('content')

<header class="site-header site-news-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-12 mx-auto">
                <h1 class="text-white">Berita &amp; Acara</h1>
                <strong class="text-white">Nikmatnya Bikin Lupa Diet!</strong>
            </div>
        </div>
    </div>
    <div class="overlay"></div>
</header>

<section class="news section-padding bg-white">
    <div class="container">
        <div class="row">
            <h2 class="mb-lg-5 mb-4">Pembaruan Terbaru</h2>
            
            <div class="col-lg-6 col-md-6 col-12">
                <div class="news-thumb mb-4">
                    <a href="{{ route('news.detail') }}">
                        <img src="{{ asset('images/news/pablo-merchan-montes-Orz90t6o0e4-unsplash.jpg') }}" class="img-fluid news-image" alt="Gambar berita unggulan 1">
                    </a>
                    <div class="news-text-info news-text-info-large">
                        <span class="category-tag bg-danger">Unggulan</span>
                        <h5 class="news-title mt-2">
                            <a href="{{ route('news.detail') }}" class="news-title-link">Bagaimana cara membuat diet sehat?</a>
                        </h5>
                    </div>
                </div> 
            </div>

            <div class="col-lg-6 col-md-6 col-12">
                <div class="news-thumb mb-4">
                    <a href="{{ route('news.detail') }}">
                        <img src="{{ asset('images/news/stefan-johnson-xIFbDeGcy44-unsplash.jpg') }}" class="img-fluid news-image" alt="Gambar berita unggulan 2">
                    </a>
                    <div class="news-text-info news-text-info-large">
                        <span class="category-tag bg-danger">Unggulan</span>
                        <h5 class="news-title mt-2">
                            <a href="{{ route('news.detail') }}" class="news-title-link">Tips Hidup Bahagia dan Makan Bahagia</a>
                        </h5>
                    </div>
                </div> 
            </div>
        </div>
    </div>
</section>

<section class="news section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="mb-lg-5 mb-4">Berita &amp; Acara Lainnya</h2>
            </div>

            <div class="col-lg-4 col-md-6 col-12">
                <div class="news-thumb mb-4">
                    <a href="{{ route('news.detail') }}">
                        <img src="{{ asset('images/news/gilles-lambert-S_LhjpfIdm4-unsplash.jpg') }}" class="img-fluid news-image" alt="Gambar berita 1">
                    </a>
                    <div class="news-text-info">
                        <span class="category-tag me-3 bg-info">Promosi</span>
                        <strong>12 April 2025</strong>
                        <h5 class="news-title mt-2">
                            <a href="{{ route('news.detail') }}" class="news-title-link">Apakah kelapa baik untuk kesehatan Anda?</a>
                        </h5>
                    </div>
                </div> 
            </div>

            <div class="col-lg-4 col-md-6 col-12">
                <div class="news-thumb mb-4">
                    <a href="{{ route('news.detail') }}">
                        <img src="{{ asset('images/news/ella-olsson-mmnKI8kMxpc-unsplash.jpg') }}" class="img-fluid news-image" alt="Gambar berita 2">
                    </a>
                    <div class="news-text-info">
                        <span class="category-tag me-3 bg-info">Karir</span>
                        <strong>18 April 2025</strong>
                        <h5 class="news-title mt-2">
                            <a href="{{ route('news.detail') }}" class="news-title-link">Bagaimana cara menjalankan bisnis sushi?</a>
                        </h5>
                    </div>
                </div> 
            </div>

            <div class="col-lg-4 col-md-6 col-12">
                <div class="news-thumb mb-4">
                    <a href="{{ route('news.detail') }}">
                        <img src="{{ asset('images/news/louis-hansel-GiIiRV0FjwU-unsplash.jpg') }}" class="img-fluid news-image" alt="Gambar berita 3">
                    </a>
                    <div class="news-text-info">
                        <span class="category-tag me-3 bg-info">Pertemuan</span>
                        <strong>30 April 2025</strong>
                        <h5 class="news-title mt-2">
                            <a href="{{ route('news.detail') }}" class="news-title-link">Membuat salad yang sehat</a>
                        </h5>
                    </div>
                </div> 
            </div>
        </div>
    </div>
</section>

@endsection
