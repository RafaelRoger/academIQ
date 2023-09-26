@extends('theme.template')
@section('title', 'AcademIQ - Dashboard')
@section('content')
<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <!-- Page Title Header Starts-->
    <div class="row page-title-header">
      <div class="col-12">
        <div class="page-header">
          <h4 class="page-title">Dashboard</h4>

        </div>
      </div>
    </div>
    <!-- Page Title Header Ends-->
    <div class="row">
      <div class="col-md-12 grid-margin">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-lg-3 col-md-6">
                <div class="d-flex">
                  <div class="wrapper">
                    <h3 class="mb-0 font-weight-semibold">45</h3>
                    <h5 class="mb-0 font-weight-medium text-primary">Alunos</h5>
                  </div>

                </div>
              </div>
              <div class="col-lg-3 col-md-6 mt-md-0 mt-4">
                <div class="d-flex">
                  <div class="wrapper">
                    <h3 class="mb-0 font-weight-semibold">20</h3>
                    <h5 class="mb-0 font-weight-medium text-primary">Professores</h5>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 mt-md-0 mt-4">
                <div class="d-flex">
                  <div class="wrapper">
                    <h3 class="mb-0 font-weight-semibold">8</h3>
                    <h5 class="mb-0 font-weight-medium text-primary">Sector Pedagogico</h5>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 mt-md-0 mt-4">
                <div class="d-flex">
                  <div class="wrapper">
                    <h3 class="mb-0 font-weight-semibold">553</h3>
                    <h5 class="mb-0 font-weight-medium text-primary">Turmas</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title mb-0">Desempenho anual das turmas</h4>
            <div class="d-flex flex-column flex-lg-row">
              <ul class="nav nav-tabs sales-mini-tabs ml-lg-auto mb-4 mb-md-0" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="sales-statistics_switch_1" data-toggle="tab" role="tab"
                    aria-selected="true">2023</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="sales-statistics_switch_2" data-toggle="tab" role="tab"
                    aria-selected="false">2022</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="sales-statistics_switch_3" data-toggle="tab" role="tab"
                    aria-selected="false">2021</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="sales-statistics_switch_4" data-toggle="tab" role="tab"
                    aria-selected="false">2020</a>
                </li>
              </ul>
            </div>
            
            <canvas class="mt-5" height="120" id="sales-statistics-overview"></canvas>
          </div>
        </div>
      </div>

    </div>
    
</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
@endSection