<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    use HasFactory;
    protected $table = 'perfils';
    
    public function alumno()
    {
        return $this->belongsTo(Alumno::class, 'usuario_id', 'id');
    }
}
