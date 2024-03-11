<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Iglesia extends Model
{
    use HasFactory;

    protected $table = 'iglesias';

    protected $primaryKey = 'id';

    protected $fillable = [
        'nombre',
        'direccion'
    ];

    protected $guarded = [];
    public $timestamps = false;
}
