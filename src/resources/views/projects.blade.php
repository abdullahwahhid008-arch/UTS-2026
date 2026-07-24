<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Project - Booking Servis Bengkel Motor</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <style>
        body { font-family: 'Poppins', sans-serif; background: #eff4fb; color: #0f172a; }
        .hero { background: #ffffff; }
        .project-card { border-radius: 1.5rem; transition: transform .2s ease; }
        .project-card:hover { transform: translateY(-6px); }
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
                <li class="nav-item"><a class="nav-link active" href="{{ url('/project') }}">Project</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">Kontak</a></li>
                <li class="nav-item"><a class="btn btn-danger btn-sm text-white ms-3" href="{{ url('/admin') }}">Admin Panel</a></li>
            </ul>
        </div>
    </div>
</nav>

<header class="hero py-5 pt-6">
    <div class="container text-center">
        <span class="badge bg-danger text-white px-3 py-2 mb-3">Daftar Project</span>
        <h1 class="display-5 fw-bold">Project Booking Servis Bengkel Motor</h1>
        <p class="text-muted mx-auto col-lg-7">Lihat project dan laporan awal yang mendukung sistem booking servis bengkel motor berbasis web.</p>
    </div>
</header>

<main class="container py-5">
    @if(count($projects) > 0)
        <div class="row g-4">
            @foreach($projects as $project)
                <div class="col-lg-4 col-md-6">
                    <div class="card project-card shadow-sm h-100 border-0 p-4">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div>
                                <h4 class="fw-bold text-dark mb-2">{{ $project->judul }}</h4>
                                <p class="text-muted mb-0">{{ strlen($project->deskripsi_singkat) > 120 ? substr($project->deskripsi_singkat,0,120).'...' : $project->deskripsi_singkat }}</p>
                            </div>
                            <span class="badge bg-danger text-white">{{ $project->progress_status }}</span>
                        </div>
                        <div class="mt-3">
                            <a href="{{ url('/project/'.$project->id) }}" class="btn btn-outline-danger btn-sm">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="alert alert-warning">Belum ada project tersimpan di database. Silakan tambahkan data project dari Admin Panel.</div>
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
