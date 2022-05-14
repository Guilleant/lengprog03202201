<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

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


    public function casas()
    {
        return $this->hasMany(Casas::class);
    }
}
