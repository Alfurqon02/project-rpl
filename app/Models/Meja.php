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

    public function pesanan(){
        return $this->hasOne(Pesanan::class, 'id_meja', 'id');
    }
}
