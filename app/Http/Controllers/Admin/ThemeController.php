<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class ThemeController extends Controller
{
    /**
     * Show theme selection page.
     */
    public function index()
    {
        $themes = ['default', 'green', 'blue', 'red'];
        $active = Setting::get('theme', 'default');
        return view('admin.theme.index', compact('themes', 'active'));
    }

    /**
     * Update selected theme.
     */
    public function update(Request $request)
    {
        $request->validate([
            'theme' => 'required|in:default,green,blue,red',
        ]);

        Setting::set('theme', $request->input('theme'));

        return redirect()->back()->with('success', 'Tema berhasil diperbarui.');
    }
}
