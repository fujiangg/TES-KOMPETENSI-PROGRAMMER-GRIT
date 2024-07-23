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
                      <div class="card-header bg-secondarys">
                          <div class="col-sm-13">
                              <div class="float-sm-left">
                                  <h4 class="mb-0">Data Tindakan Pasien</h4>
                              </div>
                              <div class="float-sm-right">
                          </div>
                      </div>
                      </div>
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
  
                              @php
                                  $i = 1;
                              @endphp
  
                              @if(Auth::user()->role->id != '3')
                                  <div class="row mb-4">
                                      {{-- Button tambah data wilayah pasien --}}
                                      <div class="col-sm-6">
                                          <a href="{{ route('tindakan.create') }}" class="btn btn-primary mr-1"><i class="fa-solid fa-circle-plus mr-2"></i>Tambah Tindakan</a>
                                      </div>
                                  </div>
                              @endif

                              <table id="assetTable" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama Tindakan</th>
                                        <th>Deskripsi</th>
                                        <th>Kategori</th>
                                        <th>Kode Tindakan</th>
                                        <th>Tanggal Waktu</th>
                                        <th>Durasi</th>
                                        <th>Dokter</th>
                                        <th>Pasien</th>
                                        <th>Tempat</th>
                                        <th>Biaya</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tindakan as $t)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $t->nama_tindakan }}</td>
                                            <td>{{ $t->deskripsi }}</td>
                                            <td>{{ $t->kategori }}</td>
                                            <td>{{ $t->kode_tindakan }}</td>
                                            <td>{{ $t->tanggal_waktu }}</td>
                                            <td>{{ $t->durasi }}</td>
                                            <td>{{ $t->pegawai->nama_lengkap }}</td>
                                            <td>{{ $t->pasien->nama }}</td>
                                            <td>{{ $t->tempat }}</td>
                                            <td>{{ $t->biaya }}</td>
                                            <td>{{ $t->status }}</td>
                                            <td>   
                                                <a href="{{ route('tindakan.show', $t->id) }}" class="btn btn-primary btn-sm text-white mb-2 mr-1">Lihat</a>
                                                <a href="{{ route('tindakan.edit', $t->id) }}" class="btn btn-warning btn-sm text-white mb-2 mr-1">Edit</a>
                                                <form action="{{ route('tindakan.destroy', $t->id) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm text-white mb-2 mr-1" onclick="return confirm('Anda yakin akan menghapus data ini?');">Hapus</button>
                                                </form>
                                            </td>    
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
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
