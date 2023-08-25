<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable=['codigoproducto','nombre','estado','tipotalla','kilates','descripcion','precio','calidad'];
    protected $primaryKey='codigoproducto';
}
