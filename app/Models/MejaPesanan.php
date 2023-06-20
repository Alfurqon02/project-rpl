<?php

namespace App\Models;

use App\Models\Meja;
use App\Models\Pesanan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MejaPesanan extends Model
{
    use HasFactory;

    protected $table = 'meja_pesanan';

    protected $guarded = ['id'];

    public function meja(){
        return $this->belongsToMany(Meja::class, 'meja_pesanan', 'id_pesanan', 'id_meja');
    }

    public function pesanan(){
        return $this->belongsToMany(Pesanan::class, 'id_pesanan', 'id');
    }
}
