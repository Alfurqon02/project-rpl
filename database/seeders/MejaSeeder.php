<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MejaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nama = ['L101', 'L201', 'TS01', 'TB01', 'R01', 'MR'];
        $id_area = ['1', '2', '3', '4', '5', '6'];
        for($i = 0; $i < sizeof($nama) && $i < sizeof($id_area); $i++){
            DB::table('meja')->insert([
                'kode' => $nama[$i],
                'id_area' => $id_area[$i],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
    }
    }
}
