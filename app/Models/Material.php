<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;
    protected $fillable = [
        'titulo',
        'categoria_id',
        'tipo_id',
        'contenido',
    ];
    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
    public function tipo()
    {
        return $this->belongsTo(Tipo::class);
    }
}
