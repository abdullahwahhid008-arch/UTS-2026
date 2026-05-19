<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

// 1. Halaman Utama / Profil Personal (Bobot 40%)
Route::get('/', function () {
    return view('home');
});

// 2. Halaman Detail Project Es Teh Dinamis (Bobot 40%)
Route::get('/project', function () {
    // Mengambil data pertama dari tabel final_projects
    $project = DB::table('final_projects')->first();
    return view('project_detail', compact('project'));
});

// 3. Halaman Panel Admin (Bobot 20%)
Route::get('/admin', function () {
    $project = DB::table('final_projects')->first();
    return view('admin_panel', compact('project'));
});

// 4. Proses CRUD Simpan Perubahan Status oleh Dosen/Admin
Route::post('/admin/update-status', function (Request $request) {
    DB::table('final_projects')
        ->where('id', $request->id)
        ->update(['progress_status' => $request->status]);

    return redirect('/admin')->with('success', 'Status progress berhasil diperbarui secara dinamis!');
});