<?php

namespace App\Http\Controllers;


use App\Models\Enrol;
use App\Models\Siswa;
use App\Models\Kursus;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class EnrolController extends Controller
{
    /**
     * Display a listing of the enrollments.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $data['judul'] = "ENROL";
        // Retrieve all enrollments with related course and student data
        $data['enrol'] = Enrol::with('Kursus', 'Siswa')->get();

        return view('Enrol.enrol', $data); // Render the list of enrollments
    }

    public function create($kursusId)
    {
        // Retrieve the course based on the ID passed
        $kursus = Kursus::findOrFail($kursusId);

        // Retrieve the student based on the authenticated user's username
        $siswa = Siswa::where('namasiswa', Auth::user()->name)->first(); // Use authenticated user's username

        // If no student is found, return an error or redirect
        if (!$siswa) {
            return redirect()->route('home')->with('error', 'Siswa tidak ditemukan.');
        }

        // Pass the course and student data to the view
        return view('Enrol.enrol', compact('kursus', 'siswa'));
    }


    /**
     * Store a newly created enrollment in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request, $kursusId)
    {
        // Validate the request input
        $validated = $request->validate([
            'studentName' => 'required|string', // Validate the student name
            'paymentMethod' => 'required|string|in:bank-transfer,credit-card,ewallet', // Validate payment method
            'price' => 'required|numeric', // Validate the price
            'additionalNotes' => 'nullable|string', // Additional notes are optional
        ]);

        // Find the student based on the name (you may adjust this if you have a specific student ID)
        $student = Siswa::where('namasiswa', $request->studentName)->first();

        // If the student doesn't exist, return an error
        if (!$student) {
            return redirect()->back()->withErrors('Student not found.');
        }

        // Find the course by its ID
        $kursus = Kursus::findOrFail($kursusId);

        // Create the enrollment record
        Enrol::create([
            'IdSiswa' => $student->IdSiswa, // Store the student's ID
            'IdKursus' => $kursus->IdKursus, // Store the course's ID
            'Status' => 'pending', // Default status (could be modified later)
            'tanggal' => now(), // Store the current date as the enrollment date
            'price' => $validated['price'], // Store the price from the form
            'payment_method' => $validated['paymentMethod'], // Store the selected payment method
            'additional_notes' => $validated['additionalNotes'] ?? null, // Store the optional notes
        ]);

        // Redirect ke view 'Enrol.riwayat' setelah berhasil mendaftar
        return view('Enrol.riwayat', [
            'riwayatPembayaran' => Enrol::with('Kursus', 'Siswa')->get(),
            'success' => 'Enrollment successfully created'
        ]);

    }

    public function riwayatPembayaran()
    {
        // Retrieve all enrollments with payment details
        $data['riwayatPembayaran'] = Enrol::with('Kursus', 'Siswa')
                                          ->get();

        // Return the view to display payment history
        return view('Enrol.riwayat', $data);
    }

}
