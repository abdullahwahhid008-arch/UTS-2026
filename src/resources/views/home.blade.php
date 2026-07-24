<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Booking Servis Bengkel Motor Berbasis Web</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <style>
        body { font-family: 'Poppins', sans-serif; background: #eff4fb; color: #0f172a; }
        .navbar { background: rgba(255,255,255,.95); }
        .navbar-brand { font-weight: 700; letter-spacing: .05em; }
        .hero { min-height: 90vh; background: linear-gradient(180deg, #0f172a 0%, #1e293b 100%); color: #fff; }
        .hero h1 { font-size: clamp(2.5rem, 5vw, 4rem); }
        .section-title { letter-spacing: .1em; }
        .service-card, .form-card, .info-card { border: none; border-radius: 1.3rem; }
        .service-card:hover, .info-card:hover { transform: translateY(-6px); transition: transform .2s ease; }
        .btn-primary-custom { background: #dc2626; border: none; }
        .btn-primary-custom:hover { background: #b91c1c; }
        .badge-status { border-radius: 12px; padding: .4rem .85rem; font-size: .8rem; }
        .bg-soft { background: #f8fafc; }
        /* Mobile improvements */
        body { padding-top: 76px; }
        .hero .card img { width: 100%; height: auto; object-fit: cover; display: block; }
        .hero .card { border-radius: 1rem; overflow: hidden; }
        .btn-responsive-full { width: auto; }
        @media (max-width: 768px) {
            .hero { min-height: auto; padding-top: 5rem; padding-bottom: 5rem; }
            .hero h1 { font-size: 2.5rem; }
            .d-flex.flex-column.flex-sm-row.gap-3.mt-4 { flex-direction: column !important; }
            .btn-lg { width: 100%; }
            body { padding-top: 72px; }
            .table-responsive table { font-size: .9rem; }
        }
        /* Mobile bottom nav and FAB */
        .mobile-bottom-nav { box-shadow: 0 -6px 20px rgba(2,6,23,0.08); }
        .mobile-bottom-nav a { color: #0f172a; text-decoration: none; font-size: .85rem; }
        .fab { right: 1rem; bottom: 4.75rem; width: 56px; height: 56px; border-radius: 50%; background: #dc2626; color: #fff; display: flex; align-items: center; justify-content: center; box-shadow: 0 8px 24px rgba(13,23,34,0.12); z-index: 1055; }
        .fab:active { transform: scale(.98); }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light shadow-sm fixed-top">
    <div class="container py-3">
        <a class="navbar-brand text-dark" href="{{ url('/') }}"><i class="bi bi-wrench-adjustable me-2 text-danger"></i>Bengkel Motor</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item"><a class="nav-link active" href="#home">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#booking">Booking</a></li>
                <li class="nav-item"><a class="nav-link" href="#tentang">Tentang</a></li>
                <li class="nav-item"><a class="nav-link" href="#layanan">Layanan</a></li>
                <li class="nav-item"><a class="nav-link" href="#kontak">Kontak</a></li>
                <li class="nav-item"><a class="btn btn-danger btn-sm text-white ms-3" href="{{ url('/admin') }}">Login</a></li>
            </ul>
        </div>
    </div>
</nav>

<header id="home" class="hero d-flex align-items-center">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-6 text-white pt-5 mt-5">
                <span class="badge bg-danger mb-3">Booking Servis Motor</span>
                <h1 class="fw-bold">Service Motor Lebih Mudah</h1>
                <p class="lead text-white-75">Booking servis online tanpa antre. Pilih layanan, atur jadwal, dan pantau status service motor Anda.</p>
                <div class="d-flex flex-column flex-sm-row gap-3 mt-4">
                    <a href="#booking" class="btn btn-primary-custom btn-lg px-4">Booking Sekarang</a>
                    <a href="#layanan" class="btn btn-outline-light btn-lg px-4">Layanan Kami</a>
                </div>
            </div>
            <div class="col-lg-6 mt-5 mt-lg-0">
                <div class="card shadow-lg border-0 overflow-hidden rounded-4">
                    <?php
                    // Prefer user's uploaded 'bengkel.jpg', then legacy hero files, then remote fallback
                    $bengkel = public_path('images/bengkel.jpg');
                    $heroNamed = public_path('images/hero_bengkel.jpg');
                    $heroCustom = public_path('images/hero_custom.jpg');
                    $heroSvg = public_path('images/hero_custom.svg');
                    $heroUrl = '';
                    if (file_exists($bengkel)) {
                        $heroUrl = asset('images/bengkel.jpg');
                    } elseif (file_exists($heroNamed)) {
                        $heroUrl = asset('images/hero_bengkel.jpg');
                    } elseif (file_exists($heroCustom)) {
                        $heroUrl = asset('images/hero_custom.jpg');
                    } elseif (file_exists($heroSvg)) {
                        $heroUrl = asset('images/hero_custom.svg');
                    } else {
                        $heroUrl = 'https://images.unsplash.com/photo-1511919884226-fd3cad34687c?auto=format&fit=crop&w=1200&q=80';
                    }
                    ?>
                    <img src="<?php echo e($heroUrl); ?>" class="img-fluid" alt="Service Motor">
                </div>
            </div>
        </div>
    </div>
</header>

<section id="layanan" class="py-5 bg-soft">
    <div class="container">
        <div class="row align-items-center mb-5">
            <div class="col-lg-8">
                <h2 class="fw-bold">Layanan Kami</h2>
                <p class="text-muted">Solusi servis lengkap untuk semua tipe motor dengan mekanik profesional dan proses cepat.</p>
            </div>
        </div>
        <div class="row g-4">
            @php
                $cards = [
                    ['Ganti Oli','Ganti oli mesin berkualitas','bi-droplet-fill'],
                    ['Tune Up','Performa mesin lebih optimal','bi-gear-fill'],
                    ['Service Ringan','Pengecekan komponen ringan dan cepat','bi-check-circle-fill'],
                    ['Service Besar','Perawatan menyeluruh mesin dan kelistrikan','bi-wrench-adjustable-circle-fill'],
                    ['Kelistrikan','Perbaikan sistem listrik motor','bi-bolt-fill'],
                    ['Ban','Penggantian dan perawatan ban motor','bi-circle-half']
                ];
            @endphp
            @foreach($cards as $card)
                <div class="col-sm-6 col-lg-4">
                    <div class="card service-card shadow-sm p-4 h-100">
                        <div class="mb-3 text-danger fs-3"><i class="bi {{ $card[2] }}"></i></div>
                        <h5 class="fw-bold">{{ $card[0] }}</h5>
                        <p class="text-muted">{{ $card[1] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section id="booking" class="py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="card form-card shadow-sm border-0 p-4 h-100">
                    <div class="mb-4">
                        <span class="badge bg-danger mb-2">Booking Servis</span>
                        <h2 class="fw-bold">Booking sekarang, servis lebih cepat</h2>
                        <p class="text-muted">Isi form booking servis motor Anda dan pilih jadwal sesuai ketersediaan.</p>
                    </div>
                    <form>
                        <div class="row g-3">
                            <div class="col-12 col-sm-6">
                                <label class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" placeholder="Masukkan nama lengkap">
                            </div>
                            <div class="col-12 col-sm-6">
                                <label class="form-label">No. HP</label>
                                <input type="text" class="form-control" placeholder="Masukkan nomor HP">
                            </div>
                            <div class="col-12 col-sm-6">
                                <label class="form-label">Jenis Motor</label>
                                <select class="form-select">
                                    <option selected>Pilih jenis motor</option>
                                    <option value="matic">Motor Matic</option>
                                    <option value="sport">Motor Sport</option>
                                    <option value="bebek">Motor Bebek</option>
                                </select>
                            </div>
                            <div class="col-12 col-sm-6">
                                <label class="form-label">Plat Nomor</label>
                                <input type="text" class="form-control" placeholder="Masukkan plat nomor">
                            </div>
                            <div class="col-12 col-sm-6">
                                <label class="form-label">Tanggal Booking</label>
                                <input type="date" class="form-control">
                            </div>
                            <div class="col-12 col-sm-6">
                                <label class="form-label">Jam</label>
                                <select class="form-select">
                                    <option selected>Pilih jam</option>
                                    <option>09:00</option>
                                    <option>10:30</option>
                                    <option>13:00</option>
                                    <option>14:30</option>
                                </select>
                            </div>
                            <div class="col-12 col-sm-6">
                                <label class="form-label">Jenis Servis</label>
                                <select class="form-select">
                                    <option selected>Pilih jenis servis</option>
                                    <option>Ganti Oli</option>
                                    <option>Tune Up</option>
                                    <option>Service Ringan</option>
                                    <option>Service Besar</option>
                                    <option>Kelistrikan</option>
                                    <option>Ban</option>
                                </select>
                            </div>
                            <div class="col-12 col-sm-6">
                                <label class="form-label">Keluhan</label>
                                <input type="text" class="form-control" placeholder="Tuliskan keluhan motor Anda">
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary-custom btn-lg mt-4">Booking Sekarang</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card history-card shadow-sm border-0 p-4 h-100">
                    <div class="mb-4">
                        <span class="badge bg-danger mb-2">Riwayat Booking</span>
                        <h2 class="fw-bold">Riwayat Booking</h2>
                        <p class="text-muted">Lihat ringkasan booking motor terbaru dan status pengerjaan.</p>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-borderless align-middle">
                            <thead class="table-light">
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Jam</th>
                                <th>Servis</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>20/06/2024</td>
                                <td>09:00</td>
                                <td>Ganti Oli</td>
                                <td><span class="badge bg-success badge-status">Selesai</span></td>
                                <td><a href="#" class="text-danger">Lihat</a></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>18/06/2024</td>
                                <td>10:30</td>
                                <td>Tune Up</td>
                                <td><span class="badge bg-success badge-status">Selesai</span></td>
                                <td><a href="#" class="text-danger">Lihat</a></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>15/06/2024</td>
                                <td>14:00</td>
                                <td>Service Ringan</td>
                                <td><span class="badge bg-warning text-dark badge-status">Diproses</span></td>
                                <td><a href="#" class="text-danger">Lihat</a></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>10/06/2024</td>
                                <td>11:00</td>
                                <td>Kelistrikan</td>
                                <td><span class="badge bg-danger badge-status">Dibatalkan</span></td>
                                <td><a href="#" class="text-danger">Lihat</a></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="tentang" class="py-5 bg-white">
    <div class="container">
        <div class="row align-items-center gy-4">
            <div class="col-lg-6">
                <h2 class="fw-bold">Tentang Bengkel Motor</h2>
                <p class="text-muted">Solusi terbaik untuk perawatan motor Anda dengan booking servis online yang cepat dan terpercaya.</p>
                <div class="row g-3 mt-3">
                    <div class="col-12">
                        <div class="d-flex gap-3 align-items-start">
                            <div class="text-danger fs-3"><i class="bi bi-speedometer2"></i></div>
                            <div>
                                <h6 class="fw-bold">Manajemen Service</h6>
                                <p class="mb-0 text-muted">Pantau status servis dan riwayat booking dengan mudah.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-flex gap-3 align-items-start">
                            <div class="text-danger fs-3"><i class="bi bi-people-fill"></i></div>
                            <div>
                                <h6 class="fw-bold">Data Pelanggan</h6>
                                <p class="mb-0 text-muted">Simpan data pelanggan dan informasi motor secara rapi.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-flex gap-3 align-items-start">
                            <div class="text-danger fs-3"><i class="bi bi-tools"></i></div>
                            <div>
                                <h6 class="fw-bold">Mekanik & Laporan</h6>
                                <p class="mb-0 text-muted">Kelola jadwal mekanik dan laporan servis dalam satu halaman.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row g-4">
                    <div class="col-sm-6">
                        <div class="card info-card shadow-sm p-4 h-100">
                            <h5 class="fw-bold">Dashboard</h5>
                            <p class="text-muted">Pantau servis dan update progress di satu tempat.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card info-card shadow-sm p-4 h-100">
                            <h5 class="fw-bold">Pelanggan</h5>
                            <p class="text-muted">Data pelanggan tertata dengan baik untuk pelayanan cepat.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card info-card shadow-sm p-4 h-100">
                            <h5 class="fw-bold">Mekanik</h5>
                            <p class="text-muted">Jadwal teknisi teratur untuk kelancaran servis.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card info-card shadow-sm p-4 h-100">
                            <h5 class="fw-bold">Laporan</h5>
                            <p class="text-muted">Laporan servis detail dari awal sampai selesai.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="kontak" class="py-5 bg-soft">
    <div class="container">
        <div class="row align-items-center gy-4">
            <div class="col-lg-6">
                <h2 class="fw-bold">Hubungi Kami</h2>
                <p class="text-muted">Kami siap membantu Anda book servis motor dengan cepat dan aman.</p>
                <div class="row g-3 mt-3">
                    <div class="col-12">
                        <div class="d-flex align-items-center gap-3">
                            <div class="text-danger fs-3"><i class="bi bi-geo-alt-fill"></i></div>
                            <div>
                                <p class="mb-1 fw-bold">Alamat</p>
                                <p class="mb-0 text-muted">Jl. Raya Bengkel No. 123, Jakarta, Indonesia</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-flex align-items-center gap-3">
                            <div class="text-danger fs-3"><i class="bi bi-telephone-fill"></i></div>
                            <div>
                                <p class="mb-1 fw-bold">Telepon</p>
                                <p class="mb-0 text-muted">0857-1234-5678</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-flex align-items-center gap-3">
                            <div class="text-danger fs-3"><i class="bi bi-envelope-fill"></i></div>
                            <div>
                                <p class="mb-1 fw-bold">Email</p>
                                <p class="mb-0 text-muted">bengkelmotor@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card contact-card shadow-sm border-0 p-4 h-100">
                    <h5 class="fw-bold">Kirim Pesan</h5>
                    <p class="text-muted">Isi form di bawah untuk pertanyaan atau permintaan booking.</p>
                    <form action="{{ url('/contact') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" name="nama" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Pesan</label>
                            <textarea name="pesan" rows="4" class="form-control" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary-custom">Kirim Pesan Sekarang</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="py-4 bg-white">
    <div class="container text-center">
        <p class="mb-0">© 2026 Sistem Booking Servis Bengkel Motor Berbasis Web.</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- Mobile bottom navigation (visible on small screens) -->
<nav class="mobile-bottom-nav d-lg-none fixed-bottom bg-white border-top">
    <div class="d-flex justify-content-around py-2">
        <a href="#home" class="text-center d-block" aria-label="Home"><i class="bi bi-house-fill fs-5"></i><div>Home</div></a>
        <a href="#booking" class="text-center d-block" aria-label="Booking"><i class="bi bi-calendar-check-fill fs-5 text-danger"></i><div>Booking</div></a>
        <a href="#layanan" class="text-center d-block" aria-label="Layanan"><i class="bi bi-list-task fs-5"></i><div>Layanan</div></a>
        <a href="#kontak" class="text-center d-block" aria-label="Kontak"><i class="bi bi-telephone-fill fs-5"></i><div>Kontak</div></a>
    </div>
</nav>
<!-- Floating quick-action button (booking) -->
<a href="#booking" class="fab d-lg-none" title="Booking Sekarang"><i class="bi bi-wrench-adjustable fs-4"></i></a>
<script>
    // Smooth scroll for mobile nav links
    document.querySelectorAll('.mobile-bottom-nav a, .fab').forEach(function(el){
        el.addEventListener('click', function(e){
            var href = this.getAttribute('href');
            if(href && href.startsWith('#')){
                e.preventDefault();
                var target = document.querySelector(href);
                if(target){
                    var y = target.getBoundingClientRect().top + window.scrollY - 70; // offset for navbar
                    window.scrollTo({ top: y, behavior: 'smooth' });
                }
            }
        });
    });
</script>
</body>
</html>
