@extends('theme.template')
@section('title', 'AcademIQ - Lista de alunos')
@section('content')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Lista dos alunos</h4>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th> # </th>
                          <th> codigo </th>
                          <th> nome completo </th>
                          <th> genero </th>
                          <th> ano de nascimento </th>
                          <th> proviniencia </th>
                          <th> classe </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($alunos as $key => $aluno)
                          @php
                            $anoNascimento = (new DateTime($aluno->dataNascimento))->format('Y');
                          @endphp
                            <tr>
                              <td> {{ __($key + 1) }} </td>
                              <td> {{ __($aluno->numeroProcesso) }} </td>
                              <td> {{ __($aluno->nome.' '.$aluno->apelido) }} </td>
                              <td>
                                  {{ __($aluno->sexo == 'M' ? 'Masculino' : 'Femenino') }}
                              </td>
                              <td> {{ __($anoNascimento) }} </td>
                              <td> {{ __($aluno->proveniencia) }} </td>
                              <td> {{ __($aluno->classe->classe) }}ª </td>
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
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © academiq.com 2023</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
@endSection