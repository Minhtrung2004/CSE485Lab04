<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Reader;

class ReaderSeeder extends Seeder
{
    public function run(): void
    {
        Reader::factory()->count(10)->create();
    }
}
