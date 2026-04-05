<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('doctors')->insert([
            [
                'name' => 'Dr. Andi Saputra',
                'specialization' => 'Umum',
                'email' => 'andi@hospital.com',
                'phone' => '081234567001',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Dr. Budi Santoso',
                'specialization' => 'Jantung',
                'email' => 'budi@hospital.com',
                'phone' => '081234567002',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Dr. Citra Lestari',
                'specialization' => 'Anak',
                'email' => 'citra@hospital.com',
                'phone' => '081234567003',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Dr. Dedi Pratama',
                'specialization' => 'Kulit',
                'email' => 'dedi@hospital.com',
                'phone' => '081234567004',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Dr. Eka Wijaya',
                'specialization' => 'Saraf',
                'email' => 'eka@hospital.com',
                'phone' => '081234567005',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Dr. Farah Nabila',
                'specialization' => 'Gigi',
                'email' => 'farah@hospital.com',
                'phone' => '081234567006',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Dr. Galih Prakoso',
                'specialization' => 'Ortopedi',
                'email' => 'galih@hospital.com',
                'phone' => '081234567007',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
