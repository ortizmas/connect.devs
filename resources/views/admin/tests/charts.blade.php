@extends('layouts.admin.app')

@section('content')
    <!-- Breadcrumb-->
    <div class="breadcrumb-holder container-fluid">
        <ul class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Charts            </li>
        </ul>
    </div>
    <!-- Charts Section-->
    <section class="charts">
        <div class="container-fluid">
          <div class="row">
            <!-- Line Charts-->
            <div class="col-lg-8">
              <div class="line-chart-example card">
                <div class="card-close">
                  <div class="dropdown">
                    <button type="button" id="closeCard1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                    <div aria-labelledby="closeCard1" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                  </div>
                </div>
                <div class="card-header d-flex align-items-center">
                  <h3 class="h4">Line Chart Example</h3>
                </div>
                <div class="card-body">
                  <canvas id="lineChartExample"></canvas>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="line-chart-example card no-margin-bottom">
                <div class="card-close">
                  <div class="dropdown">
                    <button type="button" id="closeCard2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                    <div aria-labelledby="closeCard2" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                  </div>
                </div>
                <div class="card-header d-flex align-items-center">
                  <h3 class="h4">Line Chart Example</h3>
                </div>
                <div class="card-body">
                  <canvas id="lineChartExample1"></canvas>
                </div>
              </div>
              <div class="line-chart-example card">
                <div class="card-close">
                  <div class="dropdown">
                    <button type="button" id="closeCard3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                    <div aria-labelledby="closeCard3" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                  </div>
                </div>
                <div class="card-body">
                  <canvas id="lineChartExample2"></canvas>
                </div>
              </div>
            </div>
            <!-- Bar Charts-->
            <div class="col-lg-4">
              <div class="bar-chart-example card no-margin-bottom">
                <div class="card-close">
                  <div class="dropdown">
                    <button type="button" id="closeCard4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                    <div aria-labelledby="closeCard4" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                  </div>
                </div>
                <div class="card-header d-flex align-items-center">
                  <h3 class="h4">Bar Chart Example</h3>
                </div>
                <div class="card-body">
                  <canvas id="barChart1"></canvas>
                </div>
              </div>
              <div class="line-chart-example card">
                <div class="card-close">
                  <div class="dropdown">
                    <button type="button" id="closeCard5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                    <div aria-labelledby="closeCard5" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                  </div>
                </div>
                <div class="card-body">
                  <canvas id="barChart2"></canvas>
                </div>
              </div>
            </div>
            <div class="col-lg-8">
              <div class="bar-chart-example card">
                <div class="card-close">
                  <div class="dropdown">
                    <button type="button" id="closeCard6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                    <div aria-labelledby="closeCard6" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                  </div>
                </div>
                <div class="card-header d-flex align-items-center">
                  <h3 class="h4">Bar Chart Example</h3>
                </div>
                <div class="card-body">
                  <canvas id="barChartExample"></canvas>
                </div>
              </div>
            </div>
            <!-- Doughnut Chart -->
            <div class="col-lg-6">
              <div class="pie-chart-example card">
                <div class="card-close">
                  <div class="dropdown">
                    <button type="button" id="closeCard7" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                    <div aria-labelledby="closeCard7" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                  </div>
                </div>
                <div class="card-header d-flex align-items-center">
                  <h3 class="h4">Doughnut  Chart Example</h3>
                </div>
                <div class="card-body">
                  <canvas id="doughnutChartExample"></canvas>
                </div>
              </div>
            </div>
            <!-- Pie Chart -->
            <div class="col-lg-6">
              <div class="pie-chart-example card">
                <div class="card-close">
                  <div class="dropdown">
                    <button type="button" id="closeCard8" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                    <div aria-labelledby="closeCard8" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                  </div>
                </div>
                <div class="card-header d-flex align-items-center">
                  <h3 class="h4">Pie  Chart Example</h3>
                </div>
                <div class="card-body">
                  <canvas id="pieChartExample"></canvas>
                </div>
              </div>
            </div>
            <!-- Polar Chart-->
            <div class="col-lg-6">
              <div class="polar-chart-example card">
                <div class="card-close">
                  <div class="dropdown">
                    <button type="button" id="closeCard9" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                    <div aria-labelledby="closeCard9" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                  </div>
                </div>
                <div class="card-header d-flex align-items-center">
                  <h3 class="h4">Polar Chart Example</h3>
                </div>
                <div class="card-body">
                  <canvas id="polarChartExample"></canvas>
                </div>
              </div>
            </div>
            <!-- Radar Chart-->
            <div class="col-lg-6">
              <div class="radar-chart-example card">
                <div class="card-close">
                  <div class="dropdown">
                    <button type="button" id="closeCard10" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                    <div aria-labelledby="closeCard10" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                  </div>
                </div>
                <div class="card-header d-flex align-items-center">
                  <h3 class="h4">Radar Chart Example</h3>
                </div>
                <div class="card-body">
                  <canvas id="radarChartExample"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
 
@endsection

@section('scripts')
    <script src="{{ asset('admin/js/charts-custom.js') }}"></script>
@endsection