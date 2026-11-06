@extends('layouts.app')

@section('content')

<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@500;600;700;800&display=swap" rel="stylesheet">

<div style="font-family: 'Plus Jakarta Sans', sans-serif;">
    <div style="margin-bottom: 25px;">
        <h2 style="margin: 0 0 5px 0; font-size: 26px; color: rgb(65, 122, 230); font-weight: 800;">Tambah MatKul</h2>
        <p style="margin: 0; color: #64748b; font-size: 14px;">Isi formulir di bawah ini untuk menambahkan kartu mata kuliah baru ke halaman Dashboard.</p>
    </div>

    <!-- Form Tambah Mata Kuliah -->
    <div style="background: white; padding: 30px; border-radius: 20px; margin-bottom: 30px; box-shadow: 0 10px 25px rgba(59, 130, 246, 0.08);">
        <h4 style="margin: 0 0 20px 0; color: rgb(65, 122, 230); font-size: 18px; font-weight: 700;">Form Tambah Mata Kuliah</h4>
        
        <form action="{{ route('tambahMatkul') }}" method="POST">
            @csrf
            <input type="hidden" name="username" value="{{ $username }}">

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 15px; margin-bottom: 15px;">
                <div>
                    <label style="display: block; font-size: 13px; font-weight: 700; margin-bottom: 6px; color: #60a5fa;">Nama Mata Kuliah:</label>
                    <input type="text" name="nama" required style="width: 100%; padding: 12px; border: 1.5px solid #93c5fd; border-radius: 12px; font-size: 14px; color: #334155; outline: none;">
                </div>

                <div>
                    <label style="display: block; font-size: 13px; font-weight: 700; margin-bottom: 6px; color: #60a5fa;">Jumlah SKS:</label>
                    <input type="number" name="sks" min="1" max="6" required style="width: 100%; padding: 12px; border: 1.5px solid #93c5fd; border-radius: 12px; font-size: 14px; color: #334155; outline: none;">
                </div>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 15px; margin-bottom: 15px;">
                <div>
                    <label style="display: block; font-size: 13px; font-weight: 700; margin-bottom: 6px; color: #60a5fa;">Nama Dosen:</label>
                    <input type="text" name="dosen" required style="width: 100%; padding: 12px; border: 1.5px solid #93c5fd; border-radius: 12px; font-size: 14px; color: #334155; outline: none;">
                </div>

                <div>
                    <label style="display: block; font-size: 13px; font-weight: 700; margin-bottom: 6px; color: #60a5fa;">Kelas:</label>
                    <input type="text" name="kelas" required style="width: 100%; padding: 12px; border: 1.5px solid #93c5fd; border-radius: 12px; font-size: 14px; color: #334155; outline: none;">
                </div>
            </div>

            <div style="margin-bottom: 20px;">
                <label style="display: block; font-size: 13px; font-weight: 700; margin-bottom: 6px; color: #60a5fa;">Ringkasan / Deskripsi Materi:</label>
                <textarea name="ringkasan" rows="4" required style="width: 100%; padding: 12px; border: 1.5px solid #93c5fd; border-radius: 12px; font-size: 14px; color: #334155; font-family: inherit; outline: none;"></textarea>
            </div>

            <div>
                <button type="submit" style="padding: 12px 24px; background-color: rgb(65, 122, 230); color: white; border: none; border-radius: 12px; font-weight: 700; cursor: pointer; font-size: 14px; box-shadow: 0 4px 12px rgba(37, 99, 235, 0.2);">
                    Simpan Mata Kuliah
                </button>
            </div>
        </form>
    </div>
</div>
@endsection