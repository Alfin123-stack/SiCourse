<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrol extends Model
{
    use HasFactory;

    // Menentukan nama tabel yang digunakan oleh model ini
    protected $table = 'enrol';

    // Menentukan kolom-kolom yang dapat diisi secara mass-assignment
    protected $fillable = [
        'IdEnrol',
        'IdSiswa', 
        'IdKursus', 
        'Status',
        'tanggal',
        'price',             // Harga kursus
        'payment_method',    // Metode pembayaran
        'additional_notes',  // Catatan tambahan
    ];

    // Relasi dengan Siswa (Many-to-One)
    public function Siswa()
    {
        return $this->belongsTo(Siswa::class, 'IdSiswa');
    }
    
    // Relasi dengan Kursus (Many-to-One)
    public function Kursus()
    {
        return $this->belongsTo(Kursus::class, 'IdKursus');
    }
}
