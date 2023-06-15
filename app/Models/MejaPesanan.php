<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MejaPesanan extends Model
{
    use HasFactory;

    protected $table = 'meja_pesanan';

    protected $guarded = ['id'];

    public function meja(){
        return $this->belongsTo(Meja::class, 'id_meja', 'id');
    }

    public function pesanan(){
        return $this->belongsTo(Pesanan::class, 'id_pesanan', 'id');
    }
}
