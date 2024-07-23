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
                        <h2>Edit Wilayah Pasien</h2>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{ route('wilayah_pasien.index') }}"> Kembali</a>
                    </div>
                </div>
            </div>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('wilayah_pasien.update', $wilayahPasien->id_wilayah) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Nama Wilayah:</strong>
                            <input type="text" name="nama_wilayah" value="{{ $wilayahPasien->nama_wilayah }}" class="form-control" placeholder="Nama Wilayah">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Kota/Kabupaten:</strong>
                            <input type="text" name="kota_kabupaten" value="{{ $wilayahPasien->kota_kabupaten }}" class="form-control" placeholder="Kota/Kabupaten">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Provinsi:</strong>
                            <input type="text" name="provinsi" value="{{ $wilayahPasien->provinsi }}" class="form-control" placeholder="Provinsi">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Kode Pos:</strong>
                            <input type="text" name="kode_pos" value="{{ $wilayahPasien->kode_pos }}" class="form-control" placeholder="Kode Pos">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Deskripsi:</strong>
                            <textarea class="form-control" style="height:150px" name="deskripsi" placeholder="Deskripsi">{{ $wilayahPasien->deskripsi }}</textarea>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>

    </div>
  </div>
  
@endsection
