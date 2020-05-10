@extends('layouts.dashboard.app')

@section('content')
     <div class="row">
          <div class="col-lg-3 col-6">
               <!-- small box -->
               <div class="small-box bg-info">
                    <div class="inner">
                         <h3>10</h3>

                         <p>New Users</p>
                    </div>
                    <div class="icon">
                         <i class="ion ion-bag"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
               </div>
          </div>
          <div class="col-lg-3 col-6">
               <!-- small box -->
               <div class="small-box bg-warning">
                    <div class="inner">
                         <h3>5</h3>

                         <p>New Category</p>
                    </div>
                    <div class="icon">
                         <i class="ion ion-bag"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
               </div>
          </div>
          <div class="col-lg-3 col-6">
               <!-- small box -->
               <div class="small-box bg-success">
                    <div class="inner">
                         <h3>15</h3>

                         <p>New Products</p>
                    </div>
                    <div class="icon">
                         <i class="ion ion-bag"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
               </div>
          </div>
          <div class="col-lg-3 col-6">
               <!-- small box -->
               <div class="small-box bg-danger">
                    <div class="inner">
                         <h3>8</h3>

                         <p>New Users</p>
                    </div>
                    <div class="icon">
                         <i class="ion ion-bag"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
               </div>
          </div>
     </div>

     <div class="card">
          <div class="card-header border-0">
               <div class="d-flex justify-content-between">
                    <h3 class="card-title">Online Store Visitors</h3>
                    <a href="javascript:void(0);">View Report</a>
               </div>
          </div>
          <div class="card-body">
               <div class="d-flex">
                    <p class="d-flex flex-column">
                         <span class="text-bold text-lg">820</span>
                         <span>Visitors Over Time</span>
                    </p>
                    <p class="ml-auto d-flex flex-column text-right">
                         <span class="text-success">
                              <i class="fas fa-arrow-up"></i> 12.5%
                         </span>
                         <span class="text-muted">Since last week</span>
                    </p>
               </div>
               <!-- /.d-flex -->

               <div class="position-relative mb-4">
                    <canvas id="visitors-chart" height="200"></canvas>
               </div>

               <div class="d-flex flex-row justify-content-end">
                    <span class="mr-2">
                         <i class="fas fa-square text-primary"></i> This Week
                    </span>
                    <span>
                         <i class="fas fa-square text-gray"></i> Last Week
                    </span>
               </div>
          </div>
     </div>
     <!-- /.card -->
@endsection
@section('scripts')

    <!-- chart -->
    <script src="{{ asset('dashboard/plugins/chart.js/Chart.min.js') }}"></script>

    <!-- dashboard -->
    <script src="{{ asset('dashboard/dist/js/dashboard.js') }}"></script>
@endsection