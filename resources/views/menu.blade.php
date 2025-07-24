{{-- /resources/views/menu.blade.php --}}

@extends('layouts.app')

@section('title', 'Menu Kami - Warung Zura')

@section('content')

<header class="site-header site-menu-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-12 mx-auto">
                <h1 class="text-white">Menu kami</h1>
                <strong class="text-white">Nikmatnya Bikin Lupa Diet!</strong>
            </div>
        </div>
    </div>
    <div class="overlay"></div>
</header>

{{-- Section Makanan --}}
<section class="menu section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="mb-lg-5 mb-4">Menu Makanan</h2>
            </div>

            @forelse ($makanan as $item)
            <div class="col-lg-4 col-md-6 col-12">
                <div class="menu-thumb">
                    @if($item->image)
                        <img src="{{ Storage::url($item->image) }}" class="img-fluid menu-image" alt="{{ $item->name }}">
                    @else
                        {{-- Gambar placeholder jika tidak ada gambar --}}
                        <img src="https://placehold.co/600x400/EEE/333?text=Gambar+Segera" class="img-fluid menu-image" alt="Tidak ada gambar">
                    @endif
                    <div class="menu-info d-flex flex-wrap align-items-center">
                        <h4 class="mb-0">{{ $item->name }}</h4>
                        <span class="price-tag bg-white shadow-lg ms-4"><small>Rp.</small>{{ number_format($item->price, 0, ',', '.') }}</span>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12">
                <p class="text-center">Belum ada menu makanan yang tersedia.</p>
            </div>
            @endforelse
        </div>
    </div>
</section>

{{-- Section Minuman --}}
<section class="menu section-padding bg-white">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="mb-lg-5 mb-4">Minuman</h2>
            </div>

            @forelse ($minuman as $item)
            <div class="col-lg-6 col-12">
                <div class="menu-thumb">
                    @if($item->image)
                        <img src="{{ Storage::url($item->image) }}" class="img-fluid menu-image" alt="{{ $item->name }}">
                    @else
                        <img src="https://placehold.co/600x400/EEE/333?text=Gambar+Segera" class="img-fluid menu-image" alt="Tidak ada gambar">
                    @endif
                    <div class="menu-info d-flex flex-wrap align-items-center">
                        <h4 class="mb-0">{{ $item->name }}</h4>
                        <span class="price-tag bg-white shadow-lg ms-4"><small>Rp.</small>{{ number_format($item->price, 0, ',', '.') }}</span>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12">
                <p class="text-center">Belum ada menu minuman yang tersedia.</p>
            </div>
            @endforelse
        </div>
    </div>
</section>

{{-- Section Daging --}}
<section class="menu section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="mb-lg-5 mb-4">Menu Daging</h2>
            </div>

            @forelse ($daging as $item)
            <div class="col-lg-4 col-md-6 col-12">
                <div class="menu-thumb">
                    @if($item->image)
                        <img src="{{ Storage::url($item->image) }}" class="img-fluid menu-image" alt="{{ $item->name }}">
                    @else
                        <img src="https://placehold.co/600x400/EEE/333?text=Gambar+Segera" class="img-fluid menu-image" alt="Tidak ada gambar">
                    @endif
                    <div class="menu-info d-flex flex-wrap align-items-center">
                        <h4 class="mb-0">{{ $item->name }}</h4>
                        <span class="price-tag bg-white shadow-lg ms-4"><small>Rp.</small>{{ number_format($item->price, 0, ',', '.') }}</span>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12">
                <p class="text-center">Belum ada menu daging yang tersedia.</p>
            </div>
            @endforelse
        </div>
    </div>
</section>

@endsection
