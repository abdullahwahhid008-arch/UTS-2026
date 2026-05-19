<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Portofolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
</head>
<body class="bg-light">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold" href="http://localhost/index.php">Portfolio</a>
        <div class="navbar-nav ms-auto">
            <a class="nav-link text-white me-3" href="http://localhost/index.php">Project Akhir</a>
            <a class="nav-link btn btn-primary btn-sm text-white px-3" href="http://localhost/index.php/admin">Admin Panel</a>
        </div>
    </div>
</nav>

<div class="container mt-5 pt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="fw-bold text-dark mb-4"><i class="bi bi-sliders me-2"></i>Panel Admin Backend (Laravel Mode)</h2>
            <div class="card border-0 shadow-sm p-4 bg-white rounded">
                <h6 class="fw-bold text-dark mb-4">Sistem Pemesanan Es Teh dan Minuman Kekinian Berbasis Web</h6>
                <form>
                    <div class="mb-4">
                        <label for="status" class="form-label fw-bold">Ubah Status Progress:</label>
                        <select class="form-select" id="status" name="status">
                            <option value="Proposal" selected>1. Proposal</option>
                            <option value="Analisis Sistem">2. Analisis Sistem</option>
                            <option value="Perancangan">3. Perancangan</option>
                            <option value="Implementasi">4. Implementasi</option>
                            <option value="Selesai">5. Selesai</option>
                        </select>
                    </div>
                    <button type="button" onclick="alert('Simpan perubahan simulasi berhasil!')" class="btn btn-success w-100 fw-bold shadow-sm">Simpan Perubahan</button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>