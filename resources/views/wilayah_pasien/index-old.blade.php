@extends('layouts.app')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">

        <div class="container">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>Daftar Wilayah Pasien</h2>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-success" href="{{ route('wilayah_pasien.create') }}"> Tambah Wilayah Pasien</a>
                    </div>
                </div>
            </div>

            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif

            @php
                $i = 1;
            @endphp

            <table id="assetTable" class="table table-bordered table-hover">
                <tr>
                    <th>No</th>
                    <th>Nama Wilayah</th>
                    <th>Kota/Kabupaten</th>
                    <th>Provinsi</th>
                    <th>Kode Pos</th>
                    <th width="280px">Action</th>
                </tr>
                @foreach ($wilayah as $w)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $w->nama_wilayah }}</td>
                    <td>{{ $w->kota_kabupaten }}</td>
                    <td>{{ $w->provinsi }}</td>
                    <td>{{ $w->kode_pos }}</td>
                    <td>
                        <form action="{{ route('wilayah_pasien.destroy', $w->id_wilayah) }}" method="POST">
                            <a class="btn btn-info" href="{{ route('wilayah_pasien.show', $w->id_wilayah) }}">Show</a>
                            <a class="btn btn-primary" href="{{ route('wilayah_pasien.edit', $w->id_wilayah) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin akan menghapus data ini?');">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
  </div>
@endsection
