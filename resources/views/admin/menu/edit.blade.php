@extends('layouts.admin')

@section('title', 'Edit Item Menu')

@section('content')
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Form Edit Item Menu: {{ $menu->name }}</h4>
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

        <form action="{{ route('admin.menu.update', $menu->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT') {{-- Method spoofing untuk request UPDATE --}}
            
            <div class="mb-3">
                <label for="name" class="form-label">Nama Item</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $menu->name) }}" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Deskripsi (Opsional)</label>
                <textarea class="form-control" id="description" name="description" rows="3">{{ old('description', $menu->description) }}</textarea>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Harga</label>
                <div class="input-group">
                    <span class="input-group-text">Rp</span>
                    <input type="number" class="form-control" id="price" name="price" value="{{ old('price', $menu->price) }}" required step="100">
                </div>
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Kategori</label>
                <select class="form-select" id="category" name="category" required>
                    <option value="Makanan" {{ old('category', $menu->category) == 'Makanan' ? 'selected' : '' }}>Makanan</option>
                    <option value="Minuman" {{ old('category', $menu->category) == 'Minuman' ? 'selected' : '' }}>Minuman</option>
                    <option value="Daging" {{ old('category', $menu->category) == 'Daging' ? 'selected' : '' }}>Daging</option>
                    <option value="Lainnya" {{ old('category', $menu->category) == 'Lainnya' ? 'selected' : '' }}>Lainnya</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Ganti Gambar (Opsional)</label>
                <input class="form-control" type="file" id="image" name="image">
                @if($menu->image)
                    <div class="mt-2">
                        <small>Gambar saat ini:</small><br>
                        <img src="{{ Storage::url($menu->image) }}" alt="{{ $menu->name }}" class="img-thumbnail-small mt-1">
                    </div>
                @endif
            </div>
            <div class="d-flex justify-content-end">
                <a href="{{ route('admin.menu.index') }}" class="btn btn-secondary me-2">Batal</a>
                <button type="submit" class="btn btn-primary">Perbarui</button>
            </div>
        </form>
    </div>
</div>
@endsection
