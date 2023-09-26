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
                        <h4 class="card-title text-center">NOVA TURMA</h4>
                        <div class="form-sample">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Turma</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="designacao" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Ciclo</label>
                                        <div class="col-sm-9">
                                            <select name="ciclo" class="form-control">
                                                <option selected disabled>selecione o ciclo</option>
                                                <option value="1">IC</option>
                                                <option value="2">IIC</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Ano Lectivo</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="anoLectivo" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Classe</label>
                                        <div class="col-sm-9">
                                            <select name="classe_id" class="form-control">
                                                <option selected disabled>selecione a classe</option>
                                                @foreach($classes as $classe)
                                                    <option value="{{ __($classe->id) }}">{{ __($classe->classe) }}ª</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Regime</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="regime" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Turno</label>
                                        <div class="col-sm-9">
                                            <select name="turno" class="form-control">
                                                <option selected disabled>selecione o turno</option>
                                                <option value="CD">Curso Diurno</option>
                                                <option value="CN">Curso Nocturno</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Sala</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="sala" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Tipo de Escola</label>
                                        <div class="col-sm-9">
                                            <select name="tipoEscola" class="form-control">
                                                <option selected disabled>selecione o tipo</option>
                                                <option value="PUB">Pública</option>
                                                <option value="PRI">Privada</option>
                                                <option value="PAR">Particular</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Diretor de Turma</label>
                                        <div class="col-sm-9">
                                            <select name="dt" class="form-control">
                                                <option selected disabled>selecione o director de turma</option>
                                                @foreach($professores as $professor)
                                                    <option value="{{ __($professor->id) }}">{{ __($professor->nome) }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary btn-fw">Registar</button>
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
                    <h4 class="card-title">Lista das turmas</h4>
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
                        @foreach($turmas as $key => $turma)
                          
                            <tr>
                                <td> {{ __($turma->codigo) }} </td>
                                <td> {{ __($turma->designacao) }} </td>
                                <td> {{ __($turma->ciclo) }} </td>
                                <td> {{ __($turma->anoLectivo) }} </td>
                                <td> {{ __($turma->classe->classe) }}ª </td>                              
                                <td> {{ __($turma->regime) }} </td>                              
                                <td> {{ __($turma->turno) }} </td>                              
                                <td> {{ __($turma->sala) }} </td>                              
                                <td> {{ __($turma->tipoEscola) }} </td>                              
                                <td> {{ __($turma->diretor->nome) }} </td>                              
                                <td> 
                                    <a href="{{ __(route('view.add.student', $turma->codigo)) }}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                </td>                              
                            </tr>
                        @endforeach
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