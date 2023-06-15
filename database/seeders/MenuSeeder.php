<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nama = ['Nasi Goreng', 'Nasi Rames', 'Cheese Cake', 'Red Velvet Cake', 'Wine', 'Lemon Squash'];
        $id_kategori = ['3', '3', '1', '1', '2', '2'];
        for($i = 0; $i < sizeof($nama) && $i < sizeof($id_kategori); $i++){
            DB::table('menu')->insert([
                'nama' => $nama[$i],
                'id_kategori' => $id_kategori[$i],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
