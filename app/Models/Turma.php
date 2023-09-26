<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'designacao',
        'ciclo',
        'anoLectivo',
        'classe_id',
        'regime',
        'turno',
        'sala',
        'tipoEscola',
        'dt',
    ];

    public function diretor()
    {
        return $this->belongsTo(Professor::class, 'dt');
    }

    public function classe()
    {
        return $this->belongsTo(Classe::class, 'classe_id');
    }

}
