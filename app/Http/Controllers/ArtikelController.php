<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ArtikelController extends Controller
{
    public function index(Request $request)
    {
        $selectedCategory = $request->query('category');

        if ($selectedCategory) {
            $artikels = Artikel::where('kategori', $selectedCategory)->get();
        } else {
            $artikels = Artikel::all();
        }

        $populerArtikels = Artikel::where('jenis', 'populer')->limit(5)->get();
        $terbaruArtikels = Artikel::latest()->limit(5)->get();
        $rekomendasiArtikels = Artikel::where('jenis', 'rekomendasi')->limit(5)->get();
        $TopArtikels = Artikel::where('jenis', 'top1')->limit(1)->get();
        $Top2Artikels = Artikel::where('jenis', 'top2')->limit(1)->get();

        $categories = Artikel::select('kategori')
            ->selectRaw('count(*) as jumlah_artikel')
            ->groupBy('kategori')
            ->get();

        return view('blog', compact('artikels', 'populerArtikels', 'terbaruArtikels', 'rekomendasiArtikels', 'TopArtikels', 'Top2Artikels', 'categories'));
    }
    public function search(Request $request)
    {
        $searchQuery = $request->input('search');

        $artikels = Artikel::where('judul', 'LIKE', "%$searchQuery%")->get();

        $populerArtikels = Artikel::where('jenis', 'populer')->get();

        $TopArtikels = Artikel::where('jenis', 'top1')->get();

        $Top2Artikels = Artikel::where('jenis', 'top2')->get();

        $rekomendasiArtikels = Artikel::where('jenis', 'rekomendasi')->get();

        $terbaruArtikels = Artikel::latest()->get();

        $categories = Artikel::select('kategori')
            ->selectRaw('count(*) as jumlah_artikel')
            ->groupBy('kategori')
            ->get();

        return view('blog', compact('artikels', 'populerArtikels', 'TopArtikels', 'terbaruArtikels', 'rekomendasiArtikels', 'Top2Artikels', 'categories'));
    }

    public function showDetail($id)
    {
        $artikel = Artikel::find($id);

        if ($artikel) {
            return view('detail-blog', compact('artikel'));
        } else {
            abort(404);
        }
    }


    public function show($id)
    {
        $artikel = Artikel::find($id);

        if ($artikel) {
            return response()->json(['data' => $artikel], 200);
        } else {
            return response()->json(['message' => 'Artikel not found'], 404);
        }
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'judul' => 'required|string',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'deskripsi' => 'required|string',
            'kategori' => 'required|string',
            'jenis' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        $imageName = time() . '.' . $request->gambar->extension();
        $request->gambar->move(public_path('artikel/'), $imageName);

        $artikel = Artikel::create([
            'judul' => $request->judul,
            'gambar' => $imageName,
            'deskripsi' => $request->deskripsi,
            'kategori' => $request->kategori,
            'jenis' => $request->jenis,
        ]);

        return response()->json(['data' => $artikel], 201);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'judul' => 'required|string',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'deskripsi' => 'required|string',
            'kategori' => 'required|string',
            'jenis' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        $artikel = Artikel::find($id);

        if (!$artikel) {
            return response()->json(['message' => 'Artikel not found'], 404);
        }

        if ($request->hasFile('gambar')) {
            $imageName = time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('artikel/'), $imageName);
        } else {
            $imageName = $artikel->gambar;
        }

        $artikel->update([
            'judul' => $request->judul,
            'gambar' => $imageName,
            'deskripsi' => $request->deskripsi,
            'kategori' => $request->kategori,
            'jenis' => $request->jenis,
        ]);

        return response()->json(['data' => $artikel], 200);
    }

    public function destroy($id)
    {
        $artikel = Artikel::find($id);

        if ($artikel) {
            $artikel->delete();
            return response()->json(['message' => 'Artikel deleted successfully'], 200);
        } else {
            return response()->json(['message' => 'Artikel not found'], 404);
        }
    }
}
