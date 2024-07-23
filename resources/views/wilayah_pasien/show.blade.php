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
                <h4 class="m-0">Detail Data Wilayah Pasien</h4>
              </div>
              <div class="card-body">
                <div>
                    <strong>Nama Pasien:</strong>
                    {{ $wilayahPasien->nama }}
                </div>       
                <div>
                    <strong>Tanggal Lahir:</strong>
                    {{ $wilayahPasien->ttl }}
                </div>                    
                <div>
                    <strong>Usia:</strong>
                    {{ $wilayahPasien->usia }}
                </div>                    
                <div>
                    <strong>Email:</strong>
                    {{ $wilayahPasien->email }}
                </div>                    
                <div>
                    <strong>Telepon:</strong>
                    {{ $wilayahPasien->telepon }}
                </div>    
                <div>
                    <strong>Alamat:</strong>
                    {{ $wilayahPasien->alamat }}
                </div>                                                 
                <div>
                    <strong>Kota/Kabupaten:</strong>
                    {{ $wilayahPasien->kota_kabupaten }}
                </div>                    
                <div>
                    <strong>Provinsi:</strong>
                    {{ $wilayahPasien->provinsi }}
                </div>                    
                <div>
                    <strong>Kode Pos:</strong>
                    {{ $wilayahPasien->kode_pos }}
                </div>
                <div>
                    <strong>Deskripsi:</strong>
                    {{ $wilayahPasien->deskripsi }}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </div>
@endsection