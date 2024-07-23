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
                      <div class="card-header bg-secondarys">
                          <div class="col-sm-13">
                              <div class="float-sm-left">
                                  <h4 class="mb-0">Data Pemberian Obat Pasien</h4>
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
                                          <a href="{{ route('pemberian_obat.create') }}" class="btn btn-primary mr-1"><i class="fa-solid fa-circle-plus mr-2"></i>Tambah Pemberian Obat Pasien</a>
                                      </div>
                                  </div>
                              @endif

                              <table id="assetTable" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Tanggal Pemberian</th>
                                        <th>Pasien</th>
                                        <th>Obat</th>
                                        <th>Jumlah</th>
                                        <th>Dosis</th>
                                        <th>Rute Pemberian</th>
                                        <th>Dokter</th>
                                        <th width="280px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pemberian_obat as $item)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $item->tanggal_pemberian }}</td>
                                            <td>{{ $item->pasien->nama }}</td>
                                            <td>{{ $item->obat->nama }}</td>
                                            <td>{{ $item->jumlah }}</td>
                                            <td>{{ $item->dosis }}</td>
                                            <td>{{ $item->rute_pemberian }}</td>
                                            <td>{{ $item->pegawai->nama_lengkap }}</td>
                                            <td>
                                                <a href="{{ route('pemberian_obat.show', $item->id) }}" class="btn btn-primary btn-sm text-white mb-2 mr-1">Lihat</a>
                                                <a href="{{ route('pemberian_obat.edit', $item->id) }}" class="btn btn-warning btn-sm text-white mb-2 mr-1">Edit</a>
                                                <form action="{{ route('pemberian_obat.destroy', $item->id) }}" method="POST" style="display:inline;">
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
