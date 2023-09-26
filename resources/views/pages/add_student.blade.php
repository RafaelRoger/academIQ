@extends('theme.template')
@section('title', 'AcademIQ - Register New Student')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <form class="row" method="post" action="{{ __(route('view.store.turmas')) }}">
            @csrf
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        @if($errors->any() || session('message'))                                
                            <div class="alert alert-@php if($errors->any()) echo 'danger'; else echo 'success'; @endphp alert-dismissible fade show" role="alert">
                                @if($errors->any())
                                    <x-validation-errors class="mb-4" :errors="$errors" />
                                @else
                                {{ __(session('message')) }}
                                @endif
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        <h4 class="card-title text-center">ADICIONAR ALUNOS A TURMA</h4>
                        <div class="form-sample">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Alunos da {{ __($turma->classe->classe) }}ª</label>
                                        <div class="col-sm-9">
                                            <select name="ciclo" class="form-control" multiple>
                                                <option selected disabled>selecione o aluno</option>
                                                @foreach($alunos as $aluno)
                                                    <option value="{{ __($aluno->id) }}">{{ __($aluno->nome.' '.$aluno->apelido) }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-primary btn-fw">Adicionar</button>
                                    </div>

                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-info btn-fw">Aleatório</button>
                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Lista dos alunos da turma {{ __($turma->designacao) }}</h4>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th> codigo </th>
                          <th> Designação </th>
                          <th> Ciclo</th>
                          <th> Ano Lectivo</th>
                          <th> Classe </th>
                          <th> Regime </th>
                          <th> Turno </th>
                          <th> Sala </th>
                          <th> Tipo de Escola </th>
                          <th> Director de Turma </th>
                          <th> Acções </th>
                        </tr>
                      </thead>
                      <tbody>
                          
                            <tr>
                                <td> $turma->codigo </td>
                                <td> $turma->designacao </td>
                                <td> $turma->ciclo </td>
                                <td> $turma->anoLectivo </td>
                                <td> $turma->classe->classeª </td>                              
                                <td> $turma->regime </td>                              
                                <td> $turma->turno </td>                              
                                <td> $turma->sala </td>                              
                                <td> $turma->tipoEscola </td>                              
                                <td> $turma->diretor->nome </td>                              
                                <td> 
                                    <a href="">ver</a>
                                </td>                              
                            </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer.html -->
    <footer class="footer">
        <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © academIQ</span>
    </footer>
    <!-- partial -->
</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
@endSection