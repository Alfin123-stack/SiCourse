<?php
namespace App\Http\Controllers;
use App\Models\Kursus;
use App\Models\Ulasan; // Tambahkan model Ulasan
use Illuminate\Http\Request;

class KursusController extends Controller
{
    public function index()
    {
        $data['judul'] = "KURSUS";
        // Mengambil semua data kursus beserta data mentor
        $data['kursus'] = Kursus::with('mentor')->get();

        return view('Kursus.kursus', $data);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $kursus = Kursus::with('ulasan')->find($id); // Mengambil kursus beserta ulasannya

        if (!$kursus) {
            return abort(404); // Jika kursus tidak ditemukan
        }

        return view('kursus.detail', compact('kursus'));
    }


}


