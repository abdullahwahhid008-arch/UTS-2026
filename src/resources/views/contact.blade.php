<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak - Booking Servis Bengkel Motor</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <style>
        body { font-family: 'Poppins', sans-serif; background: #eff4fb; color: #0f172a; }
        .hero { background: #ffffff; }
        .contact-card { border-radius: 1.5rem; }
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
                <li class="nav-item"><a class="nav-link active" href="{{ url('/contact') }}">Kontak</a></li>
                <li class="nav-item"><a class="btn btn-danger btn-sm text-white ms-3" href="{{ url('/admin') }}">Admin Panel</a></li>
            </ul>
        </div>
    </div>
</nav>

<header class="hero py-5 pt-6">
    <div class="container text-center">
        <span class="badge bg-danger text-white px-3 py-2 mb-3">Kontak</span>
        <h1 class="display-5 fw-bold">Hubungi Booking Servis Bengkel Motor</h1>
        <p class="text-muted mx-auto col-lg-7">Isi form di bawah untuk reservasi servis motor, pertanyaan, atau kolaborasi bisnis.</p>
    </div>
</header>

<main class="container py-5">
    <div class="row g-4">
        <div class="col-lg-5">
            <div class="card contact-card shadow-sm p-4 h-100">
                <h3 class="fw-bold mb-3">Info Kontak</h3>
                <p class="text-muted">Kami siap membantu Anda booking servis motor dan menjawab pertanyaan seputar layanan bengkel.</p>
                <div class="mt-4">
                    <p class="mb-3"><i class="bi bi-geo-alt-fill text-danger me-2"></i><strong>Alamat:</strong> Jl. Raya Bengkel No. 123, Jakarta</p>
                    <p class="mb-3"><i class="bi bi-telephone-fill text-danger me-2"></i><strong>Telepon:</strong> 0857-1234-5678</p>
                    <p class="mb-0"><i class="bi bi-envelope-fill text-danger me-2"></i><strong>Email:</strong> bengkelmotor@gmail.com</p>
                </div>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="card contact-card shadow-sm p-4 h-100">
                <h3 class="fw-bold mb-3">Kirim Pesan</h3>
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ url('/contact') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Nama</label>
                        <input type="text" name="nama" class="form-control" value="{{ old('nama') }}" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Email</label>
                        <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Pesan</label>
                        <textarea name="pesan" rows="5" class="form-control" required>{{ old('pesan') }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary-custom w-100">Kirim Pesan</button>
                </form>
            </div>
        </div>
    </div>
</main>

<footer class="py-4 bg-white text-center">
    <div class="container">
        <p class="mb-0">© 2026 Booking Servis Bengkel Motor</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
