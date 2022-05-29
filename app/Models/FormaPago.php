<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormaPago extends Model
{
    use HasFactory;

    protected $table = 'tblFormaPagos';

    protected $fillable = ['descripcion'];

    public function casas(){
        $this->hasMany(Casa::class, 'tblformapago_id');
    }
}
