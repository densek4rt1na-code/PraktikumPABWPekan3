<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = [
            [
                'name' => 'Dense Ai Kartina',
                'major' => 'Smart city information system',
                'age' => 20,
                'courses' => ['Pemrograman Web', 'Database', 'Cloud Computing'],
            ],
            [
                'name' => 'Najwa Hanifah',
                'major' => 'Sistem Informasi',
                'age' => 20,
                'courses' => ['UI/UX Design', 'Manajemen Proyek', 'IoT'],
            ],
        ];

        return view('students.index', compact('students'));
    }
}