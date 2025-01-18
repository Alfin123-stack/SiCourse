<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $data['judul'] = "SISWA";
        $data['siswa'] = Siswa::all();  // Fetch all siswa

        return view('Siswa.Siswa', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate input
        $request->validate([
            'namasiswa' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'NoHp' => 'required|string|max:15',
            'jenis_kelamin' => 'required|in:L,P',
            'foto' => 'nullable|image|max:2048', // Validate image file if provided
        ]);

        // Create a new siswa instance
        $siswa = new Siswa;
        $siswa->namasiswa = $request->namasiswa;
        $siswa->email = $request->email;
        $siswa->NoHp = $request->NoHp;
        $siswa->jenis_kelamin = $request->jenis_kelamin;

        // Handle photo upload if present
        if ($request->hasFile('foto')) {
            // Store the uploaded photo in the 'photos' folder
            $path = $request->file('foto')->store('photos', 'public');
            $siswa->foto = $path;  // Save the file path in the database
        }

        // Save the new siswa record
        $siswa->save();

        // Redirect back with success message
        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil disimpan!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($nama)
    {
        // Mencari siswa berdasarkan nama pengguna yang terautentikasi
        $siswa = Siswa::where('namasiswa', $nama)->firstOrFail();

        // Mengirim data siswa ke tampilan
        return view('Siswa.Siswa', compact('siswa'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $nama)
    {
        // Validasi input
        $request->validate([
            'namasiswa' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'NoHp' => 'required|string|max:15',
            'jenis_kelamin' => 'required|in:L,P',
            'foto' => 'nullable|image|max:2048', // Validasi gambar jika ada
        ]);

        // Cari siswa berdasarkan nama
        $siswa = Siswa::where('namasiswa', $nama)->firstOrFail();

        // Update data siswa
        $siswa->namasiswa = $request->namasiswa;
        $siswa->email = $request->email;
        $siswa->NoHp = $request->NoHp;
        $siswa->jenis_kelamin = $request->jenis_kelamin;

        // Proses upload foto jika ada
        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($siswa->foto) {
                \Storage::disk('public')->delete($siswa->foto);
            }

            // Simpan foto baru
            $path = $request->file('foto')->store('photos', 'public');
            $siswa->foto = $path;  // Simpan path foto baru
        }

        // Simpan perubahan ke database
        $siswa->save();

        // Redirect ke halaman edit dengan pesan sukses
        return redirect()->route('siswa.edit', ['nama' => $siswa->namasiswa])
            ->with('success', 'Data siswa berhasil diperbarui!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Find the siswa by ID
        $siswa = Siswa::findOrFail($id);
        
        // Delete the photo if it exists
        if ($siswa->foto) {
            \Storage::disk('public')->delete($siswa->foto);
        }

        // Delete the siswa record
        $siswa->delete();

        // Redirect with success message
        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil dihapus!');
    }
}
