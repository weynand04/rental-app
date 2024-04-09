<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\MobilStoreRequest;
use App\Http\Requests\Admin\MobilUpdateRequest;
use App\Models\Mobil;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    public function index()
    {
        $mobil = Mobil::latest()->get();
        return view('admin.mobil.index', compact('mobil'));
    }

    public function create()
    {
        return view('admin.mobil.create');
    }

    public function store(MobilStoreRequest $request)
    {
        if ($request->validated()) {
            $gambar = $request
                ->file('gambar')
                ->store('gambar/mobil', 'public');
            $slug = Str::slug($request->nama, '-');
            Mobil::create($request
                ->except('gambar') + ['gambar' => $gambar, 'slug' => $slug]);
        }

        return redirect()
            ->route('admin.mobil.index')
            ->with([
                'message' => 'Data Sukses ditambahkan',
                'alert-type' => 'success'
            ]);
    }

    public function edit(Mobil $mobil)
    {
        return view('admin.mobil.edit', compact('mobil'));
    }

    public function update(MobilUpdateRequest $request, Mobil $mobil)
    {
        if ($request->validated()) {
            $slug = Str::slug($request->nama, '-');
            $mobil->update($request->validated() + ['slug' => $slug]);
        }

        return redirect()
            ->route('admin.mobil.index')
            ->with([
                'message' => 'Data Sukses didit',
                'alert-type' => 'success'
            ]);
    }

    public function updateGambar(Request $request, $mobilId)
    {
        $request->validate([
            'gambar' => 'required|image'
        ]);
        $mobil = Mobil::findOrFail($mobilId);
        if ($request->gambar) {
            unlink('storage/' . $mobil->gambar);

            $gambar = $request->file('gambar')->store(
                'assets/mobil',
                'public'
            );

            $mobil->update(['gambar' => $gambar]);
        }

        return redirect()->back()->with([
            'message' => 'gambar berhasil diedit',
            'alert-type' => 'info'
        ]);
    }

    public function destroy(Mobil $mobil)
    {
        if ($mobil->gambar) {
            unlink('storage/' . $mobil->gambar);
        }
        $mobil->delete();

        return redirect()->back()->with([
            'message' => 'Data berhasil dihapus',
            'alert-type' => 'danger'
        ]);
    }

}
