@extends('layouts.app')

@section('content')
<!-- Import Font 'Plus Jakarta Sans' -->
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@500;600;700;800&display=swap" rel="stylesheet">

<div style="font-family: 'Plus Jakarta Sans', sans-serif; max-width: 600px; margin: 20px auto; background: white; border: 1.5px solid #93c5fd; padding: 35px 30px; border-radius: 20px; box-shadow: 0 10px 25px rgba(59, 130, 246, 0.08);">
    
    <!-- Header Judul Profile (Tanpa Tanda Panah) -->
    <div style="text-align: center; margin-bottom: 25px;">
        <h2 style="margin: 0; color: #2563eb; font-size: 26px; font-weight: 800;">Profil Pengguna</h2>
    </div>

    <!-- Foto Profil Avatar & Nama -->
    <div style="text-align: center; margin-bottom: 25px;">
        <div style="width: 100px; height: 100px; margin: 0 auto 15px auto; border-radius: 50%; border: 3px solid #3b82f6; background-color: #dbeafe; display: inline-flex; align-items: center; justify-content: center; font-size: 38px; font-weight: 800; color: #1d4ed8;">
            {{ strtoupper(substr($username, 0, 1)) }}
        </div>
        
        <h3 style="margin: 0 0 4px 0; color: #1e293b; font-size: 22px; font-weight: 800;">{{ $username }}</h3>
        <p style="margin: 0; color: #3b82f6; font-size: 14px; font-weight: 600;">{{ $profil['role'] }}</p>
    </div>

    <hr style="border: 0; border-top: 1px solid #e2e8f0; margin: 25px 0;">

    <!-- Detail Informasi Profil (Bentuk Tabel Awal) -->
    <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 14px; line-height: 2;">
        <tr>
            <th style="width: 35%; color: #60a5fa; font-weight: 700; padding: 8px 0;">Email</th>
            <td style="color: #334155; font-weight: 500;">: {{ $profil['email'] }}</td>
        </tr>
        <tr>
            <th style="color: #60a5fa; font-weight: 700; padding: 8px 0; vertical-align: top;">Bio</th>
            <td style="color: #334155; font-weight: 500;">: {{ $profil['bio'] }}</td>
        </tr>
        <tr>
            <th style="color: #60a5fa; font-weight: 700; padding: 8px 0;">Tugas / Matkul</th>
            <td>: <span style="background-color: #eff6ff; color: #2563eb; border: 1px solid #bfdbfe; padding: 4px 12px; border-radius: 20px; font-size: 13px; font-weight: 700;">{{ $profil['total_tugas_selesai'] }} Ditambahkan</span></td>
        </tr>
    </table>

    <!-- Tombol Aksi Navigasi -->
    <div style="margin-top: 35px; display: flex; justify-content: center; gap: 12px; flex-wrap: wrap;">
        <a href="{{ route('dashboard', ['username' => $username]) }}" 
           style="padding: 12px 24px; background-color: rgb(65, 122, 230); color: white; text-decoration: none; border-radius: 12px; font-weight: 700; font-size: 14px; box-shadow: 0 4px 12px rgba(37, 99, 235, 0.2);">
            Kembali ke Dashboard
        </a>
    </div>

</div>
@endsection