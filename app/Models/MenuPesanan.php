<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuPesanan extends Model
{
    use HasFactory;

    protected $table = 'menu_pesanan';

    protected $guarded = ['id'];

    public function menu(){
        return $this->belongsToMany(Menu::class, 'id_menu', 'id');
    }

    public function pesanan(){
        return $this->belongsToMany(Pesanan::class, 'id_pesanan', 'id');
    }
}
