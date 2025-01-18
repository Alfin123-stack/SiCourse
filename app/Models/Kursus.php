<?php

namespace App\Models;

use App\Models\Mentor;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kursus extends Model
{
    use HasFactory;

    // Menentukan nama tabel yang digunakan oleh model ini
    protected $table = 'kursus';

    protected $primaryKey = 'IdKursus';
    public $incrementing = true;
    protected $keyType = 'int';

    // Menentukan kolom-kolom yang dapat diisi secara mass-assignment
    protected $fillable = [
        'IdKursus',
        'nama', 
        'DeskripsiKursus',  // Corrected column name
        'InformasiTambahan',
        'IdMentor',
        'materi_kursus', 
        'jadwal_kursus',
        'lama_kursus',  
        'rating',
        'url_gambar',
        'jumlah_peserta',
        'harga_kursus',
    ];    

    // Relasi Many-to-One dengan Mentor
    public function Mentor()
    {
        // Nama method harus lowercase, tidak menggunakan huruf kapital
        return $this->belongsTo(Mentor::class, 'IdMentor');
    }

    public function ulasan()
    {
        return $this->hasMany(Ulasan::class, 'IdKursus');
    }
}
