@extends('theme.template')
@section('title', 'AcademIQ - Register New Student')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <form class="row" method="post" action="{{ __(route('view.store.professores')) }}">
            @csrf
            @if($errors->any() || session('message'))
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                       
                        <div class="alert alert-@php if($errors->any()) echo 'danger'; else echo 'success'; @endphp alert-dismissible fade show" role="alert">
                            @if($errors->any())
                                <x-validation-errors class="mb-4" :errors="$errors" />
                            @else
                            {{ __(session('message')) }}
                            @endif
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        
                    </div>
                </div>
            </div>
            @endif
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-center">DADOS DO PROFESSOR</h4>
                        <div class="form-sample">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Nome Completo</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="nome" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Disciplina</label>
                                        <div class="col-sm-9">
                                            <select name="disciplina_id" class="form-control">
                                                <option selected disabled>selecione a disciplina</option>
                                                @foreach($disciplinas as $disciplina)
                                                <option value="{{ __($disciplina->id) }}">{{ __($disciplina->designacao) }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Contacto 1</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="contacto1" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Contacto 2</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="contacto2" class="form-control" />
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
                    <h4 class="card-title">Lista das disciplinas</h4>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th> # </th>
                          <th> Nome </th>
                          <th> Disciplina</th>
                          <th> Contacto 1</th>
                          <th> Contacto 2</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($professores as $key => $professor)
                          
                            <tr>
                              <td> {{ __($key + 1) }} </td>
                              <td> {{ __($professor->nome) }} </td>
                              <td> {{ __($professor->disciplina->designacao) }} </td>
                              <td> {{ __($professor->contacto1) }} </td>
                              <td> {{ __($professor->contacto2) }} </td>                              
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