<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $table = 'menu';

    protected $guarded = ['id'];

    public function kategori(){
        return $this->belongsTo(Kategori::class, 'kategori_id', 'id');
    }

    public function pesanan(){
        return $this->belongsToMany(Pesanan::class, 'menu_pesanan', 'id_pesanan', 'id_menu');
        // return $this->belongsToMany(Pesanan::class)->withPivot('id_pesanan', 'id_menu');
    }
}
