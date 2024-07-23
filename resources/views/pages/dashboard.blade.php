@extends('layouts.app')

@section('title')
@section('content')

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<section class="content">

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>183.000</h3>

                <p>Total Kunjungan</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>320<sup style="font-size: 20px"></sup></h3>

                <p>Total Pasien </p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>102</h3>

                <p>Total Pegawai</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>45</h3>

                <p>Total Tindakan</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->

        <figure class="highcharts-figure">
            <div id="container"></div>
        </figure>
            

            </div>
            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->    
</section>

<script>
    Highcharts.chart('container', {
  chart: {
    type: 'column'
  },
  title: {
    text: 'Statistik Kunjungan Klinik Sehat'
  },
//   subtitle: {
//     text: 'Source: <a href="https://worldpopulationreview.com/world-cities" target="_blank">World Population Review</a>'
//   },
  xAxis: {
    type: 'category',
    labels: {
      autoRotation: [-45, -90],
      style: {
        fontSize: '13px',
        fontFamily: 'Verdana, sans-serif'
      }
    }
  },
  yAxis: {
    min: 0,
    title: {
      text: 'Jumlah Kunjungan (ribu)'
    }
  },
  legend: {
    enabled: false
  },
  tooltip: {
    pointFormat: 'Jumlah Kunjungan: <b>{point.y:.1f} ribu</b>'
  },
  series: [{
    name: 'Jumlah',
    colors: [
      '#9b20d9', '#9215ac', '#861ec9', '#7a17e6', '#7010f9', '#691af3',
      '#6225ed', '#5b30e7', '#533be1', '#4c46db', '#4551d5', '#3e5ccf',
      '#3667c9', '#2f72c3', '#277dbd', '#1f88b7', '#1693b1', '#0a9eaa',
      '#03c69b', '#00f194'
    ],
    colorByPoint: true,
    groupPadding: 0,
    data: [
      ['Januari', 37.33],
      ['Februari', 31.18],
      ['Maret', 27.79],
      ['April', 22.23],
      ['Mei', 21.91],
      ['Juni', 21.74],
      ['Juli', 21.32],
    //   ['Beijing', 20.89],
    //   ['Mumbai', 20.67],
    //   ['Osaka', 19.11],
    //   ['Karachi', 16.45],
    //   ['Chongqing', 16.38],
    //   ['Istanbul', 15.41],
    //   ['Buenos Aires', 15.25],
    //   ['Kolkata', 14.974],
    //   ['Kinshasa', 14.970],
    //   ['Lagos', 14.86],
    //   ['Manila', 14.16],
    //   ['Tianjin', 13.79],
    //   ['Guangzhou', 13.64]
    ],
    dataLabels: {
      enabled: true,
      rotation: -90,
      color: '#FFFFFF',
      inside: true,
      verticalAlign: 'top',
      format: '{point.y:.1f}', // one decimal
      y: 10, // 10 pixels down from the top
      style: {
        fontSize: '13px',
        fontFamily: 'Verdana, sans-serif'
      }
    }
  }]
});
</script>

@endsection

