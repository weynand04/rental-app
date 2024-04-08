<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\MobilStoreRequest;
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
            ->route('mobil.index')
            ->with([
                'message' => 'Data Sukses ditambahkan',
                'alert-type' => 'success'
            ]);
    }

}
