<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    public function index()
    {
        $galeris = Galeri::latest()->paginate(12);
        return view('admin.galeri.index', compact('galeris'));
    }

    public function create()
    {
        return view('admin.galeri.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'jenis' => 'required|in:foto,video',
            'file' => $request->jenis == 'foto' ? 'required|image|mimes:jpeg,png,jpg|max:5120' : 'nullable',
            'video_url' => $request->jenis == 'video' ? 'required|url' : 'nullable'
        ]);

        $data = $request->only(['judul', 'jenis']);
        if ($request->jenis == 'foto' && $request->hasFile('file')) {
            $data['file'] = $request->file('file')->store('galeri', 'public');
        } else {
            // Extract the video ID from URL or just store the whole URL
            $data['file'] = $request->video_url;
        }

        Galeri::create($data);
        return redirect()->route('galeri.index')->with('success', 'Item galeri berhasil ditambahkan');
    }

    public function edit(Galeri $galeri)
    {
        return view('admin.galeri.edit', compact('galeri'));
    }

    public function update(Request $request, Galeri $galeri)
    {
        $request->validate([
            'judul' => 'required',
            'jenis' => 'required|in:foto,video',
            'file' => $request->jenis == 'foto' ? 'nullable|image|mimes:jpeg,png,jpg|max:5120' : 'required'
        ]);

        $data = $request->all();
        if ($request->jenis == 'foto' && $request->hasFile('file')) {
            if ($galeri->file && $galeri->jenis == 'foto') Storage::disk('public')->delete($galeri->file);
            $data['file'] = $request->file('file')->store('galeri', 'public');
        }

        $galeri->update($data);

        return redirect()->route('galeri.index')->with('success', 'Item galeri berhasil diperbarui');
    }

    public function destroy(Galeri $galeri)
    {
        if ($galeri->file && $galeri->jenis == 'foto') Storage::disk('public')->delete($galeri->file);
        $galeri->delete();

        return redirect()->route('galeri.index')->with('success', 'Item galeri berhasil dihapus');
    }
}
