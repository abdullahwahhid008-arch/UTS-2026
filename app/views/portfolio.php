<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio & Laporan Proyek Akhir - Abdullah Wahid</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body class="bg-slate-50 font-sans text-slate-800 scroll-smooth">

    <nav class="bg-emerald-900 text-white sticky top-0 z-50 shadow-md">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <span class="text-xl font-bold tracking-wider">Portfolio.</span>
            <div class="space-x-6 text-sm font-medium">
                <a href="#about" class="hover:text-emerald-300 transition">About</a>
                <a href="#project" class="hover:text-emerald-300 transition">Project Akhir</a>
                <a href="#contact" class="hover:text-emerald-300 transition">Contact</a>
                <a href="index.php?action=dashboard" class="bg-emerald-600 px-4 py-2 rounded-lg hover:bg-emerald-500 transition shadow"><i class="fa-solid fa-gauge mr-2"></i>Panel Admin</a>
            </div>
        </div>
    </nav>

    <header id="about" class="container mx-auto px-6 py-20 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
        <div>
            <span class="text-emerald-700 font-bold tracking-widest uppercase text-xs block mb-2">Web Developer Portfolio</span>
            <h1 class="text-4xl md:text-5xl font-black text-slate-900 leading-tight mb-4">Abdullah Wahid</h1>
            <p class="text-lg text-slate-600 mb-6 leading-relaxed">Saya adalah seorang mahasiswa Sistem Informasi yang berfokus pada rekayasa perangkat lunak. Suka membangun sistem backend yang terstruktur dan mengisolasi lingkungan pengembangan menggunakan teknologi kontainerisasi modern.</p>
            
            <div class="mb-6">
                <h3 class="text-xs font-bold uppercase tracking-wider text-slate-400 mb-2">Keahlian Utama:</h3>
                <div class="flex flex-wrap gap-2">
                    <span class="bg-white px-3 py-1 border border-slate-200 rounded-md text-xs font-semibold text-slate-700 shadow-sm">PHP OOP MVC</span>
                    <span class="bg-white px-3 py-1 border border-slate-200 rounded-md text-xs font-semibold text-slate-700 shadow-sm">Docker Container</span>
                    <span class="bg-white px-3 py-1 border border-slate-200 rounded-md text-xs font-semibold text-slate-700 shadow-sm">MySQL Relational DB</span>
                </div>
            </div>
        </div>
        <div class="flex justify-center">
            <div class="w-64 h-64 rounded-3xl bg-emerald-100 border-4 border-emerald-800 shadow-xl flex items-center justify-center">
                <i class="fa-solid fa-laptop-code text-7xl text-emerald-800"></i>
            </div>
        </div>
    </header>

    <section id="project" class="bg-white border-t border-b border-slate-200 py-16">
        <div class="container mx-auto px-6 max-w-4xl">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-extrabold text-slate-900">Laporan Awal Proyek Akhir</h2>
                <p class="text-slate-500 mt-1">Data di bawah ini ditarik secara dinamis dari database MySQL di dalam Docker.</p>
            </div>

            <div class="bg-slate-50 border border-slate-200 rounded-2xl p-8 shadow-sm">
                <div class="mb-6">
                    <span class="bg-emerald-100 text-emerald-800 text-xs font-bold px-3 py-1 rounded-full uppercase">Judul Tugas Akhir</span>
                    <h3 class="text-2xl font-bold text-slate-900 mt-2"><?= isset($project['judul']) ? htmlspecialchars($project['judul']) : 'Sistem Pemesanan Es Teh dan Minuman Kekinian Berbasis Web' ?></h3>
                </div>

                <div class="mb-8 bg-white p-4 border border-slate-200 rounded-xl">
                    <div class="flex justify-between text-sm font-bold mb-1">
                        <span class="text-slate-600">Progress Pengembangan:</span>
                        <span class="text-emerald-700"><?= isset($project['progress']) ? $project['progress'] : 0 ?>%</span>
                    </div>
                    <div class="w-full bg-slate-200 h-3 rounded-full overflow-hidden">
                        <div class="bg-emerald-600 h-full transition-all duration-500" style="width: <?= isset($project['progress']) ? $project['progress'] : 0 ?>%"></div>
                    </div>
                    <p class="text-xs text-slate-500 mt-2">Status Saat Ini: <strong class="text-slate-700"><?= isset($project['status']) ? htmlspecialchars($project['status']) : 'Setup Environment' ?></strong></p>
                </div>

                <div class="space-y-6">
                    <div>
                        <h4 class="font-bold text-emerald-900 text-base mb-1"><i class="fa-solid fa-circle-exclamation mr-2"></i>Analisis Masalah & Solusi</h4>
                        <p class="text-slate-600 text-sm leading-relaxed"><?= isset($project['deskripsi']) ? htmlspecialchars($project['deskripsi']) : 'Solusi digital berupa aplikasi web untuk memangkas antrean di gerai minuman kekinian, dilengkapi pencatatan pesanan otomatis dan manajemen stok bahan baku secara real-time.' ?></p>
                    </div>

                    <div>
                        <h4 class="font-bold text-emerald-900 text-base mb-1"><i class="fa-solid fa-layer-group mr-2"></i>Infrastruktur & Tech Stack</h4>
                        <p class="text-slate-600 text-sm leading-relaxed">Sistem dibangun dengan pola <strong>MVC (Model-View-Controller)</strong> menggunakan PHP Native OOP. Seluruh ekosistem diisolasi menggunakan <strong>Docker Compose</strong> terbagi atas web server Apache dan basis data MySQL 8.0.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="container mx-auto px-6 py-16 max-w-md">
        <div class="bg-white border border-slate-200 rounded-2xl p-8 shadow-sm">
            <h3 class="text-xl font-bold text-slate-900 text-center mb-6">Hubungi Saya</h3>
            <form action="#" method="POST" onsubmit="alert('Pesan Anda berhasil terkirim melalui Email Service!'); return false;" class="space-y-4">
                <div>
                    <label class="block text-xs font-bold text-slate-500 uppercase mb-1">Nama Lengkap</label>
                    <input type="text" required class="w-full p-3 border border-slate-200 rounded-lg text-sm bg-slate-50 focus:outline-emerald-600">
                </div>
                <div>
                    <label class="block text-xs font-bold text-slate-500 uppercase mb-1">Email</label>
                    <input type="email" required class="w-full p-3 border border-slate-200 rounded-lg text-sm bg-slate-50 focus:outline-emerald-600">
                </div>
                <div>
                    <label class="block text-xs font-bold text-slate-500 uppercase mb-1">Pesan</label>
                    <textarea rows="3" required class="w-full p-3 border border-slate-200 rounded-lg text-sm bg-slate-50 focus:outline-emerald-600"></textarea>
                </div>
                <button type="submit" class="w-full bg-slate-900 text-white font-bold py-3 rounded-lg hover:bg-slate-800 transition text-sm">Kirim Pesan</button>
            </form>
        </div>
    </section>

</body>
</html>