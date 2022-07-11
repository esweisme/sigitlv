<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesan;

class PesanController extends Controller
{
    public function index()
    {   
        return view('front.kontak');
    }

    public function lihatpesan()
    {   
        $pesan = Pesan::all();
        return view('admin.pesan', compact('pesan'));
    }

    public function store(Request $request)
    {   
        //dd($request);
        //return view('kontak');

        $pesan = new Pesan;
        $pesan->pengirim = $request->nama;
        $pesan->alamat = $request->alamat;
        $pesan->pesan = $request->pesan;
        $pesan->tanggal = now();
        $pesan->save();

         return redirect('/kontak')->with('status', 'sukses');
    }
}
