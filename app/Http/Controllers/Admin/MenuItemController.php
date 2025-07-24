<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MenuItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class MenuItemController extends Controller
{
    /**
     * Menampilkan daftar semua item menu.
     */
    public function index()
    {
        $menuItems = MenuItem::latest()->paginate(10);
        return view('admin.menu.index', compact('menuItems'));
    }

    /**
     * Menampilkan form untuk membuat item menu baru.
     */
    public function create()
    {
        return view('admin.menu.create');
    }

    /**
     * Menyimpan item menu baru ke database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'category' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('menu_images', 'public');
        }

        MenuItem::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'category' => $request->input('category'),
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.menu.index')->with('success', 'Item menu berhasil ditambahkan.');
    }

    /**
     * Menampilkan form untuk mengedit item menu.
     */
    public function edit(MenuItem $menu)
    {
        return view('admin.menu.edit', compact('menu'));
    }

    /**
     * Memperbarui item menu di database.
     */
    public function update(Request $request, MenuItem $menu)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'category' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imagePath = $menu->image;
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($imagePath && Storage::disk('public')->exists($imagePath)) {
                Storage::disk('public')->delete($imagePath);
            }
            $imagePath = $request->file('image')->store('menu_images', 'public');
        }

        $menu->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'category' => $request->input('category'),
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.menu.index')->with('success', 'Item menu berhasil diperbarui.');
    }

    /**
     * Menghapus item menu dari database.
     */
    public function destroy(MenuItem $menu)
    {
        // Hapus gambar dari storage
        if ($menu->image && Storage::disk('public')->exists($menu->image)) {
            Storage::disk('public')->delete($menu->image);
        }
        
        $menu->delete();

        return redirect()->route('admin.menu.index')->with('success', 'Item menu berhasil dihapus.');
    }
}
