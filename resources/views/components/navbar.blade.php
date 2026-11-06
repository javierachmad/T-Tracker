<div style="background-color: rgb(65, 122, 230); color: white; box-shadow: 0 2px 8px rgba(0,0,0,0.15);">
    <div style="max-width: 1100px; margin: 0 auto; padding: 15px 20px; display: flex; justify-content: space-between; align-items: center;">
        <a href="{{ route('dashboard', ['username' => $username ?? 'Guest']) }}" style="color: white; text-decoration: none; font-size: 20px; font-weight: bold;">
             T Tracker
        </a>
        <div style="display: flex; gap: 20px;">
            <a href="{{ route('dashboard', ['username' => $username ?? 'Guest']) }}" style="color: white; text-decoration: none; font-weight: 600; font-size: 15px;">Dashboard</a>
            <a href="{{ route('pengelolaan', ['username' => $username ?? 'Guest']) }}" style="color: white; text-decoration: none; font-weight: 600; font-size: 15px; opacity: 0.9;">Daftar Tugas</a>
            <a href="{{ route('profile', ['username' => $username ?? 'Guest']) }}" style="color: white; text-decoration: none; font-weight: 600; font-size: 15px; opacity: 0.9;">Profil</a>
        </div>
    </div>
</div>