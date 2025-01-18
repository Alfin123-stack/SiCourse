<?php

namespace App\Http\Controllers;
use App\Models\Ulasan;
use App\Models\Kursus; 
use Illuminate\Http\Request;

class UlasanController extends Controller
{
    public function index()

    // public function index()
    {
        $data['judul'] = "ULASAN";
        $data['ulasan'] = Ulasan::All();

        return view('Ulasan.ulasan', $data);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $kursusId)
    {
        // Validasi input
        $request->validate([
            'NamaSiswa' => 'required|string|max:255',
            'Universitas' => 'required|string|max:255',
            'Rating' => 'required|integer|between:1,5',
            'Komentar' => 'required|string|max:1000',
        ]);
    
        // Ambil kursus berdasarkan ID
        $kursus = Kursus::findOrFail($kursusId);
    
        // Simpan ulasan ke database
        Ulasan::create([
            'NamaSiswa' => $request->NamaSiswa,
            'Universitas' => $request->Universitas,
            'Rating' => $request->Rating,
            'Komentar' => $request->Komentar,
            'IdKursus' => $kursusId, // ID Kursus yang sedang diulas
            // Tidak perlu lagi mengirimkan NamaKursus, karena kita dapat mengaksesnya dari relasi
        ]);
    
        // Redirect ke halaman detail kursus dengan pesan sukses
        return redirect()->route('kursus.show', $kursusId)->with('success', 'Ulasan berhasil ditambahkan!');
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
