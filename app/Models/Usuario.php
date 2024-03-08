<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuarios';

    protected $primaryKey = 'id';

    protected $fillable = [
        'nombre',
        'ape_paterno',
        'ape_materno',
        'correo',
        'contra',
        'id_cargo',
        'activo',
        'nivel'
    ];

    protected $guarded = [];
    public $timestamps = false;
}
