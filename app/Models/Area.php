<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    protected $table = 'area';

    protected $guarded = ['id', 'nama'];

    public function meja(){
        return $this->hasMany(Meja::class, 'id_area', 'id');
    }
}
