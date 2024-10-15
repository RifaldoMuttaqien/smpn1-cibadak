<?php

namespace App\Http\Controllers\BackEnd;
use App\Models\Guru;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GuruController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $guru = Guru::all();
        return view('admin.guru.index', compact('guru'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.guru.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate(
            [
                'nama_guru' => 'required|min:5',
                'nip' => 'required|numeric',
                'mapel' => 'required|min:5',
                'foto' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            ]);

            $foto = $request->file('foto');
$foto->storeAs('public/guru', $foto->hashName()); 
            
            Guru::create([
                'nama_guru' => $request->nama_guru,
                'nip' => $request->nip,
                'mapel' => $request->mapel,
                'foto' => $foto->hashName(),
            ]);
            return redirect()->route('guru.index')->with(['success' => 'Data Berhasil Disimpan!']);
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
        $guru = Guru::findOrFail(($id));
        return view('admin.guru.edit', compact('guru'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate(
            [
                'nama_guru' => 'required|min:5',
                'nip' => 'required|numeric',
                'mapel' => 'required|min:5',
                'foto' => 'image|mimes:jpeg,jpg,png|max:2048',
            ]);

        $guru = Guru::findOrFail($id);

        if($request->hasFile('foto')){
            $foto = $request->file('foto');
            $foto->storeAs('public/guru', $foto->hashName()); 

            Storage::delete('public/guru/'.$guru->foto);

            $guru->update(
                [
                    'nama_guru' => $request->nama_guru,
                    'nip' => $request->nip,
                    'mapel' => $request->mapel,
                    'foto' => $foto->hashName(),
                ]);
        } else {
            $guru->update([
                'nama_guru' => $request->nama_guru,
                'nip' => $request->nip,
                'mapel' => $request->mapel,
            ]);
            
        }
        return redirect()->route('guru.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
