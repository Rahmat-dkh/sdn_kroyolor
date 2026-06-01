<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin - SDN Kroyolor')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    @php $activeTheme = \App\Models\Setting::get('theme', 'default'); @endphp
    <link rel="stylesheet" href="{{ asset('css/themes/' . $activeTheme . '.css') }}">
    <style>
        :root {
            --sidebar-width: 240px;
            --sidebar-collapsed-width: 70px;
            --topbar-height: 56px;
        }
        body { background-color: #f0f2f5; font-family: 'Inter', sans-serif; overflow-x: hidden; }
        
        /* Sidebar Styles */
        .admin-sidebar {
            width: var(--sidebar-width);
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
            background: #23282d; /* WP Dark */
            color: #eee;
            transition: all 0.3s ease;
        }
        .admin-sidebar.collapsed {
            width: var(--sidebar-collapsed-width);
        }
        
        /* Topbar Styles */
        .admin-topbar {
            height: var(--topbar-height);
            background: #fff;
            box-shadow: 0 1px 4px rgba(0,0,0,0.08);
            position: fixed;
            top: 0;
            right: 0;
            left: var(--sidebar-width);
            z-index: 999;
            display: flex;
            align-items: center;
            padding: 0 20px;
            transition: all 0.3s ease;
        }
        .admin-sidebar.collapsed + .admin-topbar {
            left: var(--sidebar-collapsed-width);
        }
        
        /* Content Styles */
        .admin-main {
            margin-top: var(--topbar-height);
            margin-left: var(--sidebar-width);
            padding: 30px;
            transition: all 0.3s ease;
            min-height: calc(100vh - var(--topbar-height));
        }
        .admin-sidebar.collapsed ~ .admin-main {
            margin-left: var(--sidebar-collapsed-width);
        }

        .sidebar-toggler {
            background: none;
            border: none;
            font-size: 1.25rem;
            cursor: pointer;
            color: #555;
        }
    </style>
</head>
<body class="admin-theme-{{ $activeTheme }}">
    <div class="admin-sidebar" id="sidebar">
        @include('admin.partials.sidebar')
    </div>

    <header class="admin-topbar">
        <button class="sidebar-toggler me-3" id="toggleSidebar">
            <i class="bi bi-list"></i>
        </button>
        <h5 class="mb-0 fw-bold">SDN Kroyolor Admin</h5>
        <div class="ms-auto d-flex align-items-center">
            <span class="me-3 d-none d-md-inline text-muted">Halo, {{ Auth::user()->name }}</span>
            <div class="dropdown">
                <a href="#" class="btn btn-light btn-sm rounded-circle shadow-sm" data-bs-toggle="dropdown">
                    <i class="bi bi-person"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-end shadow border-0">
                    <li><a class="dropdown-item" href="{{ url('/') }}" target="_blank"><i class="bi bi-globe me-2"></i>Lihat Situs</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="dropdown-item text-danger"><i class="bi bi-box-arrow-right me-2"></i>Keluar</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <main class="admin-main">
        <div class="container-fluid">
            @yield('content')
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('toggleSidebar').addEventListener('click', function() {
            document.getElementById('sidebar').classList.toggle('collapsed');
        });
    </script>
</body>
</html>
