<?php

namespace App\Http\Controllers;
use App\Models\Mentor;
use Illuminate\Http\Request;

class MentorController extends Controller
{
    // Existing 'home' method
    public function home()
    {
        $mentor = Mentor::all();
        return view('home', compact('mentor'));
    }

    // Add 'index' method
    public function index()
    {
        $mentor = Mentor::all();
        return view('home', compact('mentor')); 
    }
}
