<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Outfit:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    @php $activeTheme = \App\Models\Setting::get('theme', 'default'); @endphp
    <!-- Theme Specific CSS -->
    <link rel="stylesheet" href="{{ asset('css/themes/' . $activeTheme . '.css') }}">
    
    <title>@yield('title', 'SDN Kroyolor')</title>
</head>
<body class="theme-{{ $activeTheme }}">
    @include('partials.navbar')

    <main>
        @yield('content')
    </main>

    @includeIf('partials.footer_' . $activeTheme)
    @if(!View::exists('partials.footer_' . $activeTheme))
        @include('partials.footer')
    @endif

    <button id="backToTop" class="btn shadow-sm rounded-circle" style="display: none; position: fixed; bottom: 30px; right: 30px; z-index: 999; width: 50px; height: 50px; background-color: #e9ecef; color: #343a40; border: 1px solid #dee2e6;">
        <i class="bi bi-arrow-up fs-4"></i>
    </button>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>

    <script>
        const backToTopBtn = document.getElementById('backToTop');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 300) {
                backToTopBtn.style.display = 'block';
            } else {
                backToTopBtn.style.display = 'none';
            }
        });
        backToTopBtn.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    </script>
</body>
</html>
