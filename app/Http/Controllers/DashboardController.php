<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesanan;
use Carbon\Carbon;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Menghitung jumlah pesanan
        $jumlahPesanan = Pesanan::count();

        // Menghitung pemasukan
        $pemasukan = Pesanan::sum('total_pembayaran');

        // Menghitung jumlah meja terpesan
        $jumlahMejaTerpesan = Pesanan::where('status_pesanan', '3')->count();

        // Menghitung jumlah pesanan yang belum selesai
        $jumlahPesananBelumSelesai = Pesanan::where('status_pembayaran', '0')->count();    
        
        $pesanan = Pesanan::all();

        // $events = [];

        // foreach ($pesanan as $pesan) {
        //     $start = Carbon::createFromFormat('H:i:s', $pesan->jam_booking)->format('Y-m-d H:i:s');
        //     $events[] = [
        //         'title' => $pesan->nama_pemesan,
        //         'start' => $start,
        //     ];
        // }

        return view('dashboard.index', compact('jumlahPesanan', 'pemasukan', 'jumlahMejaTerpesan', 'jumlahPesananBelumSelesai', 'pesanan'));  
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
