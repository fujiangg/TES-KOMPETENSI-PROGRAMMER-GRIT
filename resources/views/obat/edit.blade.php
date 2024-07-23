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
                        <h4 class="m-0">Edit Data Obat</h4>
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
                            <form method="POST" action="{{ route('obat.update', $obat->id) }}">
                                @csrf
                                @method('PUT')

                                <div>
                                    <strong>Nama:</strong>
                                    <input type="text" name="nama" value="{{ $obat->nama }}" class="form-control" placeholder="Nama">
                                </div>
                                <div>
                                    <strong>Jenis:</strong>
                                    <input type="text" name="jenis" value="{{ $obat->jenis }}" class="form-control" placeholder="Jenis">
                                </div>
                                <div>
                                    <strong>Deskripsi:</strong>
                                    <textarea name="deskripsi" class="form-control" placeholder="Deskripsi">{{ $obat->deskripsi }}</textarea>
                                </div>
                                <div>
                                    <strong>Kode Obat:</strong>
                                    <input type="text" name="kode_obat" value="{{ $obat->kode_obat }}" class="form-control" placeholder="Kode Obat">
                                </div>
                                <div>
                                    <strong>Satuan:</strong>
                                    <input type="text" name="satuan" value="{{ $obat->satuan }}" class="form-control" placeholder="Satuan">
                                </div>
                                <div>
                                    <strong>Harga:</strong>
                                    <input type="number" name="harga" value="{{ $obat->harga }}" class="form-control" placeholder="Harga">
                                </div>
                                <div>
                                    <strong>Stok:</strong>
                                    <input type="number" name="stok" value="{{ $obat->stok }}" class="form-control" placeholder="Stok">
                                </div>
                                <div>
                                    <strong>Tanggal Kadaluarsa:</strong>
                                    <input type="date" name="tanggal_kadaluarsa" value="{{ $obat->tanggal_kadaluarsa }}" class="form-control" placeholder="Tanggal Kadaluarsa">
                                </div>
                                <div>
                                    <strong>Keterangan:</strong>
                                    <textaea name="keterangan" class="form-control" placeholder="Keterangan">{{ $obat->keterangan }}</textaea>
                                </div>
                                <div class="mt-4 float-right">
                                    <a href="{{ route('obat.index') }}" class="btn btn-secondary mr-1">Cancel</a>
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