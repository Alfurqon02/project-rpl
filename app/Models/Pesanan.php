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
        return $this->belongsToMany(Meja::class, 'id_meja', 'id');
    }

    public function parameterStatusPesanan(){
        return $this->belongsTo(ParameterStatus::class, 'id_parameter', 'id');
    }

    public function menu(){
        return $this->belongsToMany(Menu::class);
    }

    public function createdBy(){
        return $this->belongsTo(User::class, 'created_by', 'id');
    }
}
