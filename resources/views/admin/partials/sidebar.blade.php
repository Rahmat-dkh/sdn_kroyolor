<div class="sidebar-wrapper">
    <div class="sidebar-header p-4">
        <h5 class="fw-bold mb-0 text-white">Admin Panel</h5>
    </div>
    
    <div class="sidebar-menu px-2">
        <a href="{{ route('admin.dashboard') }}" class="sidebar-link {{ Request::is('admin/dashboard') ? 'active' : '' }}">
            <i class="bi bi-speedometer2"></i>
            <span class="link-text">Dashboard</span>
        </a>
        <a href="{{ route('berita.index') }}" class="sidebar-link {{ Request::is('admin/berita*') ? 'active' : '' }}">
            <i class="bi bi-newspaper"></i>
            <span class="link-text">Berita</span>
        </a>
        <a href="{{ route('staff.index') }}" class="sidebar-link {{ Request::is('admin/staff*') ? 'active' : '' }}">
            <i class="bi bi-people"></i>
            <span class="link-text">Guru & Staff</span>
        </a>
        <a href="{{ route('peserta-didik.index') }}" class="sidebar-link {{ Request::is('admin/peserta-didik*') ? 'active' : '' }}">
            <i class="bi bi-person-badge"></i>
            <span class="link-text">Peserta Didik</span>
        </a>
        <a href="{{ route('galeri.index') }}" class="sidebar-link {{ Request::is('admin/galeri*') ? 'active' : '' }}">
            <i class="bi bi-images"></i>
            <span class="link-text">Galeri</span>
        </a>
        <a href="{{ route('admin.kontak.index') }}" class="sidebar-link {{ Request::is('admin/kontak*') ? 'active' : '' }}">
            <i class="bi bi-envelope"></i>
            <span class="link-text">Pesan Kontak</span>
        </a>
        <a href="{{ route('admin.theme.index') }}" class="sidebar-link {{ Request::is('admin/theme') ? 'active' : '' }}">
            <i class="bi bi-palette"></i>
            <span class="link-text">Tema</span>
        </a>
    </div>
</div>

<style>
    .sidebar-link {
        display: flex;
        align-items: center;
        padding: 12px 15px;
        color: #b8c7ce;
        text-decoration: none;
        border-radius: 8px;
        margin-bottom: 5px;
        transition: all 0.2s;
    }
    .sidebar-link i {
        font-size: 1.2rem;
        min-width: 30px;
    }
    .sidebar-link:hover {
        background: rgba(255,255,255,0.1);
        color: #fff;
    }
    .sidebar-link.active {
        background: var(--bs-primary, #007bff);
        color: #fff;
    }
    
    /* Collapsed state adjustments */
    .collapsed .link-text, .collapsed .sidebar-header h5 {
        display: none;
    }
    .collapsed .sidebar-link {
        justify-content: center;
        padding: 12px 0;
    }
    .collapsed .sidebar-link i {
        margin: 0;
    }
</style>
