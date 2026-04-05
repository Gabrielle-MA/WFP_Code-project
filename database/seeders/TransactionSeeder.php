<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [];

        for ($i = 0; $i < 30; $i++) {
            $data[] = [
                'user_id' => rand(1, 7),      // total user 7 (2 seed + 5 faker)
                'doctor_id' => rand(1, 7),      // total dokter 7
                'service_id' => rand(1, 5),   // total service 5
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('transactions')->insert($data);
    }
}
