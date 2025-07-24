{{-- /resources/views/about.blade.php --}}

@extends('layouts.app')

@section('title', 'Cerita Kami - Warung Zura')

@section('content')

<header class="site-header site-about-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-12 mx-auto">
                <h1 class="text-white">Kisah Dapur</h1>
                <strong class="text-white">Nikmatnya Bikin Lupa Diet!</strong>
            </div>
        </div>
    </div>
    <div class="overlay"></div>
</header>

<section class="about section-padding bg-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12 mb-2">
                <h4 class="mb-3">Nasi hangat, lauk mantap, harga bersahabat. Sini dulu sebelum nyesel!</h4>
                <a href="{{ route('news') }}" class="custom-btn btn btn-dark mt-3">Lihat Berita</a>
                <a href="{{ route('contact') }}" class="custom-btn btn btn-danger mt-3 ms-3">Halo</a>
            </div>
            <div class="col-lg-6 col-12">
                <p>Dapur bukan hanya tempat untuk memasak, tapi tempat di mana aroma kenangan tercipta. Setiap tumisan adalah cerita, setiap rebusan adalah pengingat bahwa rumah selalu punya rasa yang tak tergantikan. Untuk reservasi, silakan <strong>klik tombol "Reservasi"</strong> di pojok kanan atas.</p>
                <p> <a href="https://wa.me/6281240477922" target="_blank">Hubungi kami</a> untuk informasi lebih lanjut.</p>
            </div>
        </div>
    </div>
</section>

<section class="about section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="mb-5">Anggota Tim</h2>
            </div>
            <div class="col-lg-4 col-12">
                <div class="team-thumb">
                    <img src="{{ asset('images/team/matthew-hamilton-tNCH0sKSZbA-unsplash.jpg') }}" class="img-fluid team-image" alt="Foto Manajer Restoran">
                    <div class="team-info">
                        <h4 class="mt-3 mb-0">Azzahra Kartika Ramadhiani</h4>
                        <p>Restaurant Manager</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12 my-lg-0 my-4">
                <div class="team-thumb">
                    <img src="{{ asset('images/team/nicolas-horn-MTZTGvDsHFY-unsplash.jpg') }}" class="img-fluid team-image" alt="Foto CEO & Founder">
                    <h4 class="mt-3 mb-0">Rochfis Subiantoro</h4>
                    <p>CEO &amp; Founder</p>
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div class="team-thumb">
                    <img src="{{ asset('images/team/rc-cf-FMh5o5m5N9E-unsplash.jpg') }}" class="img-fluid team-image" alt="Foto Senior Chef">
                    <h4 class="mt-3 mb-0">Hamsina</h4>
                    <p>Senior Chef</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="newsletter section-padding bg-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12">
                <img src="{{ asset('images/charles-deluvio-FdDkfYFHqe4-unsplash.jpg') }}" class="img-fluid newsletter-image" alt="Newsletter Image">
            </div>
            <div class="col-lg-6 col-12 d-flex align-items-center mt-5 mt-lg-0 mx-auto">
                <div class="subscribe-form-wrap">
                    <h4 class="mb-0">Buletin kami</h4>
                    <p>Berita makanan setiap hari</p>
                    <form class="custom-form subscribe-form mt-4" role="form">
                        <input type="email" name="subscribe-email" id="subscribe-email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Alamat email Anda" required="">
                        <button type="submit" class="form-control mb-3" id="subscribe">Berlangganan</button>
                        <small>Dengan mendaftar, Anda menyetujui Pemberitahuan Privasi dan kebijakan data kami</small>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
