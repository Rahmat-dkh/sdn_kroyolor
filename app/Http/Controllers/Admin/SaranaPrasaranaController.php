<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SaranaPrasarana;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SaranaPrasaranaController extends Controller
{
    public function index()
    {
        $saranas = SaranaPrasarana::latest()->paginate(10);
        return view('admin.sarana.index', compact('saranas'));
    }

    public function create()
    {
        return view('admin.sarana.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:5120'
        ]);

        $data = $request->all();
        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('sarana', 'public');
        }

        SaranaPrasarana::create($data);
        return redirect()->route('sarana.index')->with('success', 'Sarana Prasarana berhasil ditambahkan');
    }

    public function edit(SaranaPrasarana $sarana)
    {
        return view('admin.sarana.edit', compact('sarana'));
    }

    public function update(Request $request, SaranaPrasarana $sarana)
    {
        $request->validate([
            'nama' => 'required',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:5120'
        ]);

        $data = $request->all();
        if ($request->hasFile('foto')) {
            if ($sarana->foto) Storage::disk('public')->delete($sarana->foto);
            $data['foto'] = $request->file('foto')->store('sarana', 'public');
        }

        $sarana->update($data);
        return redirect()->route('sarana.index')->with('success', 'Sarana Prasarana berhasil diperbarui');
    }

    public function destroy(SaranaPrasarana $sarana)
    {
        if ($sarana->foto) Storage::disk('public')->delete($sarana->foto);
        $sarana->delete();
        return redirect()->route('sarana.index')->with('success', 'Sarana Prasarana berhasil dihapus');
    }
}
