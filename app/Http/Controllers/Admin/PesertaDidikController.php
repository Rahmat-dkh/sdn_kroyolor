<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PesertaDidik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PesertaDidikController extends Controller
{
    public function index()
    {
        $siswas = PesertaDidik::orderBy('judul')->paginate(15);
        return view('admin.siswa.index', compact('siswas'));
    }

    public function create()
    {
        return view('admin.siswa.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'nullable',
            'foto' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $data = $request->all();
        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('siswa', 'public');
        }

        PesertaDidik::create($data);

        return redirect()->route('peserta-didik.index')->with('success', 'Peserta didik berhasil ditambahkan');
    }

    public function edit(PesertaDidik $pesertaDidik)
    {
        return view('admin.siswa.edit', compact('pesertaDidik'));
    }

    public function update(Request $request, PesertaDidik $pesertaDidik)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'nullable',
            'foto' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $data = $request->all();
        if ($request->hasFile('foto')) {
            if ($pesertaDidik->foto) Storage::disk('public')->delete($pesertaDidik->foto);
            $data['foto'] = $request->file('foto')->store('siswa', 'public');
        }

        $pesertaDidik->update($data);

        return redirect()->route('peserta-didik.index')->with('success', 'Peserta didik berhasil diperbarui');
    }

    public function destroy(PesertaDidik $pesertaDidik)
    {
        if ($pesertaDidik->foto) Storage::disk('public')->delete($pesertaDidik->foto);
        $pesertaDidik->delete();

        return redirect()->route('peserta-didik.index')->with('success', 'Peserta didik berhasil dihapus');
    }
}
