@extends('layouts.app')

@section('content')
    <!-- Header Dashboard & Tombol Tambahkan Matkul -->
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 25px;">
        <div>
            <h2 style="margin: 0 0 5px 0; font-size: 26px; color: rgb(65, 122, 230);">Dashboard T Tracker</h2>
            <p style="margin: 0; color: #6c757d; font-size: 14px;">Ringkasan mata kuliah dan modul tugas aktif kamu.</p>
        </div>
        
        <!-- Tombol Tambahkan Matkul yang Otomatis Mengarahkan ke Pengelolaan -->
        <a href="{{ route('pengelolaan', ['username' => $username]) }}" 
           style="padding: 12px 20px; background-color: rgb(65, 122, 230); color: white; text-decoration: none; border-radius: 8px; font-weight: 700; font-size: 14px; box-shadow: 0 4px 10px rgba(13, 110, 253, 0.2);">
            Tambahkan Matkul
        </a>
    </div>

    <!-- Banner Welcome -->
    <div style="background: white; border-left: 5px solid #0d6efd; padding: 20px 25px; border-radius: 8px; margin-bottom: 25px; box-shadow: 0 2px 6px rgba(0,0,0,0.04);">
        <h3 style="margin: 0 0 5px 0; color:rgb(65, 122, 230); font-size: 20px;">Selamat Datang {{ $username }}</h3>
        <p style="margin: 0; color: #555; font-size: 14px;">Berikut adalah daftar mata kuliah semester ini beserta ringkasan materinya.</p>
    </div>

    <!-- Grid Kartu Mata Kuliah -->
    @if(count($courses) > 0)
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 20px; margin-bottom: 30px;">
            @foreach($courses as $c)
            <div style="background-color: #deebff; border-radius: 12px; padding: 22px; border: 1px solid #c0d7fd; display: flex; flex-direction: column; justify-content: space-between;">
                <div>
                    <!-- Judul Matkul & SKS -->
                    <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 12px;">
                        <h3 style="margin: 0; color: #0b1e36; font-size: 18px; font-weight: 700;">{{ $c['nama'] }}</h3>
                        <span style="font-weight: 700; color: #0b1e36; font-size: 16px; white-space: nowrap; margin-left: 10px;">{{ $c['sks'] }}</span>
                    </div>

                    <!-- Sub-Judul RINGKASAN -->
                    <span style="display: block; font-size: 12px; font-weight: 700; color: #0d6efd; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 6px;">
                        RINGKASAN
                    </span>

                    <!-- Deskripsi Ringkasan -->
                    <p style="margin: 0 0 18px 0; color: #42526e; font-size: 14px; line-height: 1.5;">
                        {{ $c['ringkasan'] }}
                    </p>

                    <!-- Information Dosen & Kelas -->
                    <div style="display: flex; gap: 30px; margin-bottom: 20px; font-size: 13px;">
                        <div>
                            <span style="display: block; color: #0d6efd; font-weight: 700; margin-bottom: 2px;">Dosen</span>
                            <span style="color: #42526e; font-weight: 600;">{{ $c['dosen'] }}</span>
                        </div>
                        <div>
                            <span style="display: block; color: #0d6efd; font-weight: 700; margin-bottom: 2px;">Kelas</span>
                            <span style="color: #42526e; font-weight: 600;">{{ $c['kelas'] }}</span>
                        </div>
                    </div>
                </div>

                <!-- Tombol Detail -->
                <a href="{{ route('pengelolaan', ['username' => $username]) }}" 
                   style="display: block; text-align: center; padding: 10px; background-color: transparent; border: 2px solid #0d6efd; color: #0d6efd; text-decoration: none; border-radius: 8px; font-weight: 700; font-size: 15px;">
                    Detail
                </a>
            </div>
            @endforeach
        </div>
    @else
        <!-- Tampilan Awal Sebelum Ada Matkul Ditambahkan -->
        <div style="background: white; border-radius: 12px; padding: 40px; text-align: center; box-shadow: 0 2px 6px rgba(0,0,0,0.04); margin-bottom: 30px;">
            <p style="color: #6c757d; font-size: 16px; margin-bottom: 15px;">Belum ada mata kuliah yang kamu tambahkan.</p>
            <a href="{{ route('pengelolaan', ['username' => $username]) }}" 
               style="padding: 10px 20px; background-color: rgb(65, 122, 230); color: white; text-decoration: none; border-radius: 6px; font-weight: 600; font-size: 14px;">
                Tambah Mata Kuliah Sekarang
            </a>
        </div>
    @endif
@endsection