@extends('layouts.app2')

@section('title', 'Karyawan')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Karyawan {{$karyawan->nama}}</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table">
                        <tbody>
                            <tr>
                                <th>ID</th>
                                <td>{{ $karyawan->id }}</td>
                            </tr>
                            <tr>
                                <th>NIK</th>
                                <td>{{ $karyawan->nik }}</td>
                            </tr>
                            <tr>
                                <th>Nama</th>
                                <td>{{ $karyawan->nama }}</td>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                                <td>{{ $karyawan->alamat }}</td>
                            </tr>
                            <tr>
                                <th>Jenis Kelamin</th>
                                <td>{{ $karyawan->jk == 'l' ? 'Laki-laki' : 'Perempuan' }}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>
                                    <span class="badge badge-{{ $karyawan->status == 'y' ? 'success' : 'danger' }}">
                                        {{ $karyawan->status == 'y' ? 'Aktif' : 'Non Aktif' }}
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <th>Jabatan</th>
                                <td>{{ $karyawan->jabatan }}</td>
                            </tr>
                            <tr>
                                <th>Tanggal Masuk</th>
                                <td>{{ \Carbon\Carbon::parse($karyawan->tglmasuk)->format('d-m-Y')}}</td>
                            </tr>
                            <tr>
                                <th>Tanggal Keluar</th>
                                <td>{{ $karyawan->tglkeluar ? \Carbon\Carbon::parse($karyawan->tglkeluar)->format('d-m-Y') : 'N/A' }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</div>

@endsection
