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
            <h1 class="m-0">Master Data</h1>
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
                <h4 class="m-0">Detail Data Obat</h4>
              </div>
              <div class="card-body">
                <div>
                    <strong>Nama:</strong>
                    {{ $obat->nama }}
                </div>      
                <div>
                    <strong>Jenis:</strong>
                    {{ $obat->jenis }}
                </div>      
                <div>
                    <strong>Deskripsi:</strong>
                    {{ $obat->deskripsi }}
                </div>      
                <div>
                    <strong>Kode Obat:</strong>
                    {{ $obat->kode_obat }}
                </div>      
                <div>
                    <strong>Satuan:</strong>
                    {{ $obat->satuan }}
                </div>      
                <div>
                    <strong>Harga:</strong>
                    {{ $obat->harga }}
                </div>      
                <div>
                    <strong>Stok:</strong>
                    {{ $obat->stok}}
                </div>      
                <div>
                    <strong>Tanggal Kadaluarsa:</strong>
                    {{ $obat->tanggal_kadaluarsa}}
                </div>      
                <div>
                    <strong>Keterangan:</strong>
                    {{ $obat->keterangan }}
                </div>      
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </div>
@endsection