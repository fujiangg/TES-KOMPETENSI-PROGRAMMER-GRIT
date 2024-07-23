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
                        <h4 class="m-0">Edit Data Wilayah Pasien</h4>
                    </div>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Ops!</strong> Ada yang salah dengan inputanmu!<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
        
                    <div class="card-body">
                        <div>
                            <form method="POST" action="{{ route('wilayah_pasien.update', $wilayahPasien->id) }}">
                                @csrf
                                @method('PUT')

                                <div>
                                    <strong>Nama Pasien:</strong>
                                    <input type="text" name="nama" value="{{ $wilayahPasien->nama }}" class="form-control" placeholder="Nama Pasien">
                                </div>
                                <div>
                                    <strong>Tanggal Lahir:</strong>
                                    <input type="text" name="ttl" value="{{ $wilayahPasien->ttl }}" class="form-control" placeholder="Tanggal Lahir">
                                </div>
                                <div>
                                    <strong>Usia:</strong>
                                    <input type="text" name="usia" value="{{ $wilayahPasien->usia }}" class="form-control" placeholder="Usia">
                                </div>
                                <div>
                                    <strong>Email:</strong>
                                    <input type="text" name="email" value="{{ $wilayahPasien->email }}" class="form-control" placeholder="Email">
                                </div>
                                <div>
                                    <strong>Telepon:</strong>
                                    <input type="text" name="telepon" value="{{ $wilayahPasien->telepon }}" class="form-control" placeholder="Telepon">
                                </div>
                                <div>
                                    <strong>Alamat:</strong>
                                    <input type="text" name="alamat" value="{{ $wilayahPasien->alamat }}" class="form-control" placeholder="alamat">
                                </div>
                                <div>
                                    <strong>Kota/Kabupaten:</strong>
                                    <input type="text" name="kota_kabupaten" value="{{ $wilayahPasien->kota_kabupaten }}" class="form-control" placeholder="Kota/Kabupaten">
                                </div>
                                <div>
                                    <strong>Provinsi:</strong>
                                    <input type="text" name="provinsi" value="{{ $wilayahPasien->provinsi }}" class="form-control" placeholder="Provinsi">         
                                </div>
                                <div>
                                    <strong>Kode Pos:</strong>
                                    <input type="text" name="kode_pos" value="{{ $wilayahPasien->kode_pos }}" class="form-control" placeholder="Kode Pos">                
                                </div>
                                <div>
                                    <strong>Deskripsi:</strong>
                                    <textarea class="form-control" style="height:150px" name="deskripsi" placeholder="Deskripsi">{{ $wilayahPasien->deskripsi }}</textarea>                
                                </div>
                                <div class="mt-4 float-right">
                                    <a href="{{ route('wilayah_pasien.index') }}" class="btn btn-secondary mr-1">Cancel</a>
                                    <input type="submit" value="Save" class="btn btn-primary" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->
@endsection