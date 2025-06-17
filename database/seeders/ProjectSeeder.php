<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            ['Proyek Kolaborasi', 'Sistem manajemen proyek kolaboratif modern.', '2025-06-01', '2025-07-01', 'active'],
            ['Proyek Website', 'Pembuatan website company profile.', '2025-07-10', '2025-08-10', 'draft'],
            ['Aplikasi Mobile', 'Pengembangan aplikasi mobile Android.', '2025-05-01', '2025-06-15', 'completed'],
            ['Sistem Inventaris', 'Sistem inventaris barang untuk kantor.', '2025-04-01', '2025-05-20', 'archived'],
            ['Portal Akademik', 'Portal akademik untuk universitas.', '2025-08-01', '2025-09-15', 'active'],
            ['E-Commerce', 'Platform toko online modern.', '2025-09-01', '2025-10-10', 'draft'],
        ];
        foreach ($projects as $p) {
            \App\Models\Project::create([
                'name' => $p[0],
                'description' => $p[1],
                'start_date' => $p[2],
                'end_date' => $p[3],
                'status' => $p[4],
            ]);
        }
    }
}
