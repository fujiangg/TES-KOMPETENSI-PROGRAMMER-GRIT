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
                        <a href="{{ route('pelayanan.index') }}" class="text-dark"><i class="fa-solid fa-chevron-left mr-2 mt-2"></i></a>
                        <h4 class="m-0">Tambah Data Pelayanan Pasien</h4>
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

                            <form action="{{ route('pelayanan.store') }}" method="POST">
                                @csrf

                                <div>
                                    <label for="pasien_id">Pasien</label>
                                    <select name="pasien_id" id="pasien_id" class="form-control" required>
                                        @foreach ($pasien as $id => $nama)
                                            <option value="{{ $id }}">{{ $nama }}</option>
                                        @endforeach
                                    </select>
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
                                    <strong for="jenis_pelayanan">Jenis Pelayanan</strong>
                                    <input type="text" class="form-control" id="jenis_pelayanan" name="jenis_pelayanan" value="{{ old('jenis_pelayanan') }}" required>
                                </div>
                                <div>
                                    <strong for="tanggal_waktu">Tanggal dan Waktu</strong>
                                    <input type="datetime-local" class="form-control" id="tanggal_waktu" name="tanggal_waktu" value="{{ old('tanggal_waktu') }}" required>
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
                                    <strong for="catatan_tambahan">Catatan Tambahan</strong>
                                    <input type="textarea" class="form-control" id="catatan_tambahan" name="catatan_tambahan" value="{{ old('catatan_tambahan') }}" required>
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
@endsection
