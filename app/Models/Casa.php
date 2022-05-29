<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Casa extends Model
{
    use HasFactory;
    use softDeletes;

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

    public function persona()
    {
        return $this->belongsTo(Persona::class, 'tblpersona_id');
    }

    public function formapago()
    {
        return $this->belongsTo(FormaPago::class, 'tblformapago_id');
    }
}
