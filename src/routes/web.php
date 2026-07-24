<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;

// 1. Halaman Utama / Profil Personal (Bobot 40%)
Route::get('/', function () {
    // ambil 3 project terbaru untuk ditampilkan di homepage
    $projects = DB::table('final_projects')->orderBy('id', 'desc')->limit(3)->get();
    $author = 'Abdullah Wahid';
    return view('home', compact('projects', 'author'));
});

// 2. Halaman Showcase / Daftar Project (Bobot 40%)
Route::get('/project', function () {
    $projects = DB::table('final_projects')->get();
    return view('projects', compact('projects'));
});

// 3. Halaman Detail Laporan Awal Project Akhir
Route::get('/project/{id}', function ($id) {
    $project = DB::table('final_projects')->find($id);
    if (!$project) {
        abort(404);
    }
    return view('project_detail', compact('project'));
});

// 4. Halaman Contact Dinamis
Route::get('/contact', function () {
    return view('contact');
});

Route::post('/contact', function (Request $request) {
    $request->validate([
        'nama' => 'required|string|max:150',
        'email' => 'required|email|max:150',
        'pesan' => 'required|string|max:2000',
    ]);

    DB::table('contacts')->insert([
        'nama' => $request->nama,
        'email' => $request->email,
        'pesan' => $request->pesan,
        'created_at' => now(),
    ]);

    return redirect('/contact')->with('success', 'Pesan berhasil terkirim. Terima kasih!');
});

// 5. Halaman Panel Admin (Bobot 20%)
Route::get('/admin', function () {
    $project = DB::table('final_projects')->first();
    $totalBookings = DB::table('contacts')->count();
    $latestBookings = DB::table('contacts')->orderBy('created_at', 'desc')->limit(5)->get();
    $statusCounts = DB::table('final_projects')
        ->select('progress_status', DB::raw('count(*) as count'))
        ->groupBy('progress_status')
        ->pluck('count', 'progress_status');

    return view('admin_panel', compact('project', 'totalBookings', 'latestBookings', 'statusCounts'));
});

// 6. Proses Update Laporan Project Akhir
Route::post('/admin/update-status', function (Request $request) {
    $request->validate([
        'id' => 'required|integer',
        'judul' => 'required|string|max:255',
        'deskripsi_singkat' => 'required|string',
        'progress_status' => 'required|string|max:100',
    ]);

    DB::table('final_projects')
        ->where('id', $request->id)
        ->update([
            'judul' => $request->judul,
            'deskripsi_singkat' => $request->deskripsi_singkat,
            'progress_status' => $request->progress_status,
            'updated_at' => now(),
        ]);

    return redirect('/admin')->with('success', 'Update laporan project berhasil disimpan.');
});