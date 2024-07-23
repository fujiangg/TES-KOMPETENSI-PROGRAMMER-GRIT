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
                        <h4 class="m-0">Edit Data Pelayanan Pasien</h4>
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
                            <form method="POST" action="{{ route('pelayanan.update', $pelayanan->id) }}">
                                @csrf
                                @method('PUT')
                                
                                <div>
                                  <label for="pasien_id">Pasien:</label>
                                  <select name="pasien_id" id="pasien_id" class="form-control" required>
                                      @foreach ($pasien as $id => $nama)
                                          <option value="{{ $id }}" {{ $id == $pelayanan->pasien_id ? 'selected' : '' }}>{{ $nama }}</option>
                                      @endforeach
                                  </select>
                                </div>
                                <div>
                                  <strong for="pegawai_klinik_id">Dokter:</strong>
                                  <select name="pegawai_klinik_id" id="pegawai_klinik_id" class="form-control" required>
                                      @foreach ($dokters as $id => $nama)
                                          <option value="{{ $id }}" {{ $id == $pelayanan->pegawai_klinik_id ? 'selected' : '' }}>
                                              {{ $nama }}
                                          </option>
                                      @endforeach
                                  </select>
                                </div>
                                <div>
                                  <strong>Jenis Pelayanan:</strong>
                                  <input type="text" name="jenis_pelayanan" value="{{ $pelayanan->jenis_pelayanan }}" class="form-control" placeholder="Jenis Pelayanan">
                                </div>
                                <div>
                                  <strong>Tanggal dan Waktu:</strong>
                                  <input type="datetime-local" name="tanggal_waktu" value="{{ $pelayanan->tanggal_waktu }}" class="form-control" placeholder="Tanggal dan Waktu">
                                </div>
                                <div>
                                  <strong for="status">Status</strong>
                                  <select class="form-control" id="status" name="status">
                                      <option value="Dijadwalkan" {{ old('status', $pelayanan->status) == 'Dijadwalkan' ? 'selected' : '' }}>Dijadwalkan</option>
                                      <option value="Selesai" {{ old('status', $pelayanan->status) == 'Selesai' ? 'selected' : '' }}>Selesai</option>
                                      <option value="Ditunda" {{ old('status', $pelayanan->status) == 'Ditunda' ? 'selected' : '' }}>Ditunda</option>
                                  </select>
                                </div>
                                <div>
                                  <strong>Catatan Tambahan:</strong>
                                  <input type="textarea" name="catatan_tambahan" value="{{ $pelayanan->catatan_tambahan }}" class="form-control" placeholder="Catatan Tambahan">
                                </div>
                                <div class="mt-4 float-right">
                                    <a href="{{ route('pelayanan.index') }}" class="btn btn-secondary mr-1">Cancel</a>
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