<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('services')->insert([
            // Category 1 - General Consultation
            [
                'service_name' => 'Konsultasi Dokter Umum (Offline)',
                'description' => 'Pemeriksaan langsung dengan dokter umum di klinik',
                'availability' => '09.00 - 17.00',
                'category_id' => 1,
                'price' => 150000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'service_name' => 'Konsultasi Kesehatan Ringan',
                'description' => 'Konsultasi untuk keluhan ringan seperti flu dan demam',
                'availability' => '08.00 - 20.00',
                'category_id' => 1,
                'price' => 100000,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Category 2 - Specialist Consultation
            [
                'service_name' => 'Konsultasi Spesialis Jantung',
                'description' => 'Pemeriksaan dan konsultasi dengan dokter spesialis jantung',
                'availability' => '10.00 - 14.00',
                'category_id' => 2,
                'price' => 1200000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'service_name' => 'Konsultasi Spesialis Anak',
                'description' => 'Layanan kesehatan khusus untuk anak',
                'availability' => '09.00 - 13.00',
                'category_id' => 2,
                'price' => 900000,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Category 3 - Medical Check-up
            [
                'service_name' => 'Medical Check-up Basic',
                'description' => 'Paket pemeriksaan kesehatan dasar',
                'availability' => '07.00 - 12.00',
                'category_id' => 3,
                'price' => 750000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'service_name' => 'Medical Check-up Lengkap',
                'description' => 'Pemeriksaan kesehatan menyeluruh dengan berbagai parameter',
                'availability' => '07.00 - 11.00',
                'category_id' => 3,
                'price' => 2000000,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Category 4 - Laboratory Tests
            [
                'service_name' => 'Tes Darah Lengkap',
                'description' => 'Pemeriksaan darah lengkap untuk diagnosis',
                'availability' => '08.00 - 15.00',
                'category_id' => 4,
                'price' => 300000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'service_name' => 'Tes COVID-19 PCR',
                'description' => 'Tes PCR untuk deteksi virus COVID-19',
                'availability' => '09.00 - 16.00',
                'category_id' => 4,
                'price' => 500000,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Category 5 - Telemedicine
            [
                'service_name' => 'Chat Dokter 24 Jam',
                'description' => 'Layanan chat dengan dokter kapan saja',
                'availability' => '24 Jam',
                'category_id' => 5,
                'price' => 75000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'service_name' => 'Video Call Dokter',
                'description' => 'Konsultasi dokter melalui video call',
                'availability' => '08.00 - 22.00',
                'category_id' => 5,
                'price' => 200000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
