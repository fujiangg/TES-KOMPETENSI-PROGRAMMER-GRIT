@extends('layouts.app')

@section('title')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Transaksi Pasien</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 col-sm-12">
            <div class="card">
              <div class="card-header d-flex align-items-center bg-secondary">
                <a href="#" onclick="history.back();" class="text-dark"><i class="fa-solid fa-chevron-left mr-2 mt-2"></i></a>
                <h4 class="m-0">Detail Data Pelayanan Pasien</h4>
              </div>
              <div class="card-body">
                <div>
                    <strong>Pasien:</strong>
                    {{ $pelayanan->pasien->nama }}
                </div>
                <div>
                    <strong>Dokter:</strong>
                    {{ $pelayanan->pegawai->nama_lengkap }}
                </div>
                <div>
                    <strong>Jenis Pelayanan:</strong>
                    {{ $pelayanan->jenis_pelayanan }}
                </div>
                <div>
                    <strong>Tanggal dan Waktu:</strong>
                    {{ $pelayanan->tanggal_waktu }}
                </div>
                <div>
                    <strong>Status:</strong>
                    {{ $pelayanan->status }}
                </div>    
                <div>
                    <strong>Catatan Tambahan:</strong>
                    {{ $pelayanan->catatan_tambahan }}
                </div>        
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </div>
@endsection