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
            <h1 class="m-0">Data Master</h1>
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
                <h4 class="m-0">Detail Data Tindakan Pasien</h4>
              </div>
              <div class="card-body">
                <div>
                    <strong>Nama Tindakan:</strong>
                    {{ $tindakan->nama_tindakan }}
                </div>
                <div>
                    <strong>Deskripsi:</strong>
                    {{ $tindakan->dokter }}
                </div>
                <div>
                    <strong>Kategori:</strong>
                    {{ $tindakan->kategori }}
                </div>
                <div>
                    <strong>Kode Tindakan:</strong>
                    {{ $tindakan->kode_tindakan }}
                </div>
                <div>
                    <strong>Tanggal dan Waktu:</strong>
                    {{ $tindakan->tanggal_waktu }}
                </div>
                <div>
                    <strong>Durasi:</strong>
                    {{ $tindakan->durasi }}
                </div>       
                <div>
                    <strong>Dokter:</strong>
                    {{ $tindakan->pegawai->nama_lengkap }}
                </div>
                <div>
                    <strong>Pasien:</strong>
                    {{ $tindakan->pasien->nama }}
                </div>       
                <div>
                    <strong>Tempat:</strong>
                    {{ $tindakan->tempat }}
                </div>       
                <div>
                    <strong>Biaya:</strong>
                    {{ $tindakan->biaya }}
                </div>      
                <div>
                    <strong>Status:</strong>
                    {{ $tindakan->status }}
                </div>    
                <div>
                    <strong>Catatan Tambahan:</strong>
                    {{ $tindakan->catatan_tambahan }}
                </div>  
                <div>
                    <strong>Resiko:</strong>
                    {{ $tindakan->resiko }}
                </div>       
                <div>
                    <strong>Hasil:</strong>
                    {{ $tindakan->hasil }}
                </div>       
                <div>
                    <strong>Tindak Lanjut:</strong>
                    {{ $tindakan->tindak_lanjut }}
                </div>       
                <div>
                    <strong>Bahan Alat:</strong>
                    {{ $tindakan->bahan_alat }}
                </div>       

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </div>
@endsection