{{-- /resources/views/news-detail.blade.php --}}

@extends('layouts.app')

{{-- Judul halaman ini bisa dibuat dinamis sesuai judul berita nantinya --}}
@section('title', 'Detail Berita - Warung Zura')

@section('content')

<header class="site-header site-news-detail-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Berikan Komentar Terbaik Anda</h2>
            </div>
        </div>
    </div>
</header>

<section class="news-detail section-padding pt-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-12">
                <img src="{{ asset('images/news/news-detail-header.jpg') }}" class="img-fluid news-detail-image" alt="fine dining experience">

                <div class="col-lg-10 col-10 mx-auto mt-5">
                    
                    <h4 class="mb-3">Pengalaman bersantap mewah terbaik di Crispy Kitchen</h4>

                    <p>Nikmati perpaduan cita rasa istimewa dan suasana elegan di Crispy Kitchen, tempat di mana setiap hidangan disajikan dengan penuh keahlian dan perhatian terhadap detail. Mulai dari bahan-bahan premium hingga pelayanan yang ramah dan profesional, kami hadir untuk menghadirkan pengalaman kuliner tak terlupakan. Temukan kenikmatan sesungguhnya dalam setiap suapan — hanya di Crispy Kitchen.</p>

                    <ul class="list">
                        <li class="list-item">Statistik pasta yang diterbitkan dalam Jurnal Internasional</li>
                        <li class="list-item">Tepung beras, atau kacang-kacangan seperti kacang</li>
                        <li class="list-item">Keluarga Belgia mengalami gejala keracunan makanan yang parah</li>
                    </ul>

                    <p>Pasta adalah jenis makanan yang biasanya dibuat dari adonan tepung terigu yang tidak beragi yang dicampur dengan air atau telur, dan dibentuk menjadi lembaran atau bentuk lainnya, kemudian dimasak dengan cara direbus atau dipanggang. Tepung beras, atau kacang-kacangan seperti buncis atau lentil, terkadang digunakan sebagai pengganti tepung terigu untuk menghasilkan rasa yang berbeda.</p>

                    <div class="ratio ratio-16x9 my-5">
                        <iframe 
                          width="560" 
                          height="315" 
                          src="https://www.youtube.com/embed/iGKF5fgtdWs" 
                          title="YouTube video player" 
                          frameborder="0" 
                          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                          allowfullscreen>
                        </iframe>
                    </div>

                    <h5 class="mt-4 mb-3">Resep Pasta dengan Saus Krim</h5>
                    <p>Pasta adalah jenis makanan yang biasanya dibuat dari adonan tepung terigu yang tidak beragi yang dicampur dengan air atau telur, dan dibentuk menjadi lembaran atau bentuk lainnya, kemudian dimasak dengan cara direbus atau dipanggang. Tepung beras, atau kacang-kacangan seperti buncis atau lentil, terkadang digunakan sebagai pengganti tepung terigu untuk menghasilkan rasa yang berbeda.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="comments section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h4 class="text-center mb-4">Kotak Komentar</h4>
            </div>

            <div class="col-lg-7 col-12 mx-auto">
                <form class="custom-form comment-form" action="#" method="post" role="form">
                    @csrf
                    <input type="text" name="comment-name" id="comment-name" class="form-control" placeholder="Nama Anda" required>
                    <input type="email" name="comment-email" id="comment-email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email Anda" required>
                    <textarea class="form-control" rows="5" id="comment" name="comment" placeholder="Tulis komentar" required></textarea>
                    <div class="col-lg-3 col-4 mx-auto">
                        <button type="submit" class="form-control" id="subscribe">Kirim</button>
                    </div>
                </form>

                <div class="news-author d-flex flex-wrap align-items-center">
                    <img src="{{ asset('images/author/alexander-hipp-iEEBWgY_6lA-unsplash.jpg') }}" class="img-fluid news-author-image" alt="Foto Penulis Komentar 1">
                    <div class="ms-4 w-50">
                        <p class="mb-2">Makan sangat enak dan puas</p>
                        <a href="#">Rochfis Subiantoro</a>
                    </div>
                    <span class="ms-auto">14 beberapa jam yang lalu</span>
                </div>

                <div class="news-author d-flex flex-wrap align-items-center">
                    <img src="{{ asset('images/author/shoeib-abolhassani-ojl7T2Ah93U-unsplash.jpg') }}" class="img-fluid news-author-image" alt="Foto Penulis Komentar 2">
                    <div class="ms-4 w-50">
                        <p class="mb-2">Makanannya enak akan cita rasa kuliner tradisional dari beberapa daerah termasuk ikan kuah kuning dicampur dengan papeda yang khas dari papua</p>
                        <a href="#">Azzahra Kartika Ramadhiani</a>
                    </div>
                    <span class="ms-auto">3 beberapa hari yang lalu</span>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
