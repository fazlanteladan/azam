<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController extends Controller
{
    public function index()
{
    $buku = Buku::all();
    return view('buku.index', compact('buku'));
}

public function create()
{
    return view('buku.create');
}

public function store(Request $request)
{
    $request->validate([
        'judul' => 'required',
        'penulis' => 'required',
        'penerbit' => 'required',
        'tahun_terbit' => 'required'
    ]);

    Buku::create($request->all());

    return redirect('/buku')
            ->with('success', 'Data berhasil ditambahkan');
}

public function edit($id)
{
    $buku = Buku::findOrFail($id);
    return view('buku.edit', compact('buku'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'judul' => 'required',
        'penulis' => 'required',
        'penerbit' => 'required',
        'tahun_terbit' => 'required'
    ]);

    $buku = Buku::findOrFail($id);

    $buku->update($request->all());

    return redirect('/buku')
            ->with('success', 'Data berhasil diupdate');
}

public function destroy($id)
{
    $buku = Buku::findOrFail($id);

    $buku->delete();

    return redirect('/buku');
}


}
