<?php

namespace App\Http\Controllers;

use App\Models\Disciplina;
use App\Models\Professor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Teacher extends Controller
{
    public function invoke()
    {
        $disciplinas = Disciplina::orderByDesc('id')->get();
        $professores = Professor::with('disciplina')->get();
        
        return view('pages.teachers', [
            'disciplinas' => $disciplinas,
            'professores' => $professores
        ]);
    }

    public function store( Request $request )
    {
        $request->validate([
            'nome' => 'required',
            'disciplina_id' => 'required',
        ]);

        if (Professor::create($request->all())) return back()->with('message', 'Novo professor registado com sucesso');
        else return back()->withErrors('falha ao registar o professor');
    }
}