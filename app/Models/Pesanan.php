<?php

namespace App\Models;

use App\Models\Meja;
use App\Models\Menu;
use DateTimeInterface;
use App\Models\ParameterStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pesanan extends Model
{
    use HasFactory;

    protected $table = 'pesanan';

    protected $guarded = ['id'];

    public function getDates(){
        return [
            'created_at'
        ];
    }

    protected function serializeDate(DateTimeInterface $created_at): string
{
    return $created_at->format('Y-m-d');
}

    public function meja(){
        return $this->belongsToMany(Meja::class, 'meja_pesanan', 'id_pesanan', 'id_meja');
    }

    public function parameterStatusPesanan(){
        return $this->belongsTo(ParameterStatus::class, 'id_parameter', 'id');
    }

    public function menu(){
        return $this->belongsToMany(Menu::class, 'menu_pesanan', 'id_pesanan', 'id_menu')->withPivot('jumlah_menu');;
        // return $this->belongsToMany(Menu::class, 'menu_pesanan', )->withPivot('id_pesanan', 'id_menu');
    }

    public function createdBy(){
        return $this->belongsTo(User::class, 'created_by', 'id');
    }
}
