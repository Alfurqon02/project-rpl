<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesanan;

class ResumeDataController extends Controller
{
    public function index()
    {
        // Menghitung jumlah pesanan
        $jumlahPesanan = Pesanan::count();

        // Menghitung pemasukan
        $pemasukan = Pesanan::sum('total_pembayaran');

        // Menghitung jumlah meja terpesan
        $jumlahMejaTerpesan = Pesanan::where('status_pesanan', 'booking')->count();

        // Menghitung jumlah pesanan yang belum selesai
        $jumlahPesananBelumSelesai = Pesanan::where('status_pesanan', 'booking')->count();

        return view('index', [
            'jumlahPesanan' => $jumlahPesanan,
            'pemasukan' => $pemasukan,
            'jumlahMejaTerpesan' => $jumlahMejaTerpesan,
            'jumlahPesananBelumSelesai' => $jumlahPesananBelumSelesai
        ]);
    }
}
