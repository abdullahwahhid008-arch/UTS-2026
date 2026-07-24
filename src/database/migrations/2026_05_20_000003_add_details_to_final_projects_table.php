<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('final_projects', function (Blueprint $table) {
            $table->text('analisis_masalah')->nullable()->after('deskripsi_singkat');
            $table->text('fitur_utama')->nullable()->after('analisis_masalah');
            $table->text('tech_stack')->nullable()->after('fitur_utama');
        });
    }

    public function down(): void
    {
        Schema::table('final_projects', function (Blueprint $table) {
            $table->dropColumn(['analisis_masalah', 'fitur_utama', 'tech_stack']);
        });
    }
};
