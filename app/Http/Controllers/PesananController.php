<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Models\Area;
use App\Models\Kategori;
use App\Models\Menu;
use App\Models\ParameterStatus;
use App\Models\MejaPesanan;
use App\Models\MenuPesanan;
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
            'kategori'=>Kategori::with('menu')->get(),
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
            'menu_pesanan' => 'required',
            'total_pembayaran' => 'required',
            'status_pembayaran' => 'required',
            'status_pesanan' => 'required',
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
        $menu = $request->menu_pesanan;
        for ($i = 0; $i < sizeof($menu); $i++){
            MenuPesanan::insert([
                'id_menu' => $menu[$i],
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
        // $result = DB::table('parameter_status_pesanan')
        // ->join('pesanan', 'parameter_status_pesanan.id', '=', 'pesanan.status_pesanan')
        // ->join('meja_pesanan', 'pesanan.id', '=', 'meja_pesanan.id_pesanan')
        // ->join('meja', 'meja_pesanan.id_meja','=','meja.id')
        // ->join('area', 'meja.id_area', '=', 'area.id')
        // ->join('menu_pesanan', 'pesanan.id', '=', 'menu_pesanan.id_pesanan')
        // ->join('menu', 'menu.id', '=', 'menu_pesanan.id_menu')
        // ->where('pesanan.id', '=', $pesanan->id)
        // ->select('pesanan.id as id',
        //         'pesanan.nama_pemesan as nama_pemesan',
        //         'pesanan.no_hp_pemesan as no_hp_pemesan',
        //         'pesanan.jam_booking as jam_booking',
        //         'parameter_status_pesanan.nama as status_pesanan',
        //         'pesanan.total_pembayaran as total_pembayaran',
        //         'pesanan.created_at as tanggal_pesanan',
        //         'pesanan.status_pembayaran',
        //         'meja.id as id_meja',
        //         'meja.kode as kode_meja',
        //         'area.nama as nama_area',
        //         'menu.nama as menu')
        // ->get();
        // $toJson = [
        //     "pesanan" => [
        //         "id"=> $result[0]->id,
        //         "nama_pemesan" => $result[0]->nama_pemesan,
        //         "no_hp_pemesam" => $result[0]->no_hp_pemesan,
        //         "jam_booking" => $result[0]->jam_booking,
        //         "total_pembayaran" => $result[0]->total_pembayaran,
        //         'tanggal_pesanan' => $result[0]->tanggal_pesanan,
        //         'status_pembayaran' => $result[0]->status_pembayaran
        //     ],
        //     'area' => [],
        //     'meja' => [],
        //     'menu' => []
        // ];



        // foreach ($result as $r){
        //     array_push($toJson['area'], ['nama_area' => $r->nama_area]);
        //     array_push($toJson['meja'], [
        //         'id_meja' => $r->id_meja,
        //         'kode_meja' => $r->kode_meja
        //     ]);
        //     array_push($toJson['menu'], ['menu' => $r->menu]);

        //     // if ($toJson['area'] == null){
        //     //     array_push($toJson['area'], ['nama_area' => $r->nama_area]);
        //     // }
        //     //     foreach ($toJson['area'] as $area){
        //     //         return $area;
        //     //         if ($area['nama_area'] != $r->nama_area){
        //     //             array_push($toJson['area'], ['nama_area' => $r->nama_area]);
        //     //         }
        //     //     }
        //     // return $toJson;
        //     // foreach ($toJson['meja'] as $meja){
        //     //     if ($meja['id_meja'] != $r->id_meja){
        //     //     }
        //     // }
        //     // foreach ($toJson['menu'] as $menu){
        //     //     if ($menu['menu'] != $r->menu){
        //     //     }
        //     // }
        // }
        // dd($toJson['area']);
        // $toJson['area'] = array_unique($toJson['area']);
        // $toJson['meja'] = array_unique($toJson['meja']);
        // $toJson['menu'] = array_unique($toJson['menu']);
        // return $toJson['area'];

        // dd(Pesanan::with('menu', 'meja')->get());
        return view ('pesanan.edit', [
            'area'=> Area::with('meja')->get(),
            'kategori'=>Kategori::with('menu')->get(),
            'status_pesanan' => ParameterStatus::all(),
            'menu'=>Menu::all(),
            'p' => $pesanan,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pesanan $pesanan)
    {
        $validateData = $request->validate(([
            'nama_pemesan' => 'required|string',
            'no_hp_pemesan' => 'required',
            'meja_pesanan'=> 'required',
            'menu_pesanan' => 'required',
            'total_pembayaran' => 'required',
            'status_pembayaran' => 'required',
            'status_pesanan' => 'required',
            'jam_booking' => 'required'
        ]));

        $pesanan->update($validateData);

        MejaPesanan::where('id_pesanan', $pesanan->id)->delete();
        MenuPesanan::where('id_pesanan', $pesanan->id)->delete();

        $idPesanan = $pesanan->id;
        $meja = $request->meja_pesanan;
        for ($i = 0; $i < sizeof($meja); $i++){
            MejaPesanan::insert([
                'id_meja' => $meja[$i],
                'id_pesanan' => $idPesanan
            ]);

        }
        $menu = $request->menu_pesanan;
        for ($i = 0; $i < sizeof($menu); $i++){
            MenuPesanan::insert([
                'id_menu' => $menu[$i],
                'id_pesanan' => $idPesanan
            ]);

        }



        return redirect(route('pesanan.index'))->with('success', 'Pesanan telah diubah');
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
        ->join('menu_pesanan', 'pesanan.id', '=', 'menu_pesanan.id_pesanan')
        ->join('menu', 'menu.id', '=', 'menu_pesanan.id_menu')
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
                'area.nama as nama_area',
                'menu.nama as menu')
        ->get();

        return json_encode($pesanan);
    }
}
