<?php

namespace Database\Seeders;

use App\Models\Orderproduct;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderproductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Orderproduct::factory()->count(200)->create();
    }
}
