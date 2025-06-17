<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            ['Budi Manager', 'budi@proyek.com', 'Manager'],
            ['Siti Member', 'siti@proyek.com', 'Member'],
            ['Andi Viewer', 'andi@proyek.com', 'Viewer'],
            ['Rina Manager', 'rina@proyek.com', 'Manager'],
            ['Dewi Member', 'dewi@proyek.com', 'Member'],
            ['Tono Viewer', 'tono@proyek.com', 'Viewer'],
            ['Lina Manager', 'lina@proyek.com', 'Manager'],
            ['Fajar Member', 'fajar@proyek.com', 'Member'],
            ['Sari Viewer', 'sari@proyek.com', 'Viewer'],
            ['Yoga Member', 'yoga@proyek.com', 'Member'],
        ];
        foreach ($users as $u) {
            \App\Models\User::create([
                'name' => $u[0],
                'email' => $u[1],
                'password' => \Illuminate\Support\Facades\Hash::make('password'),
            ]);
        }
    }
}
