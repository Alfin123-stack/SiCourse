<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ulasan extends Model
{
    use HasFactory;

    // Menentukan nama tabel yang digunakan oleh model ini
    protected $table = 'ulasan';

    // Menentukan kolom-kolom yang dapat diisi secara mass-assignment
    protected $fillable = [
        'NamaSiswa',
        'Universitas',
        'IdKursus',
        'NamaKursus', // Menyimpan nama kursus, jika perlu
        'Rating',
        'Komentar',
    ];

    // Relasi ke model Kursus
    public function Kursus()
    {
        return $this->belongsTo(Kursus::class, 'IdKursus');
    }
}
