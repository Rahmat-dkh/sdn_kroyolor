<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - SDN Kroyolor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    @php $activeTheme = \App\Models\Setting::get('theme', 'default'); @endphp
    <!-- Theme Specific CSS -->
    <link rel="stylesheet" href="{{ asset('css/themes/' . $activeTheme . '.css') }}">
    <style>
        body { background-color: #f4f7f6; height: 100vh; display: flex; align-items: center; justify-content: center; padding: 20px; }
        .login-card { width: 100%; max-width: 400px; padding: 20px; border: none; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); }
    </style>
</head>
<body class="theme-{{ $activeTheme }}">
    <div class="card login-card bg-white">
        <div class="text-center mb-4">
            <h4 class="fw-bold text-primary">Admin SDN Kroyolor</h4>
            <p class="text-muted small">Silakan masuk untuk mengelola konten</p>
        </div>

        @if($errors->any())
            <div class="alert alert-danger border-0 small">
                {{ $errors->first() }}
            </div>
        @endif

        <form action="/admin/login" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label small">Email Address</label>
                <input type="email" name="email" class="form-control" placeholder="admin@example.com" required autofocus>
            </div>
            <div class="mb-3">
                <label class="form-label small">Password</label>
                <input type="password" name="password" class="form-control" placeholder="********" required>
            </div>
            <button type="submit" class="btn btn-primary w-100 py-2 fw-bold mt-2">Login</button>
        </form>
        
        <div class="text-center mt-4">
            <a href="/" class="text-decoration-none small text-muted">&larr; Kembali ke Website</a>
        </div>
    </div>
</body>
</html>
