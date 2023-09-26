<?php

namespace App\Http\Controllers;

use App\Models\Disciplina;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Subject extends Controller
{
    public function invoke()
    {
        $disciplinas = Disciplina::get();
        return view('pages.disciplinas', [
            'disciplinas' => $disciplinas
        ]);
    }

    public function store( Request $request )
    {
        $request->validate([
            'designacao' => 'required',
        ]);

        if (Disciplina::create($request->all())) return back()->with('message', 'disciplina registada com sucesso');
        else return back()->withErrors('Ocorreu um erro ao tentar registar a disciplina');
    }
}