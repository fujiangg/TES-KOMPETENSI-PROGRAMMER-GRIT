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
                <h4 class="m-0">Detail Pemberian Obat Pasien</h4>
              </div>
              <div class="card-body">
                <div>
                    <strong>Tanggal Pemberian:</strong>
                    {{ $pemberian_obat->tanggal_pemberian }}
                </div>
                <div>
                    <strong>Pasien:</strong>
                    {{ $pemberian_obat->pasien->nama }}
                </div>
                <div>
                    <strong>Obat:</strong>
                    {{ $pemberian_obat->obat->nama }}
                </div>
                <div>
                    <strong>Jumlah:</strong>
                    {{ $pemberian_obat->jumlah }}
                </div>
                <div>
                    <strong>Dosis:</strong>
                    {{ $pemberian_obat->dosis }}
                </div>
                <div>
                    <strong>Rute Pemberian:</strong>
                    {{ $pemberian_obat->rute_pemberian }}
                </div>
                <div>
                    <strong>Keterangan:</strong>
                    {{ $pemberian_obat->keterangan }}
                </div>
                <div>
                    <strong>Dokter:</strong>
                    {{ $pemberian_obat->pegawai->nama_lengkap }}
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </div>
@endsection