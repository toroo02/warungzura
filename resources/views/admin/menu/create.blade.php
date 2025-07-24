@extends('layouts.admin')

@section('title', 'Tambah Item Menu Baru')

@section('content')
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Form Tambah Item Menu</h4>
    </div>
    <div class="card-body">
        {{-- Menampilkan error validasi jika ada --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.menu.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama Item</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Deskripsi (Opsional)</label>
                <textarea class="form-control" id="description" name="description" rows="3">{{ old('description') }}</textarea>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Harga</label>
                <div class="input-group">
                    <span class="input-group-text">Rp</span>
                    <input type="number" class="form-control" id="price" name="price" value="{{ old('price') }}" required step="100">
                </div>
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Kategori</label>
                <select class="form-select" id="category" name="category" required>
                    <option value="" disabled selected>Pilih Kategori...</option>
                    <option value="Makanan" {{ old('category') == 'Makanan' ? 'selected' : '' }}>Makanan</option>
                    <option value="Minuman" {{ old('category') == 'Minuman' ? 'selected' : '' }}>Minuman</option>
                    <option value="Daging" {{ old('category') == 'Daging' ? 'selected' : '' }}>Daging</option>
                    <option value="Lainnya" {{ old('category') == 'Lainnya' ? 'selected' : '' }}>Lainnya</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Gambar Item (Opsional)</label>
                <input class="form-control" type="file" id="image" name="image">
            </div>
            <div class="d-flex justify-content-end">
                <a href="{{ route('admin.menu.index') }}" class="btn btn-secondary me-2">Batal</a>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection
