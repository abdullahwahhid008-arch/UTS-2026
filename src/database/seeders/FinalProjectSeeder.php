<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FinalProjectSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('final_projects')->insert([
            'judul' => 'Sistem Booking Servis Bengkel Motor Berbasis Web',
            'deskripsi_singkat' => 'Aplikasi web untuk memesan layanan servis bengkel motor dengan halaman admin, form kontak, dan laporan proyek.',
            'analisis_masalah' => 'Bengkel motor kesulitan mengelola antrean servis dan jadwal mekanik secara manual, menyebabkan waktu tunggu panjang dan pencatatan servis tidak rapi.',
            'fitur_utama' => 'Booking servis motor, Penjadwalan mekanik, Notifikasi pelanggan, Laporan project',
            'tech_stack' => 'PHP, Laravel, MySQL, Docker, Nginx',
            'progress_status' => 'Selesai 80%',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
