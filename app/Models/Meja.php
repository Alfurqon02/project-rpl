<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meja extends Model
{
    use HasFactory;

    protected $table = 'meja';

    protected $guarded = ['id'];

    public function area(){
        return $this->belongsTo(Area::class, 'id_area', 'id');
    }

    public function mejaPesanan(){
        return $this->belongsToMany(Pesanan::class,'meja_pesanan', 'id_meja', 'id');
    }

    public function pesanan() {
        return $this->belongsToMany(Pesanan::class, 'meja_pesanan','id_meja', 'id_pesanan');
    }
}
