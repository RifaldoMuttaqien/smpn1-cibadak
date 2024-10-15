<?php

namespace App\Http\Controllers\BackEnd;
use App\Models\Ekstrakurikuler;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EkstrakulikulerController extends Controller
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
        $ekstrakulikuler = Ekstrakurikuler::all();
        return view('admin.eskul.index', compact('ekstrakulikuler'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.eskul.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate(
        [
            'nama_kegiatan' => 'required',
            'deskripsi' => 'required|min:5',
            'foto_kegiatan' => 'required|image|mimes:jpeg,jpg,png|max:2048',
        ]
    );

    $foto_kegiatan = $request->file('foto_kegiatan');
    $foto_kegiatan->storeAs('public/foto_kegiatan', $foto_kegiatan->hashName());

    Ekstrakurikuler::create([
        'nama_kegiatan' => $request->nama_kegiatan,
        'deskripsi' => $request->deskripsi,
        'foto_kegiatan' => $foto_kegiatan->hashName(),
    ]);

    return redirect()->route('eskul.index')->with(['success' => 'Data Berhasil Disimpan!']);
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
        $ekstrakulikuler = Ekstrakurikuler::findOrFail($id);

        Storage::delete('public/foto_kegiatan/'. $ekstrakulikuler->foto_kegiatan);
    
        $ekstrakulikuler->delete();
        return redirect()->route('eskul.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
