<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Project - Booking Servis Bengkel Motor</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <style>
        body { font-family: 'Poppins', sans-serif; background: #eff4fb; color: #0f172a; }
        .detail-hero { background: #ffffff; }
        .info-card { border-radius: 1.5rem; }
        .btn-primary-custom { background: #dc2626; border: none; }
        .btn-primary-custom:hover { background: #b91c1c; }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
    <div class="container py-3">
        <a class="navbar-brand fw-bold text-dark" href="{{ url('/') }}"><i class="bi bi-wrench-adjustable me-2 text-danger"></i>Bengkel Motor</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/project') }}">Project</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">Kontak</a></li>
                <li class="nav-item"><a class="btn btn-danger btn-sm text-white ms-3" href="{{ url('/admin') }}">Admin Panel</a></li>
            </ul>
        </div>
    </div>
</nav>

<header class="detail-hero py-5 pt-6">
    <div class="container">
        <div class="row align-items-center gy-4">
            <div class="col-lg-8">
                <span class="badge bg-danger text-white px-3 py-2 mb-3">Detail Project</span>
                <h1 class="display-5 fw-bold">{{ $project ? $project->judul : 'Detail Project Booking Servis Bengkel Motor' }}</h1>
                <p class="text-muted fs-5">{{ $project ? $project->deskripsi_singkat : 'Project tidak ditemukan.' }}</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                @if($project)
                    <span class="badge bg-danger text-white fs-6 py-2 px-3">Status: {{ $project->progress_status }}</span>
                @endif
            </div>
        </div>
    </div>
</header>

<main class="container py-5">
    @if($project)
        <div class="row gy-4">
            <div class="col-lg-8">
                <div class="card shadow-sm border-0 p-4 mb-4 info-card">
                    <h4 class="fw-bold mb-3">Ringkasan Project</h4>
                    <p class="text-muted">{{ $project->deskripsi_singkat }}</p>
                </div>
                <div class="card shadow-sm border-0 p-4 mb-4 info-card">
                    <h4 class="fw-bold mb-3">Fitur Utama</h4>
                    @php
                        $featureList = !empty($project->fitur_utama) ? explode(', ', $project->fitur_utama) : [];
                    @endphp
                    <div class="row g-3">
                        @forelse($featureList as $fitur)
                            <div class="col-md-6">
                                <div class="p-3 bg-light rounded-4">
                                    <i class="bi bi-check2-circle text-danger me-2"></i>{{ $fitur }}
                                </div>
                            </div>
                        @empty
                            <div class="col-12">
                                <p class="text-muted mb-0">Fitur utama belum ditambahkan.</p>
                            </div>
                        @endforelse
                    </div>
                </div>
                <div class="card shadow-sm border-0 p-4 info-card">
                    <h4 class="fw-bold mb-3">Teknologi</h4>
                    @php
                        $techStacks = !empty($project->tech_stack) ? explode(', ', $project->tech_stack) : [];
                    @endphp
                    @if(count($techStacks) > 0)
                        @foreach($techStacks as $stack)
                            <span class="badge bg-danger text-white me-2 mb-2">{{ $stack }}</span>
                        @endforeach
                    @else
                        <p class="text-muted mb-0">Teknologi belum ditentukan.</p>
                    @endif
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card shadow-sm border-0 p-4 info-card mb-4">
                    <h5 class="fw-bold mb-3">Ringkasan Cepat</h5>
                    <ul class="list-unstyled text-muted mb-0">
                        <li class="mb-3"><strong>Judul:</strong> {{ $project->judul }}</li>
                        <li class="mb-3"><strong>Status:</strong> {{ $project->progress_status }}</li>
                        <li class="mb-3"><strong>Fitur:</strong> {{ count($featureList) }}</li>
                        <li><strong>Stack:</strong> {{ $project->tech_stack ?? 'Belum tersedia' }}</li>
                    </ul>
                </div>
                <div class="card shadow-sm border-0 p-4 info-card bg-light">
                    <h5 class="fw-bold mb-3">Aksi Cepat</h5>
                    <a href="{{ url('/project') }}" class="btn btn-outline-danger w-100">Kembali ke Project</a>
                </div>
            </div>
        </div>
    @else
        <div class="alert alert-warning">Data project tidak ditemukan. Silakan kembali ke daftar project.</div>
    @endif
</main>

<footer class="py-4 bg-white text-center">
    <div class="container">
        <p class="mb-0">© 2026 Booking Servis Bengkel Motor</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
