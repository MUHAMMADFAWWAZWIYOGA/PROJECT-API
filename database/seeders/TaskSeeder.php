<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tasks = [
            [1, 'Analisis Kebutuhan', 'Analisis kebutuhan sistem proyek kolaborasi.', 'in_progress', '2025-06-10', 50],
            [1, 'Desain UI', 'Membuat desain antarmuka aplikasi.', 'todo', '2025-06-15', 0],
            [2, 'Setup Hosting', 'Menyiapkan hosting untuk website.', 'todo', '2025-07-15', 0],
            [2, 'Deploy Website', 'Deploy ke server production.', 'todo', '2025-08-09', 0],
            [3, 'Riset Fitur', 'Riset fitur aplikasi mobile.', 'done', '2025-05-10', 100],
            [3, 'Implementasi API', 'Integrasi API ke aplikasi mobile.', 'in_progress', '2025-06-01', 60],
            [4, 'Input Data Barang', 'Input data awal inventaris.', 'done', '2025-04-10', 100],
            [4, 'Laporan Inventaris', 'Generate laporan inventaris.', 'done', '2025-05-15', 100],
            [5, 'Desain Database', 'Desain database portal akademik.', 'todo', '2025-08-05', 0],
            [5, 'Integrasi SSO', 'Integrasi Single Sign On.', 'todo', '2025-08-20', 0],
            [6, 'Setup Payment', 'Integrasi payment gateway.', 'todo', '2025-09-10', 0],
            [6, 'Upload Produk', 'Upload produk awal ke toko.', 'todo', '2025-09-15', 0],
        ];
        foreach ($tasks as $t) {
            \App\Models\Task::create([
                'project_id' => $t[0],
                'name' => $t[1],
                'description' => $t[2],
                'status' => $t[3],
                'due_date' => $t[4],
                'progress' => $t[5],
            ]);
        }
    }
}
