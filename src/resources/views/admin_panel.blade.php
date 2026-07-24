<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - Booking Servis Bengkel Motor</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <style>
        body { font-family: 'Poppins', sans-serif; background: #eff4fb; color: #0f172a; }
        .dashboard-header { background: linear-gradient(135deg, #dc2626, #ef4444); color: #fff; border-radius: 1.5rem; }
        .dashboard-card { border-radius: 1.2rem; }
        .btn-primary-custom { background: #dc2626; border: none; }
        .btn-primary-custom:hover { background: #b91c1c; }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
    <div class="container py-3">
        <a class="navbar-brand fw-bold text-dark" href="{{ url('/') }}"><i class="bi bi-wrench-adjustable me-2 text-danger"></i>Bengkel Motor</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/project') }}">Project</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">Kontak</a></li>
                <li class="nav-item"><a class="btn btn-danger btn-sm text-white ms-3" href="{{ url('/admin') }}">Dashboard</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-5 pt-5">
    <div class="row">
        <div class="col-12">
            <div class="dashboard-header shadow-sm p-5 mb-4">
                <div class="d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-3">
                    <div>
                        <span class="badge bg-white text-danger mb-2">Dashboard Admin</span>
                        <h1 class="h3 text-white fw-bold">Selamat datang, Admin!</h1>
                        <p class="mb-0 text-white-75">Kelola booking servis, pantau status pengerjaan, dan update informasi project dari panel ini.</p>
                    </div>
                    <div class="text-end text-white-75">
                        <p class="mb-1">Status Sistem</p>
                        <span class="badge bg-success">Online</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-4 mb-4">
        <div class="col-md-3">
            <div class="card dashboard-card shadow-sm p-4 h-100">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <div>
                        <span class="text-muted small">Total Booking</span>
                        <h3 class="fw-bold">{{ $totalBookings ?? 0 }}</h3>
                    </div>
                    <span class="text-danger fs-3"><i class="bi bi-calendar-check-fill"></i></span>
                </div>
                <p class="text-muted">Jumlah pesan servis masuk.</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card dashboard-card shadow-sm p-4 h-100">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <div>
                        <span class="text-muted small">Project Tersedia</span>
                        <h3 class="fw-bold">{{ $project ? 1 : 0 }}</h3>
                    </div>
                    <span class="text-danger fs-3"><i class="bi bi-grid-3x3-gap-fill"></i></span>
                </div>
                <p class="text-muted">Jumlah project yang dikelola.</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card dashboard-card shadow-sm p-4 h-100">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <div>
                        <span class="text-muted small">Status Selesai</span>
                        <h3 class="fw-bold">{{ $statusCounts['Selesai'] ?? 0 }}</h3>
                    </div>
                    <span class="text-warning fs-3"><i class="bi bi-check2-circle"></i></span>
                </div>
                <p class="text-muted">Project yang sudah selesai.</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card dashboard-card shadow-sm p-4 h-100">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <div>
                        <span class="text-muted small">Status Proses</span>
                        <h3 class="fw-bold">{{ $statusCounts['Testing'] ?? 0 }}</h3>
                    </div>
                    <span class="text-danger fs-3"><i class="bi bi-gear-fill"></i></span>
                </div>
                <p class="text-muted">Project dalam tahap proses.</p>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card shadow-sm border-0 rounded-4 p-4 bg-white">
                <div class="mb-4">
                    <span class="text-uppercase text-muted small fw-bold">Form Update Project</span>
                    <h2 class="fw-bold mt-2">Perbarui Informasi Project Booking Servis</h2>
                    <p class="text-muted">Ubah judul, deskripsi singkat, dan status progress untuk project utama sistem.</p>
                </div>

                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                @if($project)
                    <form action="{{ url('/admin/update-status') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $project->id }}">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Judul Project</label>
                                <input type="text" name="judul" class="form-control form-control-lg" value="{{ old('judul', $project->judul) }}" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Status Booking</label>
                                <select name="progress_status" class="form-select form-select-lg" required>
                                    @foreach(['Menunggu', 'Review', 'Testing', 'Selesai'] as $status)
                                        <option value="{{ $status }}" {{ $project->progress_status === $status ? 'selected' : '' }}>{{ $status }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 mt-3">
                            <label class="form-label fw-semibold">Deskripsi Singkat</label>
                            <textarea name="deskripsi_singkat" rows="5" class="form-control" required>{{ old('deskripsi_singkat', $project->deskripsi_singkat) }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary-custom btn-lg">Perbarui Dashboard</button>
                    </form>
                @else
                    <div class="alert alert-warning">Data project belum tersedia. Pastikan tabel <code>final_projects</code> sudah terisi di database.</div>
                @endif
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
