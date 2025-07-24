<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\MenuItem; // <-- 1. Tambahkan baris ini untuk mengimpor model

class PageController extends Controller
{
    /**
     * Menampilkan halaman Beranda.
     */
    public function index(): View
    {
        return view('index');
    }

    /**
     * Menampilkan halaman Cerita (About).
     */
    public function about(): View
    {
        return view('about');
    }

    /**
     * Menampilkan halaman Menu dengan data dinamis dari database.
     */
    public function menu(): View
    {
        // 2. Ambil data dari database, kelompokkan berdasarkan kategori
        $makanan = MenuItem::where('category', 'Makanan')->get();
        $minuman = MenuItem::where('category', 'Minuman')->get();
        $daging = MenuItem::where('category', 'Daging')->get();
        $lainnya = MenuItem::where('category', 'Lainnya')->get();

        // 3. Kirim data tersebut ke view 'menu.blade.php'
        return view('menu', compact('makanan', 'minuman', 'daging', 'lainnya'));
    }

    /**
     * Menampilkan halaman Pembaruan (News).
     */
    public function news(): View
    {
        return view('news');
    }
    
    /**
     * Menampilkan halaman Detail Berita.
     */
    public function newsDetail(): View
    {
        return view('news-detail');
    }

    /**
     * Menampilkan halaman Kontak.
     */
    public function contact(): View
    {
        return view('contact');
    }
}
