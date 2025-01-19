<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mentor;
use App\Models\Kursus;

class DataSeederController extends Controller
{
    // Auto-Insert 10 Data ke Tabel Mentor
    public function seedMentor()
    {
        $mentors = [
            ['namaMentor' => 'John Doe', 'email' => 'john.doe@example.com', 'NoHp' => '081234567890', 'Deksripsi' => 'Ahli Python', 'jenis_kelamin' => 'L', 'Skill' => 'Python, Machine Learning'],
            ['namaMentor' => 'Jane Smith', 'email' => 'jane.smith@example.com', 'NoHp' => '081234567891', 'Deksripsi' => 'Pakar Web Development', 'jenis_kelamin' => 'P', 'Skill' => 'HTML, CSS, JavaScript'],
            ['namaMentor' => 'Mike Johnson', 'email' => 'mike.johnson@example.com', 'NoHp' => '081234567892', 'Deksripsi' => 'Spesialis Backend', 'jenis_kelamin' => 'L', 'Skill' => 'PHP, Laravel, SQL'],
            ['namaMentor' => 'Lisa Brown', 'email' => 'lisa.brown@example.com', 'NoHp' => '081234567893', 'Deksripsi' => 'Ahli Data Science', 'jenis_kelamin' => 'P', 'Skill' => 'Python, Pandas, Data Visualization'],
            ['namaMentor' => 'David Wilson', 'email' => 'david.wilson@example.com', 'NoHp' => '081234567894', 'Deksripsi' => 'Guru Java', 'jenis_kelamin' => 'L', 'Skill' => 'Java, Spring Boot'],
            ['namaMentor' => 'Emily Davis', 'email' => 'emily.davis@example.com', 'NoHp' => '081234567895', 'Deksripsi' => 'Frontend Specialist', 'jenis_kelamin' => 'P', 'Skill' => 'React, Vue.js'],
            ['namaMentor' => 'Chris Lee', 'email' => 'chris.lee@example.com', 'NoHp' => '081234567896', 'Deksripsi' => 'Backend Expert', 'jenis_kelamin' => 'L', 'Skill' => 'Node.js, Express.js'],
            ['namaMentor' => 'Sophia Turner', 'email' => 'sophia.turner@example.com', 'NoHp' => '081234567897', 'Deksripsi' => 'Mobile Developer', 'jenis_kelamin' => 'P', 'Skill' => 'Flutter, Dart'],
            ['namaMentor' => 'James Anderson', 'email' => 'james.anderson@example.com', 'NoHp' => '081234567898', 'Deksripsi' => 'DevOps Specialist', 'jenis_kelamin' => 'L', 'Skill' => 'Docker, Kubernetes'],
            ['namaMentor' => 'Olivia Martinez', 'email' => 'olivia.martinez@example.com', 'NoHp' => '081234567899', 'Deksripsi' => 'Cybersecurity Expert', 'jenis_kelamin' => 'P', 'Skill' => 'Ethical Hacking, Penetration Testing'],
        ];

        foreach ($mentors as $mentor) {
            Mentor::create($mentor);
        }

        return redirect()->back()->with('success', '10 Mentor berhasil ditambahkan!');
    }

    // Auto-Insert 10 Data ke Tabel Kursus
    public function seedKursus()
    {
        $kursus = [
            ['nama' => 'Belajar Python Dasar', 'DeksripsiKursus' => 'Pelajari dasar-dasar pemrograman Python.', 'InformasiTambahan' => 'Pemula', 'IdMentor' => 1, 'materi_kursus' => 'Variabel, Looping, Conditional', 'jadwal_kursus' => 'Senin & Rabu', 'lama_kursus' => 10, 'rating' => 4.5, 'url_gambar' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/python/python-original.svg', 'jumlah_peserta' => 20, 'harga_kursus' => 250000],
            ['nama' => 'Web Development dengan JavaScript', 'DeksripsiKursus' => 'Pelajari cara membangun website interaktif.', 'InformasiTambahan' => 'Untuk Pemula', 'IdMentor' => 2, 'materi_kursus' => 'HTML, CSS, JavaScript', 'jadwal_kursus' => 'Selasa & Kamis', 'lama_kursus' => 12, 'rating' => 4.7, 'url_gambar' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg', 'jumlah_peserta' => 30, 'harga_kursus' => 300000],
            ['nama' => 'Laravel untuk Backend Development', 'DeksripsiKursus' => 'Membangun backend API dengan Laravel.', 'InformasiTambahan' => 'Intermediate', 'IdMentor' => 3, 'materi_kursus' => 'Routing, Eloquent, Middleware', 'jadwal_kursus' => 'Jumat', 'lama_kursus' => 8, 'rating' => 4.8, 'url_gambar' => 'https://laravel.com/img/logomark.min.svg', 'jumlah_peserta' => 15, 'harga_kursus' => 400000],
            ['nama' => 'Data Science untuk Pemula', 'DeksripsiKursus' => 'Belajar menganalisis data dengan Python.', 'InformasiTambahan' => 'Pemula', 'IdMentor' => 4, 'materi_kursus' => 'Pandas, Numpy, Matplotlib', 'jadwal_kursus' => 'Sabtu', 'lama_kursus' => 10, 'rating' => 4.6, 'url_gambar' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/python/python-original.svg', 'jumlah_peserta' => 25, 'harga_kursus' => 350000],
            ['nama' => 'Spring Boot untuk Backend Java', 'DeksripsiKursus' => 'Framework Java untuk aplikasi besar.', 'InformasiTambahan' => 'Advanced', 'IdMentor' => 5, 'materi_kursus' => 'Spring MVC, REST API', 'jadwal_kursus' => 'Minggu', 'lama_kursus' => 15, 'rating' => 4.9, 'url_gambar' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/java/java-original.svg', 'jumlah_peserta' => 10, 'harga_kursus' => 500000],
            ['nama' => 'Frontend dengan React.js', 'DeksripsiKursus' => 'Membangun antarmuka modern dengan React.', 'InformasiTambahan' => 'Intermediate', 'IdMentor' => 6, 'materi_kursus' => 'Components, Props, State', 'jadwal_kursus' => 'Rabu', 'lama_kursus' => 12, 'rating' => 4.7, 'url_gambar' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg', 'jumlah_peserta' => 22, 'harga_kursus' => 320000],
            ['nama' => 'Node.js untuk Backend Development', 'DeksripsiKursus' => 'Belajar membuat server dengan Node.js.', 'InformasiTambahan' => 'Intermediate', 'IdMentor' => 7, 'materi_kursus' => 'Express.js, Middleware, Routing', 'jadwal_kursus' => 'Selasa', 'lama_kursus' => 10, 'rating' => 4.6, 'url_gambar' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nodejs/nodejs-original.svg', 'jumlah_peserta' => 18, 'harga_kursus' => 330000],
            ['nama' => 'Flutter untuk Pengembangan Mobile', 'DeksripsiKursus' => 'Membangun aplikasi mobile dengan Flutter.', 'InformasiTambahan' => 'Advanced', 'IdMentor' => 8, 'materi_kursus' => 'Widgets, State Management', 'jadwal_kursus' => 'Senin', 'lama_kursus' => 14, 'rating' => 4.8, 'url_gambar' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/flutter/flutter-original.svg', 'jumlah_peserta' => 16, 'harga_kursus' => 450000],
            ['nama' => 'Docker untuk Pemula', 'DeksripsiKursus' => 'Belajar mengelola kontainer dengan Docker.', 'InformasiTambahan' => 'Pemula', 'IdMentor' => 9, 'materi_kursus' => 'Containerization, Dockerfiles', 'jadwal_kursus' => 'Kamis', 'lama_kursus' => 8, 'rating' => 4.5, 'url_gambar' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/docker/docker-original.svg', 'jumlah_peserta' => 20, 'harga_kursus' => 250000],
            ['nama' => 'Cybersecurity untuk Pemula', 'DeksripsiKursus' => 'Belajar keamanan siber.', 'InformasiTambahan' => 'Pemula', 'IdMentor' => 10, 'materi_kursus' => 'Penetration Testing, Ethical Hacking', 'jadwal_kursus' => 'Sabtu', 'lama_kursus' => 10, 'rating' => 4.8, 'url_gambar' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/linux/linux-original.svg', 'jumlah_peserta' => 12, 'harga_kursus' => 300000],
        ];        

        foreach ($kursus as $item) {
            Kursus::create($item);
        }

        return redirect()->back()->with('success', '10 Kursus berhasil ditambahkan!');
    }
}
