<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Cache;

class StaffController extends Controller
{
    public function index()
    {
        $staffs = Staff::orderBy('nama')->paginate(10);
        return view('admin.staff.index', compact('staffs'));
    }

    public function create()
    {
        return view('admin.staff.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'kategori' => 'required|in:guru,tendik',
            'foto' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $data = $request->all();
        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('staff', 'public');
        }

        Staff::create($data);
        Cache::forget('staff_list');

        return redirect()->route('staff.index')->with('success', 'Staff berhasil ditambahkan');
    }

    public function edit(Staff $staff)
    {
        return view('admin.staff.edit', compact('staff'));
    }

    public function update(Request $request, Staff $staff)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'kategori' => 'required|in:guru,tendik',
            'foto' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $data = $request->all();
        if ($request->hasFile('foto')) {
            if ($staff->foto) Storage::disk('public')->delete($staff->foto);
            $data['foto'] = $request->file('foto')->store('staff', 'public');
        }

        $staff->update($data);
        Cache::forget('staff_list');

        return redirect()->route('staff.index')->with('success', 'Staff berhasil diperbarui');
    }

    public function destroy(Staff $staff)
    {
        if ($staff->foto) Storage::disk('public')->delete($staff->foto);
        $staff->delete();
        Cache::forget('staff_list');

        return redirect()->route('staff.index')->with('success', 'Staff berhasil dihapus');
    }
}
