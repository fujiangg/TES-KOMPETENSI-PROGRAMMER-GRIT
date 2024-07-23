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
                        <a href="{{ route('pegawai.index') }}" class="text-dark"><i class="fa-solid fa-chevron-left mr-2 mt-2"></i></a>
                        <h4 class="m-0">Tambah Data Pegawai</h4>
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
                            @if(Session::has('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Success! </strong>{{ Session::get('success') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @endif
                            @if(Session::has('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Failed! </strong>{{ Session::get('error') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @endif
                            <div id="successAlert"></div>
                            <form action="{{ route('pegawai.store') }}" method="POST">
                                @csrf

                                <div>
                                    <strong>Nama Lengkap:</strong>
                                    <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap">
                                </div>
                                <div>
                                    <strong>Jabatan:</strong>
                                    <input type="text" name="jabatan" class="form-control" placeholder="Jabatan">
                                </div>
                                    <strong>Spesialisasi:</strong>
                                    <input type="text" name="spesialisasi" class="form-control" placeholder="spesialisasi">
                                </div>
                                <div>
                                    <strong>Kontak:</strong>
                                    <input type="text" name="kontak" class="form-control" placeholder="Kontak">
                                </div>
                                <div>
                                    <strong>Alamat:</strong>
                                    <textarea name="alamat" class="form-control" placeholder="Alamat"></textarea>
                                </div>
                                <div>
                                    <strong>Tanggal Bergabung:</strong>
                                    <input type="date" name="tanggal_bergabung" class="form-control" placeholder="Tanggal Bergabung">
                                </div>
                                <br>
                                <div>
                                    <label>Status:</label>
                                    <label>
                                        <input type="radio" name="status" value="1" checked> Aktif
                                    </label>
                                    <label>
                                        <input type="radio" name="status" value="0"> Tidak Aktif
                                    </label>
                                </div>
                                <br>
                                <div>
                                    <strong>Gaji:</strong>
                                    <input type="number" name="gaji" class="form-control" placeholder="Gaji">
                                </div>
                                <div class="mt-4 float-right">
                                    <a href="{{ route('pegawai.index') }}" class="btn btn-secondary mr-1">Cancel</a>
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