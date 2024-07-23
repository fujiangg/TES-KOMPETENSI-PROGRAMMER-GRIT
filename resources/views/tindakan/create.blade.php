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
                        <a href="{{ route('tindakan.index') }}" class="text-dark"><i class="fa-solid fa-chevron-left mr-2 mt-2"></i></a>
                        <h4 class="m-0">Tambah Data Tindakan Pasien</h4>
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

                            <form action="{{ route('tindakan.store') }}" method="POST">
                                @csrf

                                <div>
                                    <label for="nama_tindakan">Nama Tindakan</label>
                                    <input type="text" name="nama_tindakan" id="nama_tindakan" class="form-control" placeholder="Nama Tindakan" required>
                                </div>
                            
                                <div>
                                    <label for="deskripsi">Deskripsi</label>
                                    <textarea name="deskripsi" id="deskripsi" class="form-control" placeholder="Deskripsi"></textarea>
                                </div>
                            
                                <div>
                                    <label for="kode_tindakan">Kategori</label>
                                    <input type="text" name="kode_tindakan" id="kode_tindakan" class="form-control" placeholder="Kode Tindakan" required>
                                </div>

                                <div>

                                <div>
                                    <label for="kategori">Kode Tindakan</label>
                                    <input type="text" name="kategori" id="kategori" class="form-control" placeholder="Kategori" required>
                                </div>

                                </div>
                                    <label for="tanggal_waktu">Tanggal dan Waktu</label>
                                    <input type="datetime-local" name="tanggal_waktu" id="tanggal_waktu" class="form-control" placeholder="Tanggal dan Waktu" required>
                                </div>

                                <div>
                                    <label for="durasi">Durasi</label>
                                    <input type="number" name="durasi" id="durasi" class="form-control" placeholder="Durasi" required>
                                </div>

                                <div>
                                    <label for="pegawai_klinik_id">Dokter</label>
                                    <select name="pegawai_klinik_id" id="pegawai_klinik_id" class="form-control" required>
                                        @foreach ($dokters as $id => $nama)
                                            <option value="{{ $id }}">{{ $nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            
                                <div>
                                    <label for="pasien_id">Pasien</label>
                                    <select name="pasien_id" id="pasien_id" class="form-control" required>
                                        @foreach ($pasien as $id => $nama)
                                            <option value="{{ $id }}">{{ $nama }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div>
                                    <label for="tempat">Tempat</label>
                                    <input type="text" name="tempat" id="tempat" class="form-control" placeholder="Tempat" required>
                                </div>

                                <div>
                                    <label for="biaya">Biaya</label>
                                    <input type="number" name="biaya" id="biaya" class="form-control" placeholder="Biaya" required>
                                </div>

                                <div>
                                    <strong for="status">Status</strong>
                                    <select class="form-control" id="status" name="status">
                                        <option value="Dijadwalkan" {{ old('status') == 'Dijadwalkan' ? 'selected' : '' }}>Dijadwalkan</option>
                                        <option value="Selesai" {{ old('status') == 'Selesai' ? 'selected' : '' }}>Selesai</option>
                                        <option value="Ditunda" {{ old('status') == 'Ditunda' ? 'selected' : '' }}>Ditunda</option>
                                    </select>
                                </div>

                                <div>
                                    <label for="catatan_tambahan">Catatan Tambahan</label>
                                    <textarea name="catatan_tambahan" id="catatan_tambahan" class="form-control" placeholder="Catatan Tambahan"></textarea>
                                </div>

                                <div>
                                    <label for="resiko">Resiko</label>
                                    <input type="text" name="resiko" id="resiko" class="form-control" placeholder="Resiko" required>
                                </div>

                                <div>
                                    <label for="hasil">Hasil</label>
                                    <textarea name="hasil" id="hasil" class="form-control" placeholder="Hasil"></textarea>
                                </div>
                                
                                <div>
                                    <label for="tindak_lanjut">Tindak Lanjut</label>
                                    <textarea name="tindak_lanjut" id="tindak_lanjut" class="form-control" placeholder="Tindak Lanjut"></textarea>
                                </div>

                                <div>
                                    <label for="bahan_alat">Bahan Alat</label>
                                    <textarea name="bahan_alat" id="bahan_alat" class="form-control" placeholder="Bahan Alat"></textarea>
                                </div>


                                <div class="mt-4 float-right">
                                    <a href="{{ route('tindakan.index') }}" class="btn btn-secondary mr-1">Cancel</a>
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
@endsection
