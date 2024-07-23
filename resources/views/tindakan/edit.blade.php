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
                        <h4 class="m-0">Edit Data Tindakan Pasien</h4>
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
                            <form method="POST" action="{{ route('tindakan.update', $tindakan->id) }}">
                                @csrf
                                @method('PUT')

                                <div>
                                    <strong>Nama Tindakan:</strong>
                                    <input type="text" name="nama_tindakan" value="{{ $tindakan->nama_tindakan }}" class="form-control" placeholder="Nama Tindakan">
                                </div>
                                <div>
                                  <strong>Deskripsi:</strong>
                                  <textarea name="deskripsi" class="form-control" placeholder="Deskripsi">{{ $tindakan->deskripsi }}</textarea>
                                </div>
                                <div>
                                  <strong>Kategori:</strong>
                                  <input type="text" name="kategori" value="{{ $tindakan->kategori }}" class="form-control" placeholder="Kategori">
                                </div>
                                <div>
                                  <strong>Kode Tindakan:</strong>
                                  <input type="text" name="kode_tindakan" value="{{ $tindakan->kode_tindakan }}" class="form-control" placeholder="Kode Tindakan">
                                </div>
                                <div>
                                  <strong>Tanggal dan Waktu:</strong>
                                  <input type="datetime-local" name="tanggal_waktu" value="{{ $tindakan->tanggal_waktu }}" class="form-control" placeholder="Tanggal dan Waktu">
                                </div>
                                <div>
                                  <strong>Durasi:</strong>
                                  <input type="number" name="durasi" value="{{ $tindakan->durasi }}" class="form-control" placeholder="Durasi">
                                </div>
                                <div>
                                  <strong for="pegawai_klinik_id">Dokter:</strong>
                                  <select name="pegawai_klinik_id" id="pegawai_klinik_id" class="form-control" required>
                                      @foreach ($dokters as $id => $nama)
                                          <option value="{{ $id }}" {{ $id == $tindakan->pegawai_klinik_id ? 'selected' : '' }}>
                                              {{ $nama }}
                                          </option>
                                      @endforeach
                                  </select>
                                </div>
                                <div>
                                  <label for="pasien_id">Pasien:</label>
                                  <select name="pasien_id" id="pasien_id" class="form-control" required>
                                      @foreach ($pasien as $id => $nama)
                                          <option value="{{ $id }}" {{ $id == $tindakan->pasien_id ? 'selected' : '' }}>{{ $nama }}</option>
                                      @endforeach
                                  </select>
                                </div>
                                <div>
                                  <strong>Tempat:</strong>
                                  <input type="text" name="tempat" value="{{ $tindakan->tempat }}" class="form-control" placeholder="Tempat">
                                </div>
                                <div>
                                  <strong>Biaya:</strong>
                                  <input type="number" name="biaya" value="{{ $tindakan->biaya }}" class="form-control" placeholder="Biaya">
                                </div>
                                <div>
                                  <strong for="status">Status</strong>
                                  <select class="form-control" id="status" name="status">
                                      <option value="Dijadwalkan" {{ old('status', $tindakan->status) == 'Dijadwalkan' ? 'selected' : '' }}>Dijadwalkan</option>
                                      <option value="Selesai" {{ old('status', $tindakan->status) == 'Selesai' ? 'selected' : '' }}>Selesai</option>
                                      <option value="Ditunda" {{ old('status', $tindakan->status) == 'Ditunda' ? 'selected' : '' }}>Ditunda</option>
                                  </select>
                                </div>
                                <div>
                                  <strong>Catatan Tambahan:</strong>
                                  <textarea name="catatan_tambahan" class="form-control" placeholder="Catatan Tambahan">{{ $tindakan->catatan_tambahan }}</textarea>
                                </div>
                                <div>
                                  <strong>Resiko:</strong>
                                  <input type="number" name="resiko" value="{{ $tindakan->resiko }}" class="form-control" placeholder="Resiko">
                                </div>
                                <div>
                                  <strong>Hasil:</strong>
                                  <textarea name="hasil" class="form-control" placeholder="Hasil">{{ $tindakan->hasil }}</textarea>
                                </div>
                                <div>
                                  <strong>Tindak Lanjut:</strong>
                                  <textarea name="tindak_lanjut" class="form-control" placeholder="Tindak Lanjut">{{ $tindakan->tindak_lanjut }}</textarea>
                                </div>
                                <div>
                                  <strong>Bahan Alat:</strong>
                                  <textarea name="bahan_alat" class="form-control" placeholder="Bahan Alat">{{ $tindakan->bahan_alat }}</textarea>
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