{{-- /resources/views/contact.blade.php --}}

@extends('layouts.app')

@section('title', 'Hubungi Kami - Warung Zura')

@section('content')

<header class="site-header site-contact-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-12 mx-auto">
                <h1 class="text-white">SELAMAT DATANG</h1>
                <strong class="text-white">SEMOGA PUAS DENGAN PELAYANAN KAMI</strong>
            </div>
        </div>
    </div>
    <div class="overlay"></div>
</header>

<section class="contact section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="mb-4">Tinggalkan pesan</h2>
            </div>

            <div class="col-lg-6 col-12">
                {{-- Nantinya, action form ini akan diarahkan ke route untuk memproses pesan --}}
                <form class="custom-form contact-form row" action="#" method="post" role="form">
                    @csrf
                    <div class="col-lg-6 col-6">
                        <label for="contact-name" class="form-label">Nama Lengkap</label>
                        <input type="text" name="contact-name" id="contact-name" class="form-control" placeholder="Nama Anda" required>
                    </div>

                    <div class="col-lg-6 col-6">
                        <label for="contact-phone" class="form-label">Nomor telepon</label>
                        <input type="tel" name="contact-phone" id="contact-phone" class="form-control" placeholder="0812-3456-7890">
                    </div>

                    <div class="col-12">
                        <label for="contact-email" class="form-label">E-mail</label>
                        <input type="email" name="contact-email" id="contact-email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email Anda" required>

                        <label for="contact-message" class="form-label">Pesan</label>
                        <textarea class="form-control" rows="5" id="contact-message" name="contact-message" placeholder="Pesan Anda"></textarea>
                    </div>

                    <div class="col-lg-5 col-12 ms-auto">
                        <button type="submit" class="form-control">Kirim</button>
                    </div>
                </form>
            </div>

            <div class="col-lg-4 col-12 mx-auto mt-lg-5 mt-4">
                <h5>Hari Kerja</h5>
                <div class="d-flex mb-lg-3">
                    <p>Senin - Jumat</p>
                    <p class="ms-5">08:00 AM - 08:00 PM</p>
                </div>
                <h5>Akhir Pekan</h5>
                <div class="d-flex">
                    <p>Sabtu & Minggu</p>
                    <p class="ms-5">11:00 AM - 11:00 PM</p>
                </div>
            </div>

            <div class="col-12">
                <h4 class="mt-5 mb-4">JF7Q+342, Bumi Wonorejo, Distrik Nabire, Kabupaten Nabire, Papua 98818</h4>
                <div class="google-map pt-3">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.84768933602!2d135.4851799748102!3d-3.387352296587263!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x681f99414801dceb%3A0xa5c769923439643b!2szahra%20habib!5e0!3m2!1sid!2sid!4v1745329305345!5m2!1sid!2sid" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
