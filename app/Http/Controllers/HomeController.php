<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\mobil;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $mobil = mobil::latest()->get();

        return view("homepage.landing", compact('mobil'));
    }
    public function aboutus()
    {
        return view("homepage.aboutus");
    }
    public function contactus()
    {
        return view("homepage.contactus");
    }

    public function contactStore(Request $request)
    {
        $data = $request->validate([
            "nama" => "required",
            "email" => "required",
            "subject" => "required",
            "pesan" => "required",
        ]);

        Message::create($data);
        return redirect()->back()->with([
            'message' => 'Pesan Anda berhasil terkirim',
            'alert-type' => 'warning'
        ]);
    }
    public function detail()
    {
        return view("homepage.detail");
    }
}
