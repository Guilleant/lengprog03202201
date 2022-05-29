<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Persona extends Model
{
    use HasFactory;
    use softDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tblpersonas';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['NroIdentificacion', 'apellidos', 'nombres'];


    public function getNombreCompletoAttribute()
    {
        return $this->nombres . ' ' . $this->apellidos;
    }

    public function casas()
    {
        return $this->hasMany(Casa::class, 'tblpersona_id');
    }
}
