<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($dataProyek['judul']); ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-50 text-slate-800 antialiased">

    <nav class="bg-white border-b border-slate-200 sticky top-0 z-50">
        <div class="max-w-4xl mx-auto px-4 py-4 flex justify-between items-center">
            <a href="/" class="text-sm font-medium text-indigo-600 hover:underline">&larr; Kembali ke Portofolio</a>
            <span class="px-3 py-1 text-xs font-semibold bg-emerald-100 text-emerald-800 rounded-full">
                Status: <?= htmlspecialchars($dataProyek['progress_status']); ?>
            </span>
        </div>
    </nav>

    <main class="max-w-4xl mx-auto px-4 py-10 bg-white my-6 rounded-2xl shadow-sm border border-slate-200">
        
        <header class="border-b border-slate-100 pb-6">
            <h1 class="text-3xl font-black text-slate-900 tracking-tight mb-3">
                <?= htmlspecialchars($dataProyek['judul']); ?>
            </h1>
            <p class="text-lg text-slate-600 leading-relaxed">
                <?= htmlspecialchars($dataProyek['deskripsi']); ?>
            </p>
        </header>

        <section class="py-6 space-y-4">
            <h2 class="text-xl font-bold text-slate-900">1. Analisis Masalah & Kebutuhan Sistem</h2>
            <div class="bg-slate-50 p-4 rounded-xl border border-slate-200">
                <h3 class="text-sm font-semibold text-slate-500 uppercase tracking-wider mb-1">Latar Belakang Masalah:</h3>
                <p class="text-slate-700"><?= htmlspecialchars($dataProyek['analisis_masalah']); ?></p>
            </div>
            <div class="bg-slate-50 p-4 rounded-xl border border-slate-200">
                <h3 class="text-sm font-semibold text-slate-500 uppercase tracking-wider mb-1">Fitur Utama Sistem:</h3>
                <p class="text-slate-700"><?= htmlspecialchars($dataProyek['kebutuhan_sistem']); ?></p>
            </div>
        </section>

        <section class="py-6">
            <h2 class="text-xl font-bold text-slate-900 mb-3">2. Arsitektur & Tech Stack</h2>
            <p class="text-slate-600 mb-3">Teknologi yang diimplementasikan dalam pengembangan sistem ini meliputi:</p>
            <div class="flex flex-wrap gap-2">
                <?php 
                $stacks = explode(',', $dataProyek['tech_stack']);
                foreach($stacks as $stack): 
                ?>
                    <span class="px-3 py-1 bg-indigo-50 text-indigo-600 text-sm font-medium rounded-lg border border-indigo-100">
                        <?= htmlspecialchars(trim($stack)); ?>
                    </span>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="py-6">
            <h2 class="text-xl font-bold text-slate-900 mb-3">3. Rencana Perancangan (ERD / Flowchart)</h2>
            <p class="text-slate-600 mb-4">Berikut merupakan visualisasi struktur basis data (Entity Relationship Diagram) untuk sistem pemesanan:</p>
            
            <div class="border border-slate-200 rounded-xl overflow-hidden bg-slate-100 p-4 flex justify-center">
                <img src="<?= htmlspecialchars($dataProyek['diagram_url']); ?>" alt="Diagram Perancangan Sistem" class="max-w-full h-auto rounded-lg shadow-sm font-mono text-sm text-slate-400" alt="[Pastikan file gambar ERD ada di folder assets/images/]">
            </div>
        </section>

    </main>

    <footer class="text-center py-10 text-xs text-slate-400">
        Dibuat untuk penilaian Proyek Akhir &copy; 2026
    </footer>

</body>
</html>