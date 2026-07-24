<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('contacts')->insert([
            'nama' => 'Admin Test',
            'email' => 'admin@example.com',
            'pesan' => 'Contoh pesan kontak awal untuk memastikan tabel kontak bekerja.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
