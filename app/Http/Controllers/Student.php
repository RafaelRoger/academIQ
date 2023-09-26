<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\Classe;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Student extends Controller
{
    public function regist()
    {
        $classes = Classe::get();
        return view('pages/regist_student', [
            'classes' => $classes
        ]);
    }

    public function storeStudent(Request $request)
    {
        $request->validate([
            'primeirosNomes' => ['required'],
            'apelido' => ['required'],
            'genero' => ['required'],
            'dataNascimento' => ['required'],
            'classe' => 'required',
        ]);

        $aluno = new Aluno;
        $aluno->numeroProcesso = $request->numeroProcesso;
        $aluno->nome = $request->primeirosNomes;
        $aluno->apelido = $request->apelido;
        $aluno->sexo = $request->genero;
        $aluno->dataNascimento = $request->dataNascimento;
        $aluno->nacionalidade = 'Moçambicana';
        $aluno->provinciaNascimento = $request->naturalidade;
        $aluno->nomePai = $request->nomePai;
        $aluno->nomeMae = $request->nomeMae;
        $aluno->classe_id = $request->classe;
        if ($aluno->save())
            return back()->with('message', 'Aluno registado com sucesso');
        else
            return back()->withErrors('falha ao registar o aluno');
    }

    public function index()
    {
        $alunos = Aluno::with('classe')->get();
        
        return view('pages/list_student', [
            'alunos' => $alunos
        ]);
    }
}