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
                        <h4 class="m-0">Edit Data Pemberian Obat Pasien</h4>
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
                            <form method="POST" action="{{ route('pemberian_obat.update', $pemberian_obat->id) }}">
                                @csrf
                                @method('PUT')
                                
                                <div>
                                    <strong for="tanggal_pemberian">Tanggal Pemberian</strong>
                                    <input type="datetime-local" class="form-control" id="tanggal_pemberian" name="tanggal_pemberian" value="{{ $pemberian_obat->tanggal_pemberian }}" required>
                                </div>
                                <div>
                                  <label for="pasien_id">Pasien:</label>
                                  <select name="pasien_id" id="pasien_id" class="form-control" required>
                                      @foreach ($pasien as $id => $nama)
                                          <option value="{{ $id }}" {{ $id == $pemberian_obat->pasien_id ? 'selected' : '' }}>{{ $nama }}</option>
                                      @endforeach
                                  </select>
                                </div>
                                <div>
                                  <label for="obat_id">Obat:</label>
                                  <select name="obat_id" id="obat_id" class="form-control" required>
                                      @foreach ($obat as $id => $nama)
                                          <option value="{{ $id }}" {{ $id == $pemberian_obat->obat_id ? 'selected' : '' }}>{{ $nama }}</option>
                                      @endforeach
                                  </select>
                                </div>
                                <div>
                                    <strong for="jumlah">Jumlah</strong>
                                    <input type="number" class="form-control" id="jumlah" name="jumlah" value="{{ $pemberian_obat->jumlah }}" required>
                                </div>
                                <div>
                                    <strong for="dosis">Dosis</strong>
                                    <input type="text" class="form-control" id="dosis" name="dosis" value="{{ $pemberian_obat->dosis }}" required>
                                </div>
                                <div>
                                    <strong for="rute_pemberian">Rute Pemberian</strong>
                                    <input type="text" class="form-control" id="rute_pemberian" name="rute_pemberian" value="{{ $pemberian_obat->rute_pemberian }}" required>
                                </div>
                                <div>
                                    <strong for="keterangan">keterangan</strong>
                                    <textarea class="form-control" id="keterangan" name="keterangan" required>{{ $pemberian_obat->keterangan }}</textarea>
                                </div>
                                <div>
                                  <label for="pegawai_klinik_id">Dokter:</label>
                                  <select name="pegawai_klinik_id" id="pegawai_klinik_id" class="form-control" required>
                                      @foreach ($dokters as $id => $nama)
                                          <option value="{{ $id }}" {{ $id == $pemberian_obat->pegawai_klinik_id ? 'selected' : '' }}>{{ $nama }}</option>
                                      @endforeach
                                  </select>
                                </div>

                                <div class="mt-4 float-right">
                                    <a href="{{ route('pemberian_obat.index') }}" class="btn btn-secondary mr-1">Cancel</a>
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