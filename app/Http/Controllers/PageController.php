<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login() {
        return view('login');
    }

    public function dashboard(Request $request) {
        $username = $request->input('username', 'Guest');

        if ($request->isMethod('post')) {
            $password = $request->input('password');
            if ($password !== 'rahasia123') {
                return redirect('/')->with('error', 'Password salah!');
            }
        }

        // Ambil daftar mata kuliah dari session (default array kosong [])
        $courses = session('courses', []);

        return view('dashboard', [
            'username' => $username,
            'courses' => $courses
        ]);
    }

    public function pengelolaan(Request $request) {
        $username = $request->input('username', 'Guest');

        return view('pengelolaan', [
            'username' => $username
        ]);
    }

    // Method untuk menyimpan Mata Kuliah baru ke Session lalu kembali ke Dashboard
    public function tambahMatkul(Request $request) {
        $username = $request->input('username', 'Guest');
        $courses = session('courses', []);

        $newCourse = [
            'nama' => $request->input('nama'),
            'sks' => $request->input('sks') . ' SKS',
            'ringkasan' => $request->input('ringkasan'),
            'dosen' => $request->input('dosen'),
            'kelas' => $request->input('kelas'),
        ];

        $courses[] = $newCourse;
        session(['courses' => $courses]);

        // Setelah simpan, otomatis diarahkan ke Dashboard agar kartu matkul langsung terlihat
        return redirect()->route('dashboard', ['username' => $username]);
    }

    public function profile(Request $request) {
        $username = $request->input('username', 'Guest');

        $data_profil = [
            'role' => 'Mahasiswa / Developer T Tracker',
            'email' => strtolower(str_replace(' ', '', $username)) . '@student.ac.id',
            'bio' => 'Berkomitmen untuk menyelesaikan semua tugas kuliah tepat waktu dan rapi.',
            'total_tugas_selesai' => count(session('courses', []))
        ];

        return view('profile', [
            'username' => $username,
            'profil' => $data_profil
        ]);
    }

    public function hapusMatkul(Request $request) {
        $username = $request->input('username', 'Guest');
        $index = $request->input('index'); // Menangkap urutan/index array matkul yang akan dihapus
        
        $courses = session('courses', []);

        // Jika data pada index tersebut ada, hapus datanya
        if (isset($courses[$index])) {
            unset($courses[$index]);
            
            // Susun ulang urutan index array agar tidak error (0, 1, 2, dst)
            $courses = array_values($courses);
            
            // Simpan kembali array yang sudah diupdate ke session
            session(['courses' => $courses]);
        }

        // Kembalikan ke halaman Dashboard
        return redirect()->route('dashboard', ['username' => $username]);
    }
}