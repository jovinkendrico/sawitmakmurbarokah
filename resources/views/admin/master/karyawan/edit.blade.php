@extends('layouts.app2')
@section('title', 'Karyawan')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Ubah Karyawan</h3>
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

                        <form method="POST" action="{{route('admin.master.karyawan.update',$karyawan->id)}}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="nik">NIK:</label>
                                        <input type="text" name="nik" id="nik" class="form-control" value="{{$karyawan->nik}}" placeholder="Masukkan NIK">
                                        @error('nik')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="nama">Nama:</label>
                                        <input type="text" name="nama" id="nama" class="form-control" value="{{$karyawan->nama}}" placeholder="Masukkan Nama">
                                        @error('nama')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="jk">Jenis Kelamin:</label>
                                        <select class="form-control select2bs4" id="jk" name="jk" style="width: 100%;">
                                            <option disabled value> -- Pilih Jenis Kelamin -- </option>
                                            <option value="l" {{ $karyawan->jk == 'l' ? 'selected' : '' }}>Laki-Laki</option>
                                            <option value="p" {{ $karyawan->jk == 'p' ? 'selected' : '' }}>Perempuan</option>
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
                                        <input type="text" name="alamat" id="alamat" class="form-control" value="{{$karyawan->alamat}}" placeholder="Masukkan Alamat">
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
                                            <option value="Panen" {{$karyawan->jabatan == "Panen" ? 'selected': ''}}>Panen</option>
                                            <option value="Perawatan" {{$karyawan->jabatan == "Perawatan" ? 'selected': ''}}>Perawatan</option>
                                            <option value="Muat" {{$karyawan->jabatan == "Muat" ? 'selected': ''}}>Muat</option>
                                            <option value="Supir" {{$karyawan->jabatan == "Supir" ? 'selected': ''}}>Supir</option>
                                            <option value="Kernek Supir" {{$karyawan->jabatan == "Kernek Supir" ? 'selected': ''}}>Kernek Supir</option>
                                            <option value="Mandor Panen" {{$karyawan->jabatan == "Mandor Panen" ? 'selected': ''}}>Mandor Panen</option>
                                            <option value="Mandor Perawatan" {{$karyawan->jabatan == "Mandor Perawatan" ? 'selected': ''}}>Mandor Perawatan</option>
                                            <option value="Krani Admin" {{$karyawan->jabatan == "Krani Admin" ? 'selected': ''}}>Krani Admin</option>
                                            <option value="Operator Alat Berat" {{$karyawan->jabatan == "Operator Alat Berat" ? 'selected': ''}}>Operator Alat Berat</option>
                                            <option value="Helver Alat Berat" {{$karyawan->jabatan == "Helver Alat Berat" ? 'selected': ''}}>Helver Alat Berat</option>
                                            <option value="Manager" {{$karyawan->jabatan == "Manager" ? 'selected': ''}}>Manager</option>
                                            <option value="Mandor Lapangan" {{$karyawan->jabatan == "Mandor Lapangan" ? 'selected': ''}}>Mandor Lapangan</option>
                                            <option value="Centeng" {{$karyawan->jabatan == "Centeng" ? 'selected': ''}}>Centeng</option>
                                        </select>
                                        @error('jabatan')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="tglmasuk">Tanggal Masuk:</label>
                                    <input type="date" name="tglmasuk" id="tglmasuk" value="{{$karyawan->tglmasuk}}" class="form-control">
                                    @error('jabatan')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group float-right">
                                        <input class="btn btn-primary" type="submit" value="Ubah">
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
