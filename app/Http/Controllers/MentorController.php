<?php

namespace App\Http\Controllers;
use App\Models\Mentor;
use Illuminate\Http\Request;

class MentorController extends Controller
{

    public function home()
    {
        // Mengambil data mentor dari database
        $mentor = Mentor::all();

        // Mengirim data ke view 'home'
        return view('home', compact('mentor'));
    }
}
