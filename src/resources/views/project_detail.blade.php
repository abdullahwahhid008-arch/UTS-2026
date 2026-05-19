<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Tugas Akhir - Portofolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
</head>
<body class="bg-light">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ url('/') }}">Portfolio</a>
        <div class="navbar-nav ms-auto">
            <a class="nav-link text-white" href="{{ url('/') }}">Home</a>
            <a class="nav-link active me-3" href="{{ url('/project') }}">Project Akhir</a>
            <a class="nav-link btn btn-primary btn-sm text-white px-3" href="{{ url('/admin') }}">Admin Panel</a>
        </div>
    </div>
</nav>

<div class="container mt-5 pt-5">
    @if($project)
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center border-bottom pb-3 mb-4">
        <div>
            <span class="text-uppercase text-muted small fw-bold">Laporan Awal Project Akhir</span>
            <h1 class="fw-bold text-dark mt-1">{{ $project->judul }}</h1>
        </div>
        <div class="mt-2 mt-md-0">
            <span class="fs-6 px-3 py-2 badge bg-success shadow-sm">Status Progress: {{ $project->progress_status }}</span>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8">
            <div class="card border-0 shadow-sm p-4 mb-4 bg-white rounded">
                <h4 class="fw-bold text-primary mb-3"><i class="bi bi-info-circle-fill me-2"></i>Deskripsi Solusi</h4>
                <p class="text-secondary lead fs-6">{{ $project->deskripsi_singkat }}</p>
            </div>
            <div class="card border-0 shadow-sm p-4 mb-4 bg-white rounded">
                <h4 class="fw-bold text-primary mb-3"><i class="bi bi-exclamation-triangle-fill me-2"></i>Analisis Masalah & Kebutuhan</h4>
                <h5 class="fw-bold text-dark mt-3">Latar Belakang Masalah:</h5>
                <p class="text-secondary">{{ $project->analisis_masalah }}</p>
                <h5 class="fw-bold text-dark mt-4">Fitur Utama Sistem:</h5>
                <ul class="list-group list-group-flush">
                    @foreach(explode(', ', $project->fitur_utama) as $fitur)
                        <li class="list-group-item text-secondary border-0 ps-0"><i class="bi bi-check-circle-fill text-success me-2"></i>{{ $fitur }}</li>
                    @endforeach
                </ul>
            </div>
            <div class="card border-0 shadow-sm p-4 mb-4 bg-white rounded">
                <h4 class="fw-bold text-primary mb-3"><i class="bi bi-cpu-fill me-2"></i>Arsitektur & Tech Stack</h4>
                <div class="d-flex flex-wrap gap-2 mt-2">
                    @foreach(explode(', ', $project->tech_stack) as $stack)
                        <span class="badge bg-dark px-3 py-2 fs-6">{{ $stack }}</span>
                    @endforeach
                </div>
            </div>
            <div class="card border-0 shadow-sm p-4 mb-4 bg-white rounded">
                <h4 class="fw-bold text-primary mb-3"><i class="bi bi-diagram-3-fill me-2"></i>Rencana Perancangan (Diagram)</h4>
                <div class="text-center p-2 border rounded bg-light">
                    <img src="https://placehold.co/600x400?text=Diagram+ERD+Sistem+Es+Teh" alt="Diagram ERD / Flowchart" class="img-fluid rounded shadow-sm">
                </div>
            </div>
        </div>
    </div>
    @else
    <div class="alert alert-warning mt-4">Data project belum siap di Database Docker Anda.</div>
    @endif
</div>
</body>
</html>