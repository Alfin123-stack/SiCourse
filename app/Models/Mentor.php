<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{
    use HasFactory;

    // Menentukan nama tabel yang digunakan oleh model ini
    protected $table = 'mentor';
    protected $primaryKey = 'IdMentor';

    // Menentukan kolom-kolom yang dapat diisi secara mass-assignment
    protected $fillable = [
        'IdMentor',
        'namaMentor', 
        'email', 
        'NoHp',
        'Deksripsi',
        'jenis_kelamin', 
        'Skill',
    ];

    // Relasi One-to-Many dengan Kursus
    public function kursus()
    {
        return $this->hasMany(Kursus::class, 'IdMentor', 'IdMentor');
    }
}
