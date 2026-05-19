<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Abdullah Wahid</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
</head>
<body class="bg-light">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ url('/') }}">Portfolio</a>
        <div class="navbar-nav ms-auto">
            <a class="nav-link active" href="{{ url('/') }}">Home</a>
            <a class="nav-link text-white me-3" href="{{ url('/project') }}">Project Akhir</a>
            <a class="nav-link btn btn-primary btn-sm text-white px-3" href="{{ url('/admin') }}">Admin Panel</a>
        </div>
    </div>
</nav>

<div class="container mt-5 pt-5">
    <div class="row align-items-center py-5">
        <div class="col-md-4 text-center mb-4 mb-md-0">
            <div class="bg-secondary text-white rounded-circle d-inline-flex align-items-center justify-content-center shadow" style="width: 200px; height: 200px;">
                <i class="bi bi-person-fill" style="font-size: 100px;"></i>
            </div>
        </div>
        <div class="col-md-8">
            <span class="badge bg-primary px-3 py-2 text-uppercase mb-2">Mahasiswa</span>
            <h1 class="fw-bold text-dark display-5">Abdullah Wahid</h1>
            <p class="lead text-muted">Software Engineer & Systems Analyst | Berfokus pada Object-Oriented Programming (PBO), Database Design, dan Business Process Modeling.</p>
            <hr>
            <h5 class="fw-bold"><i class="bi bi-cpu me-2 text-primary"></i>Tech Stack Keahlian:</h5>
            <div class="d-flex flex-wrap gap-2 mt-2">
                <span class="badge bg-dark px-3 py-2 fs-6">Java (PBO)</span>
                <span class="badge bg-dark px-3 py-2 fs-6">PHP Laravel MVC</span>
                <span class="badge bg-dark px-3 py-2 fs-6">MySQL / MariaDB</span>
                <span class="badge bg-dark px-3 py-2 fs-6">Python (Data Visualization)</span>
            </div>
        </div>
    </div>
</div>
</body>
</html>