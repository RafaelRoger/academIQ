@extends('theme.template')
@section('title', 'AcademIQ - Disciplinas')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <form class="row" method="post" action="{{ __(route('view.store.disciplinas')) }}">
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
                        <h4 class="card-title text-center">Registar uma nova disciplina</h4>
                        <div class="form-sample">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Disciplina</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="designacao" class="form-control" />
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
                          <th> designação </th>
                          <th> criado a </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($disciplinas as $key => $disciplina)
                          
                            <tr>
                              <td> {{ __($key + 1) }} </td>
                              <td> {{ __($disciplina->designacao) }} </td>
                              <td> {{ $disciplina->created_at }} </td>
                              
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