<?php

namespace App\Http\Controllers;

use App\Models\Student; // Memanggil Model Student [cite: 87]
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        // Mengambil semua data dari tabel students lewat Model [cite: 94, 349]
        $students = Student::all(); 
        
        // Mengirim data ke file view index [cite: 96, 448]
        return view('students.index', compact('students'));
    }
}