<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use Illuminate\Http\Request;
use Carbon\Carbon;

class EventController extends Controller
{
    public function index(Request $request)
    {
        $pesanan = Pesanan::all();

        $events = [];

        foreach ($pesanan as $pesan) {
            $start = Carbon::createFromFormat('H:i:s', $pesan->jam_booking)->format('Y-m-d H:i:s');
            $events[] = [
                'title' => $pesan->nama_pemesan,
                'start' => $start,
            ];
        }

        return response()->json($events);
    }
}
