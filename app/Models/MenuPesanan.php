<?php

namespace App\Models;

use App\Models\Menu;
use App\Models\Pesanan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MenuPesanan extends Pivot
{
    use HasFactory;

    protected $table = 'menu_pesanan';

    protected $guarded = ['id'];

}
