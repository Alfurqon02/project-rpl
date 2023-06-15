<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StatusPesan extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nama = ['Batal', 'Selesai', 'Book'];
        for($i = 0; $i < sizeof($nama); $i++){
            DB::table('parameter_status_pesanan')->insert([
                'nama' => $nama[$i],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
