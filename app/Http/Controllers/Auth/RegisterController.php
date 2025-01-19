<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Siswa; // Import model Siswa
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    // Menampilkan form registrasi
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    // Menangani pendaftaran pengguna baru
    public function register(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Menyimpan pengguna baru ke database
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Menyimpan password yang telah di-hash
        ]);

        // Menyimpan data siswa dengan nama yang sama seperti 'name' pengguna
        Siswa::create([
            'namasiswa' => $request->name, // Menggunakan nama yang dimasukkan di form
            'email' => $request->email,    // Jika perlu, Anda juga bisa menyertakan email di tabel siswa
            // Kolom lain seperti NoHp, jenis_kelamin, dan foto bisa ditambahkan sesuai kebutuhan
        ]);

        // Setelah sukses, Anda bisa mengalihkan ke halaman login atau dashboard
        return redirect('/')->with('success', 'Pendaftaran berhasil, silakan login.');
    }
}
