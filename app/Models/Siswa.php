<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    // Menentukan nama tabel yang digunakan oleh model ini
    protected $table = 'siswa';
    protected $primaryKey = 'IdSiswa'; // Kolom primary key

    // Menentukan kolom-kolom yang dapat diisi secara mass-assignment
    protected $fillable = [
        'namasiswa', 
        'email', 
        // 'NoHp',
        // 'jenis_kelamin', 
        // 'foto', // Include the 'foto' field
    ];

    // Relasi One-to-Many dengan Kursus jika ada, bisa ditambahkan di sini (misalnya jika siswa mengikuti banyak kursus)
    // public function kursus()
    // {
    //     return $this->hasMany(Kursus::class, 'IdSiswa', 'IdSiswa');
    // }
}
