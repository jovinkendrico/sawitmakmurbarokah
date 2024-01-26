@extends('layouts.app2')
@section('title', 'Karyawan')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Karyawan</h3>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="POST" action="{{route('admin.master.karyawan.store')}}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="nik">NIK:</label>
                                        <input type="text" name="nik" id="nik" class="form-control" placeholder="Masukkan NIK">
                                        @error('nik')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="nama">Nama:</label>
                                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama">
                                        @error('nama')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="jk">Jenis Kelamin:</label>
                                        <select class="form-control select2bs4" id="jk" name="jk" style="width: 100%;">
                                            <option disabled selected value> -- Pilih Jenis Kelamin -- </option>
                                            <option value="l">Laki-Laki</option>
                                            <option value="p">Perempuan</option>
                                        </select>
                                        @error('jk')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="alamat">Alamat</label>
                                        <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Masukkan Alamat">
                                        @error('alamat')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="jabatan">Jabatan:</label>
                                        <select class="form-control select2bs4" id="jabatan" name="jabatan" style="width: 100%;">
                                            <option disabled selected value> -- Pilih Jabatan -- </option>
                                            <option value="Panen">Panen</option>
                                            <option value="Perawatan">Perawatan</option>
                                            <option value="Muat">Muat</option>
                                            <option value="Supir">Supir</option>
                                            <option value="Kernek Supir">Kernek Supir</option>
                                            <option value="Mandor Panen">Mandor Panen</option>
                                            <option value="Mandor Perawatan">Mandor Perawatan</option>
                                            <option value="Krani Admin">Krani Admin</option>
                                            <option value="Operator Alat Berat">Operator Alat Berat</option>
                                            <option value="Helver Alat Berat">Helver Alat Berat</option>
                                            <option value="Manager">Manager</option>
                                            <option value="Mandor Lapangan">Mandor Lapangan</option>
                                            <option value="Centeng">Centeng</option>
                                        </select>
                                        @error('jabatan')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="tglmasuk">Tanggal Masuk:</label>
                                    <input type="date" name="tglmasuk" id="tglmasuk" class="form-control">
                                    @error('jabatan')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group float-right">
                                        <input class="btn btn-primary" type="submit" value="Tambah">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
