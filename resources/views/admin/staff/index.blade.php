<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Staff - Admin SDN Kroyolor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        body { background-color: #f8f9fa; }
        .sidebar { min-height: 100vh; background: #343a40; color: white; }
        .sidebar a { color: rgba(255,255,255,0.8); text-decoration: none; padding: 10px 20px; display: block; }
        .sidebar a:hover, .sidebar a.active { background: rgba(255,255,255,0.1); color: white; }
        .main-content { padding: 20px; }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <nav class="col-md-2 d-none d-md-block sidebar px-0">
            <div class="p-4">
                <h5 class="fw-bold">Admin Panel</h5>
                <hr>
            </div>
            <a href="/admin/dashboard" class="{{ Request::is('admin/dashboard') ? 'active' : '' }}"><i class="bi bi-speedometer2 me-2"></i> Dashboard</a>
            <a href="{{ route('berita.index') }}" class="{{ Request::is('admin/berita*') ? 'active' : '' }}"><i class="bi bi-newspaper me-2"></i> Berita</a>
            <a href="{{ route('staff.index') }}" class="{{ Request::is('admin/staff*') ? 'active' : '' }}"><i class="bi bi-people me-2"></i> Guru & Staff</a>
            <a href="{{ route('peserta-didik.index') }}" class="{{ Request::is('admin/peserta-didik*') ? 'active' : '' }}"><i class="bi bi-person-badge me-2"></i> Peserta Didik</a>
            <a href="#"><i class="bi bi-images me-2"></i> Galeri</a>
            
            <div class="mt-5 p-3">
                <form action="/admin/logout" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-outline-light btn-sm w-100">Logout</button>
                </form>
            </div>
        </nav>

        <!-- Main Content -->
        <main class="col-md-10 main-content">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h4>Kelola Guru & Staff</h4>
                <a href="{{ route('staff.create') }}" class="btn btn-primary"><i class="bi bi-plus-lg me-2"></i> Tambah Staff</a>
            </div>

            @if(session('success'))
                <div class="alert alert-success border-0 shadow-sm mb-4">
                    {{ session('success') }}
                </div>
            @endif

            <div class="card border-0 shadow-sm">
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0 align-middle">
                            <thead class="bg-light">
                                <tr>
                                    <th class="px-4 py-3">No</th>
                                    <th>Foto</th>
                                    <th>Nama</th>
                                    <th>Jabatan</th>
                                    <th>Kategori</th>
                                    <th class="text-end px-4">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($staffs as $index => $item)
                                <tr>
                                    <td class="px-4">{{ $staffs->firstItem() + $index }}</td>
                                    <td>
                                        @if($item->foto)
                                            <img src="{{ asset('storage/'.$item->foto) }}" class="rounded-circle shadow-sm" style="width: 40px; height: 40px; object-fit: cover;">
                                        @else
                                            <div class="bg-light rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                                <i class="bi bi-person text-muted"></i>
                                            </div>
                                        @endif
                                    </td>
                                    <td class="fw-bold">{{ $item->nama }}</td>
                                    <td>{{ $item->jabatan }}</td>
                                    <td><span class="badge {{ $item->kategori == 'guru' ? 'bg-info' : 'bg-secondary' }}">{{ ucfirst($item->kategori) }}</span></td>
                                    <td class="text-end px-4">
                                        <div class="btn-group">
                                            <a href="{{ route('staff.edit', $item->id) }}" class="btn btn-sm btn-outline-info"><i class="bi bi-pencil"></i></a>
                                            <form action="{{ route('staff.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-outline-danger ms-1"><i class="bi bi-trash"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="6" class="text-center py-5 text-muted">Belum ada data staff.</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
                @if($staffs->hasPages())
                <div class="card-footer bg-white border-0 px-4 py-3">
                    {{ $staffs->links() }}
                </div>
                @endif
            </div>
        </main>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
