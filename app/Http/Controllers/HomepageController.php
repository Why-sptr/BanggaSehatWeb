<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Dokter;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $artikels = Artikel::limit(10)->get();
        $dokters = Dokter::limit(10)->get();

        return view('homepage', compact('artikels','dokters'));
    }

    public function showByCategory($category)
    {
        $populerArtikels = Artikel::where('jenis', 'populer')->limit(5)->get();
        $terbaruArtikels = Artikel::latest()->limit(5)->get();
        $rekomendasiArtikels = Artikel::where('jenis', 'rekomendasi')->limit(5)->get();
        $TopArtikels = Artikel::where('jenis', 'top1')->limit(1)->get();
        $Top2Artikels = Artikel::where('jenis', 'top2')->limit(1)->get();
        $artikels = Artikel::where('kategori', $category)->get();
        $categories = Artikel::select('kategori')
            ->selectRaw('count(*) as jumlah_artikel')
            ->groupBy('kategori')
            ->get();
            
        return view('blog', compact('artikels', 'populerArtikels', 'terbaruArtikels', 'rekomendasiArtikels', 'TopArtikels', 'Top2Artikels', 'categories'));
    }
}
