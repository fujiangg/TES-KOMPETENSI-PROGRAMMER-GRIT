@extends('layouts.app')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">

        <div class="container">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2> Tampilkan Wilayah Pasien</h2>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{ route('wilayah_pasien.index') }}"> Kembali</a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nama Wilayah:</strong>
                        {{ $wilayahPasien->nama_wilayah }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Kota/Kabupaten:</strong>
                        {{ $wilayahPasien->kota_kabupaten }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Provinsi:</strong>
                        {{ $wilayahPasien->provinsi }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Kode Pos:</strong>
                        {{ $wilayahPasien->kode_pos }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Deskripsi:</strong>
                        {{ $wilayahPasien->deskripsi }}
                    </div>
                </div>
            </div>
        </div>

    </div>
  </div>
  
@endsection
