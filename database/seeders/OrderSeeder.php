<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            [
                'customer_name' => 'Alice',
                'total' => 120.50,
                'status' => 'completed',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'customer_name' => 'Bob',
                'total' => 80.25,
                'status' => 'pending',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'customer_name' => 'Charlie',
                'total' => 200.00,
                'status' => 'completed',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'customer_name' => 'David',
                'total' => 150.75,
                'status' => 'processing',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'customer_name' => 'Eve',
                'total' => 99.99,
                'status' => 'pending',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
