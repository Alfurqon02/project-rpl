<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\MenuPesanan;
use App\Models\Pesanan;
use App\Models\Area;
use App\Models\Kategori;
use App\Models\ParameterStatus;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Pesanan $pesanan)
    {
        // dd(Kategori::with('menu')->get());
        return view('pesanan.menu.create', [
            'kategori' => Kategori::with('menu')->get(),
            'p'=>$pesanan

        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Pesanan $pesanan)
    {
        $validateData = $request->validate([
            'menu_pesanan' => 'required',
            'jumlah_menu' => 'required',
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        // $selectedMenu = $request->menu_pesanan->has('menu_pesanan');
        $idPesanan = $pesanan->id;
        $jumlah = $request->jumlah_menu;
        $menu = $request->menu_pesanan;

        // return $jumlah;
        // return $menu $jumlah;
        // dd($menu, $jumlah);
        // return $validateData;

        // dd($menu);
            for ($i = 0; $i < sizeof($menu) && $i < sizeof($jumlah); $i++){
                if($jumlah[$i]!='0'){
                    MenuPesanan::insert([
                        'id_menu' => $menu[$i],
                        'id_pesanan' => $idPesanan,
                        'jumlah_menu' => $jumlah[$i]
                    ]);
                }
            }

        return redirect(route('pesanan.index'))->with('success', 'Menu telah Ditambahkan!');
        }

    /**
     * Display the specified resource.
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Menu $menu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Menu $menu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu)
    {
        //
    }
}
