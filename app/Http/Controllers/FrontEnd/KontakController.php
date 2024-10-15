<?php

namespace App\Http\Controllers\FrontEnd;
use App\Models\Kontak;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $kontak = Kontak::all();
        return view('kontak', compact('kontak'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('kontak');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nama_lengkap' => 'required|min:5',
            'email' => 'required|string|email|max:255|unique:users',
            'no_hp' => 'required|numeric',
            'isi_pesan' => 'required|min:10',
        ]);
        Kontak::create([
            'nama_lengkap' => $request->nama_lengkap,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'isi_pesan' => $request->isi_pesan,
        ]);
        return redirect()->route('kontak.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
