<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'apelido',
        'sexo',
        'numeroProcesso',
        'proveniencia',
        'dataNascimento',
        'nacionalidade',
        'provinciaNascimento',
        'distritoNascimento',
        'nomePai',
        'nomeMae',
        'classe_id',
    ];

    public function classe()
    {
        return $this->belongsTo(Classe::class, 'classe_id');
    }
}
