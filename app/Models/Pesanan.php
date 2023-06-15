<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    protected $table = 'pesanan';

    protected $guarded = ['id'];

    public function meja(){
        return $this->belongsToMany(Meja::class,'meja_pesanan', 'id_pesanan', 'id_meja');
    }

    public function parameterStatusPesanan(){
        return $this->belongsTo(ParameterStatus::class, 'id_parameter', 'id');
    }

    public function menuPesanan(){
        return $this->hasMany(MenuPesanan::class, 'id_pesanan', 'id');
    }

    public function createdBy(){
        return $this->belongsTo(User::class, 'created_by', 'id');
    }
}
