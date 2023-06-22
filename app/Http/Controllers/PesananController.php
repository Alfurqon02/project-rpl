<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Models\Area;
use App\Models\ParameterStatus;
use App\Models\MejaPesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        return view ('pesanan.index',[
            'pesanan' => Pesanan::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('pesanan.create',[
            'area'=> Area::with('meja')->get(),
            'status_pesanan' => ParameterStatus::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama_pemesan' => 'required|string',
            'no_hp_pemesan' => 'required',
            'meja_pesanan'=> 'required',
            'total_pembayaran' => 'required',
            'status_pembayaran' => 'required',
            'status_pesanan' => 'required',
            'tanggal_booking' => 'required',
            'jam_booking' => 'required'
        ]);

        $pesanan = Pesanan::create($validateData);

        $idPesanan = $pesanan->id;
        $meja = $request->meja_pesanan;
        for ($i = 0; $i < sizeof($meja); $i++){
            MejaPesanan::insert([
                'id_meja' => $meja[$i],
                'id_pesanan' => $idPesanan
            ]);

        }

        return redirect(route('pesanan.index'))->with('success', 'Pesanan berhasil dibuat');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pesanan $pesanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pesanan $pesanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pesanan $pesanan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pesanan $pesanan)
    {
        $pesanan->delete();
        return redirect(route('pesanan.index'))->with('success', 'Pesanan Telah dihapus!');
    }

    public function tampilanKitchen($id){
        // dd($id);
        $pesanan = DB::table('parameter_status_pesanan')
        ->join('pesanan', 'parameter_status_pesanan.id', '=', 'pesanan.status_pesanan')
        ->join('meja_pesanan', 'pesanan.id', '=', 'meja_pesanan.id_pesanan')
        ->join('meja', 'meja_pesanan.id_meja','=','meja.id')
        ->join('area', 'meja.id_area', '=', 'area.id')
        ->where('pesanan.id', '=', $id)
        ->select('pesanan.id as id',
                'pesanan.nama_pemesan as nama_pemesan',
                'pesanan.no_hp_pemesan as no_hp_pemesan',
                'pesanan.jam_booking as jam_booking',
                'parameter_status_pesanan.nama as status_pesanan',
                'pesanan.total_pembayaran as total_pembayaran',
                'pesanan.created_at as tanggal_pesanan',
                'pesanan.status_pembayaran',
                'meja.kode as kode_meja',
                'area.nama as nama_area')
        ->get();

        return json_encode($pesanan);
    }
}
