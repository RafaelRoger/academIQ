<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\Classe;
use App\Models\Professor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \App\Models\Turma as EntityTurma;

class Turma extends Controller
{
    public function invoke()
    {
        $classes = Classe::get();
        $professores = Professor::get();
        $turmas = EntityTurma::with('diretor')->with('classe')->get();

        return view('pages.turmas', [
            'classes' => $classes,
            'professores' => $professores,
            'turmas' => $turmas,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'designacao' => 'required',
            'ciclo' => 'required',
            'anoLectivo' => 'required',
            'classe_id' => 'required',
            'regime' => 'required',
            'sala' => 'required',
            'turno' => 'required',
            'tipoEscola' => 'required',
            'dt' => 'required',
        ]);

        $turma = new EntityTurma;
        $turma->codigo = date('y') . rand('100', '999') . $request->turno . $request->designacao;
        $turma->designacao = $request->designacao;
        $turma->ciclo = $request->ciclo;
        $turma->regime = $request->regime;
        $turma->anoLectivo = $request->anoLectivo;
        $turma->classe_id = $request->classe_id;
        $turma->sala = $request->sala;
        $turma->turno = $request->turno;
        $turma->tipoEscola = $request->tipoEscola;
        $turma->dt = $request->dt;
        if ($turma->save())
            return back()->with('message', 'Turma registada com sucesso');
        else
            return back()->withErrors('Ocorreu um erro ao registar a turma');
    }

    public function addStudent($id)
    {
        $turma = EntityTurma::with('classe')->where('codigo', $id)->first();

        if (empty($turma)) return redirect(route('view.turmas'));
        
        $alunos = Aluno::where('classe_id', $turma->classe->id)->get();

        return view('pages.add_student', [
            'turma' => $turma,
            'alunos' => $alunos,
        ]);
    }
}