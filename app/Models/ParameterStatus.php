<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParameterStatus extends Model
{
    use HasFactory;

    protected $table = 'parameter_status_pesanan';

    protected $guarded = ['id', 'nama'];

    public function pesanan(){
        return $this->hasMany(Pesanan::class, 'id_parameter', 'id');
    }
}
