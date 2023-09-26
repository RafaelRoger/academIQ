<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'disciplina_id',
        'contacto1',
        'contacto2',
        'contacto3',
    ];

    public function disciplina() {
        return $this->belongsTo(Disciplina::class, 'disciplina_id');
    }
}
