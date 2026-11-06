<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk - T Tracker</title>
    <!-- Import Font 'Plus Jakarta Sans' agar mirip dengan gambar -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@500;600;700;800&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
        body {
            margin: 0;
            padding: 20px;
            background-color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .login-card {
            background: white;
            width: 100%;
            max-width: 380px;
            padding: 40px 28px;
            border-radius: 24px;
            box-shadow: 0 10px 25px rgba(59, 130, 246, 0.05);
        }
        .title {
            color: rgb(65, 122, 230);
            font-size: 32px;
            font-weight: 800;
            text-align: center;
            margin: 0 0 30px 0;
        }
        .form-group {
            margin-bottom: 18px;
        }
        .label {
            display: block;
            color: rgb(65, 122, 230);
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 6px;
        }
        .input-wrapper {
            position: relative;
        }
        .input-field {
            width: 100%;
            padding: 12px 16px;
            border: 1.5px solid #93c5fd;
            border-radius: 12px;
            font-size: 14px;
            color: #334155;
            outline: none;
            transition: all 0.2s ease;
        }
        .input-field:focus {
            border-color: #2563eb;
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
        }
        .input-field::placeholder {
            color: #94a3b8;
        }
        .toggle-password {
            position: absolute;
            right: 14px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #60a5fa;
        }
        .link-forgot {
            display: inline-block;
            color: #3b82f6;
            font-size: 13px;
            font-weight: 600;
            text-decoration: underline;
            margin-top: 4px;
            margin-bottom: 24px;
        }
        .btn-submit {
            width: 100%;
            padding: 14px;
            background-color: #60a5fa;
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 18px;
            font-weight: 700;
            cursor: pointer;
            transition: background-color 0.2s ease;
        }
        .btn-submit:hover {
            background-color: rgb(65, 122, 230);
        }
        .register-text {
            text-align: center;
            font-size: 14px;
            color: #1e293b;
            margin-top: 24px;
            font-weight: 600;
        }
        .register-text a {
            color: #3b82f6;
            text-decoration: underline;
        }
        .alert-error {
            background-color: lightskyblue;
            color: blue;
            border: 1px solid #fca5a5;
            padding: 10px 14px;
            border-radius: 10px;
            font-size: 13px;
            font-weight: 600;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <div class="login-card">
        <h1 class="title">Masuk</h1>

        <!-- Notifikasi Error Login jika Password Salah -->
        @if(session('error'))
            <div class="alert-error">
                 {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('dashboard') }}" method="POST">
            @csrf
            
            <!-- Input Username -->
            <div class="form-group">
                <label class="label">Username</label>
                <input type="text" name="username" class="input-field" placeholder="Masukkan Username Anda" required>
            </div>

            <!-- Input Password -->
            <div class="form-group" style="margin-bottom: 6px;">
                <label class="label">Password</label>
                <div class="input-wrapper">
                    <input type="password" id="passwordInput" name="password" class="input-field" placeholder="Masukkan Password" required>
                </div>
            </div>
            <!-- Tombol Masuk -->
            <button type="submit" class="btn-submit">Masuk</button>
        </form>
    </div>

    <!-- Script Sederhana untuk Toggle Intip Password -->
    <script>
        function togglePasswordVisibility() {
            const passwordInput = document.getElementById('passwordInput');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
            } else {
                passwordInput.type = 'password';
            }
        }
    </script>

</body>
</html>