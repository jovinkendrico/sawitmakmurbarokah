@extends('layouts.app2')
@section('title', 'Generate Report - Penjualan TBS')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Generate Penjualan TBS Report</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.laporan.transaksi.penjualantbs.generate') }}" class="form-horizontal">
                            @csrf
                            <div class="row">
                                <!-- Periode Bulan filter -->
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="periodebulan">Periode Bulan:</label>
                                        <select class="form-control select2bs4" id="periodebulan" name="periodebulan">
                                            <option value="">-- Select Periode Bulan --</option>
                                            <option value="Januari">Januari</option>
                                            <option value="Februari">Februari</option>
                                            <option value="Maret">Maret</option>
                                            <option value="April">April</option>
                                            <option value="Mei">Mei</option>
                                            <option value="Juni">Juni</option>
                                            <option value="Juli">Juli</option>
                                            <option value="Agustus">Agustus</option>
                                            <option value="September">September</option>
                                            <option value="Oktober">Oktober</option>
                                            <option value="November">November</option>
                                            <option value="Desember">Desember</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="periodetahun">Periode Tahun:</label>
                                        <input type="number" min="1990" max="2100" step="1" name="periodetahun" id="periodetahun" class="form-control" placeholder="Masukkan Periode Tahun">
                                        @error('periodetahun')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="rotasi">Rotasi:</label>
                                        <select class="form-control select2bs4" id="rotasi" name="rotasi" style="width: 100%;">
                                            <option value=""> -- Pilih Rotasi -- </option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                        @error('rotasi')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="tanggal">Tanggal:</label>
                                        <input type="date" name="tanggal" id="tanggal" class="form-control">
                                        @error('tanggal')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="id_armada">Truk:</label>
                                        <select class="form-control select2bs4" id="id_armada" name="id_armada" style="width: 100%;">
                                            <option value=""> -- Pilih Armada -- </option>
                                            @foreach ($armadas as $armada)
                                                <option value={{$armada->id}}>{{$armada->nopol}}</option>
                                            @endforeach
                                        </select>
                                        @error('id_armada')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="id_pks">PKS:</label>
                                        <select class="form-control select2bs4" id="id_pks" name="id_pks" style="width: 100%;">
                                            <option value=""> -- Pilih PKS -- </option>
                                            @foreach ($pkss as $pks)
                                            <option value={{$pks->id}}>{{$pks->nama}}</option>
                                            @endforeach
                                        </select>
                                        @error('id_pks')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="id_supplier">Supplier:</label>
                                        <select class="form-control select2bs4" id="id_supplier" name="id_supplier" style="width: 100%;">
                                            <option value=""> -- Pilih Supplier -- </option>
                                            @foreach ($suppliers as $supplier)
                                            <option value={{$supplier->id}}>{{$supplier->nama}}</option>
                                            @endforeach
                                        </select>
                                        @error('id_supplier')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="ketlunas">Keterangan Lunas:</label>
                                    <select class="form-control select2bs4" id="ketlunas" name="ketlunas" style="width: 100%;">
                                        <option value=""> -- Pilih Keterangan Lunas -- </option>
                                        <option value="MDRI AY">MDRI AY</option>
                                        <option value="BRI AY">BRI AY</option>
                                        <option value="MDRI ENISS">MDRI ENISS</option>
                                        <option value="BMD ATB">BMD ATB</option>
                                        <option value="BMD JK">BMD JK</option>
                                        <option value="MDRI WARSONO">MDRI WARSONO</option>
                                    </select>
                                    @error('ketlunas')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="status">Status Lunas:</label>
                                        <select class="form-control select2bs4" id="status" name="status" style="width: 100%;">
                                            <option value=""> -- Pilih Status Lunas -- </option>
                                            <option value="Y">Yes</option>
                                            <option value="N">No</option>
                                        </select>
                                        @error('status')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group float-right">
                                        <button type="submit" class="btn btn-primary">Generate Report</button>
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
