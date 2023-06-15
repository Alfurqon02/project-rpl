<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nama = ['Lantai 1', 'Lantai 2', 'Teras Samping', 'Teras Belakang', 'Rumput', 'Meeting Room'];
        for($i = 0; $i < sizeof($nama); $i++){
            DB::table('area')->insert([
                'nama' => $nama[$i],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
    }
}
}
