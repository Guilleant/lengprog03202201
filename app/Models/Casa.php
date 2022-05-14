<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Casa extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tblcasas';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['tblpersona_id', 'direccion', 'barrio'];
--
    public function persona()
    {
        return $this->belongsTo(Persona::class);
    }
}
