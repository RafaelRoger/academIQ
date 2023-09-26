@extends('theme.template')
@section('title', 'AcademIQ - Register New Student')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <form class="row" method="post" >
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
                        <h4 class="card-title text-center">DADOS DO ALUNO</h4>
                        <div class="form-sample">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Primeiros Nomes</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="primeirosNomes" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Apelido</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="apelido" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label" class="genero">Genero</label>
                                        <div class="col-sm-9">
                                            <select name="genero" class="form-control">
                                                <option selected disabled>selecione o genero</option>
                                                <option value="M">Masculino</option>
                                                <option value="F">Feminino</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Date de Nascimento</label>
                                        <div class="col-sm-9">
                                            <input type="date" name="dataNascimento" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Naturalidade</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="naturalidade" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Distrito de</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="distrito" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Provincia</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="provincia" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Residencia/Bairro</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="residencia" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Telefone/Contacto</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="telefone" class="form-control" />
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">BI/Cedula Nº</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="cedula" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <i>
                                    <p>Emitido pelo arquivo de identificao Civil de: </p>
                                </i>

                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <div class="col-sm-9">
                                            <input type="text" name="emissao" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-center">FILIACAO</h4>
                        <div class="form-sample">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Filho(a) de</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="nomePai" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <i>e de</i>
                                        <div class="col-sm-9">
                                            <input type="text" name="nomeMae" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Encaregado de Educacao</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="encarregado" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Casa Nº</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="casa" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Quateirao Nº</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="quarteirao" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Telefone/Contacto</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="contactoEncarregado" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Local de Trabalho</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="localTrabalho" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Profissao</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="profissao" class="form-control" />
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">

                                    <div class="form-group row">
                                        <div class="col-sm-9">
                                            <i>
                                                <p>O Candidato sofre de uma Doenca Cronica: </p>
                                            </i>
                                            <select class="form-control">
                                                <option value="sim">Sim</option>
                                                <option value="nao">Nao</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-center">Extra</h4>
                        <div class="form-sample">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Numero do processo</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="numeroProcesso" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                     <div class="form-group row">
                                        <i>classe</i>
                                        <select name="classe" class="form-control" required>
                                            <option selected disabled>selecione a classe</option>
                                                @foreach($classes as $classe)
                                                    <option value="{{ $classe->id }}">{{ $classe->classe }}ª</option>
                                                @endforeach
                                        </select>
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