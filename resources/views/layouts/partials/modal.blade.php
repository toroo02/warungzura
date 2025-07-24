{{-- /resources/views/layouts/partials/modal.blade.php --}}

<div class="modal fade" id="BookingModal" tabindex="-1" aria-labelledby="BookingModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="mb-0">Pesan meja</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body d-flex flex-column justify-content-center">
                <div class="booking">
                    
                    {{-- Nantinya, action ini akan diarahkan ke route Laravel untuk memproses data --}}
                    <form class="booking-form row" role="form" action="#" method="post">
                        {{-- @csrf adalah token keamanan yang wajib ada di setiap form Laravel --}}
                        @csrf

                        <div class="col-lg-6 col-12">
                            <label for="name" class="form-label">Nama Lengkap</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Nama Anda" required>
                        </div>

                        <div class="col-lg-6 col-12">
                            <label for="email" class="form-label">Alamat Email</label>
                            <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="email@anda.com" required>
                        </div>

                        <div class="col-lg-6 col-12">
                            <label for="phone" class="form-label">Nomer Telepon</label>
                            <input type="tel" name="phone" id="phone" class="form-control" placeholder="0812-3456-7890">
                        </div>

                        <div class="col-lg-6 col-12">
                            <label for="people" class="form-label">Jumlah orang</label>
                            <input type="number" name="people" id="people" class="form-control" placeholder="2 orang">
                        </div>

                        <div class="col-lg-6 col-12">
                            <label for="date" class="form-label">Tanggal</label>
                            <input type="date" name="date" id="date" value="" class="form-control">
                        </div>

                        <div class="col-lg-6 col-12">
                            <label for="time" class="form-label">Waktu</label>
                            <select class="form-select form-control" name="time" id="time">
                              <option value="17:00" selected>5:00 PM</option>
                              <option value="18:00">6:00 PM</option>
                              <option value="19:00">7:00 PM</option>
                              <option value="20:00">8:00 PM</option>
                              <option value="21:00">9:00 PM</option>
                            </select>
                        </div>

                        <div class="col-12">
                            <label for="message" class="form-label">Permintaan Khusus</label>
                            <textarea class="form-control" rows="4" id="message" name="message" placeholder="Contoh: Saya butuh kursi bayi"></textarea>
                        </div>

                        <div class="col-lg-4 col-12 ms-auto">
                            <button type="submit" class="form-control">Kirim Permintaan</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="modal-footer"></div>
        </div>
    </div>
</div>
