@extends('layouts.app2')
@section('title', 'Penjualan TBS')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Edit Penjualan TBS</h3>
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

                        <form method="POST" action="{{route('admin.transaksi.penjualantbs.update',$penjualantbs->id)}}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="periodebulan">Periode Bulan:</label>
                                        <select class="form-control select2bs4" id="periodebulan" name="periodebulan" style="width: 100%;">
                                            <option disabled selected value> -- Pilih Periode Bulan -- </option>
                                            <option value="Januari" {{ $penjualantbs->periodebulan == 'Januari' ? 'selected' : '' }}>Januari</option>
                                            <option value="Februari" {{ $penjualantbs->periodebulan == 'Februari' ? 'selected' : '' }}>Februari</option>
                                            <option value="Maret" {{ $penjualantbs->periodebulan == 'Maret' ? 'selected' : '' }}>Maret</option>
                                            <option value="April" {{ $penjualantbs->periodebulan == 'April' ? 'selected' : '' }}>April</option>
                                            <option value="Mei" {{ $penjualantbs->periodebulan == 'Mei' ? 'selected' : '' }}>Mei</option>
                                            <option value="Juni" {{ $penjualantbs->periodebulan == 'Juni' ? 'selected' : '' }}>Juni</option>
                                            <option value="Juli" {{ $penjualantbs->periodebulan == 'Juli' ? 'selected' : '' }}>Juli</option>
                                            <option value="Agustus" {{ $penjualantbs->periodebulan == 'Agustus' ? 'selected' : '' }}>Agustus</option>
                                            <option value="September" {{ $penjualantbs->periodebulan == 'September' ? 'selected' : '' }}>September</option>
                                            <option value="Oktober" {{ $penjualantbs->periodebulan == 'Oktober' ? 'selected' : '' }}>Oktober</option>
                                            <option value="November" {{ $penjualantbs->periodebulan == 'November' ? 'selected' : '' }}>November</option>
                                            <option value="Desember" {{ $penjualantbs->periodebulan == 'Desember' ? 'selected' : '' }}>Desember</option>
                                        </select>
                                        @error('periodebulan')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="periodetahun">Periode Tahun:</label>
                                        <input type="number" min="1990" max="2100" step="1" name="periodetahun" id="periodetahun" class="form-control" value="{{$penjualantbs->periodetahun}}" placeholder="Masukkan Periode Tahun">
                                        @error('periodetahun')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="rotasi">Rotasi:</label>
                                        <select class="form-control select2bs4" id="rotasi" name="rotasi" style="width: 100%;">
                                            <option disabled selected value> -- Pilih Rotasi -- </option>
                                            <option value="1" {{ $penjualantbs->rotasi == '1' ? 'selected' : '' }}>1</option>
                                            <option value="2" {{ $penjualantbs->rotasi == '2' ? 'selected' : '' }}>2</option>
                                            <option value="3" {{ $penjualantbs->rotasi == '3' ? 'selected' : '' }}>3</option>
                                        </select>
                                        @error('rotasi')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="tanggal">Tanggal:</label>
                                        <input type="date" name="tanggal" id="tanggal" value="{{$penjualantbs->tanggal}}" class="form-control">
                                        @error('tanggal')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="ref">Ref:</label>
                                        <input type="text" name="ref" id="ref" class="form-control" value="{{$penjualantbs->ref}}" placeholder="Masukkan Ref">
                                    </div>
                                </div>
                                @error('ref')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="id_armada">Truk:</label>
                                        <select class="form-control select2bs4" id="id_armada" name="id_armada" style="width: 100%;">
                                            <option disabled selected value> -- Pilih Armada -- </option>
                                            @foreach ($armadas as $armada)
                                                <option value={{$armada->id}}  {{ $penjualantbs['truk']['id'] == $armada->id ? 'selected' : '' }}>{{$armada->nopol}}</option>
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
                                            <option disabled selected value> -- Pilih PKS -- </option>
                                            @foreach ($pkss as $pks)
                                            <option value={{$pks->id}} {{ $penjualantbs['pks']['id'] == $pks->id ? 'selected' : '' }}>{{$pks->nama}}</option>
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
                                            <option disabled selected value> -- Pilih Supplier -- </option>
                                            @foreach ($suppliers as $supplier)
                                            <option value={{$supplier->id}} {{ $penjualantbs['supplier']['id'] == $supplier->id ? 'selected' : '' }}>{{$supplier->nama}}</option>
                                            @endforeach
                                        </select>
                                        @error('id_supplier')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="weighin">Weigh In:</label>
                                        <div class="input-group">
                                            <input type="number" name="weighin" id="weighin" class="form-control" value="{{$penjualantbs->weighin}}"  placeholder="Masukkan Weigh In">
                                            <div class="input-group-append">
                                                <span class="input-group-text">Kg</span>
                                            </div>
                                        </div>
                                        @error('weighin')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="weighout">Weigh Out:</label>
                                        <div class="input-group">
                                            <input type="number" name="weighout" id="weighout" class="form-control" value="{{$penjualantbs->weighout}}"  placeholder="Masukkan Weigh Out">
                                            <div class="input-group-append">
                                                <span class="input-group-text">Kg</span>
                                            </div>
                                        </div>
                                        @error('weighout')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="netgross">Net Gross:</label>
                                        <div class="input-group">
                                            <input type="number" name="netgross" id="netgross" class="form-control"  value="{{$penjualantbs->netgross}}"  placeholder="Net Gross" readonly>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Kg</span>
                                            </div>
                                        </div>
                                        @error('netgross')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="penalty">Penalty:</label>
                                        <div class="input-group">
                                            <input type="number" name="penalty" id="penalty" class="form-control" value="{{$penjualantbs->penalty}}"  placeholder="Penalty">
                                            <div class="input-group-append">
                                                <span class="input-group-text">Kg</span>
                                            </div>
                                        </div>
                                        @error('penalty')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="netweigh">Net Weigh:</label>
                                        <div class="input-group">
                                            <input type="number" name="netweigh" id="netweigh" class="form-control" value="{{$penjualantbs->netweigh}}"  placeholder="Net Weigh" readonly>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Kg</span>
                                            </div>
                                        </div>
                                        @error('netweigh')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="harga">Harga:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Rp</span>
                                            </div>
                                            <input type="number" name="harga" id="harga" class="form-control" value="{{$penjualantbs->harga}}"  placeholder="Masukkan Harga">
                                        </div>
                                        @error('harga')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="total">Total:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Rp</span>
                                            </div>
                                            <input type="number" name="total" id="total" class="form-control" value="{{$penjualantbs->total}}"  placeholder="Masukkan Total" readonly>
                                        </div>
                                        @error('total')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="pphpercentage">PPH percentage:</label>
                                        <div class="input-group">
                                            <input type="number" name="pphpercentage" id="pphpercentage" step="0.01" class="form-control" value="{{$penjualantbs->pphpercentage}}"  placeholder="PPH Percentage">
                                            <div class="input-group-append">
                                                <span class="input-group-text">%</span>
                                            </div>
                                        </div>
                                        @error('pphpercentage')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="pph">PPH:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Rp</span>
                                            </div>
                                            <input type="number" name="pph" id="pph" class="form-control" value="{{$penjualantbs->pph}}"  placeholder="Masukkan PPH" readonly>
                                        </div>
                                        @error('pph')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="fee">Fee:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Rp</span>
                                            </div>
                                            <input type="number" name="fee" id="fee" class="form-control" value="{{$penjualantbs->fee}}"  placeholder="Masukkan Fee">
                                        </div>
                                        @error('fee')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="netto">Netto:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Rp</span>
                                            </div>
                                            <input type="number" name="netto" id="netto" class="form-control" value="{{$penjualantbs->netto}}"  placeholder="Masukkan Netto" readonly>
                                        </div>
                                        @error('netto')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="pelunasan">Pelunasan:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Rp</span>
                                            </div>
                                            <input type="number" name="pelunasan" id="pelunasan" class="form-control" value="{{$penjualantbs->pelunasan}}"  placeholder="Masukkan Pelunasan">
                                        </div>
                                        @error('pelunasan')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="tgllunas">Tanggal Lunas:</label>
                                    <input type="date" name="tgllunas" id="tgllunas" class="form-control" value="{{$penjualantbs->tgllunas}}" >
                                    @error('tgllunas')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label for="ketlunas">Keterangan Lunas:</label>
                                    <select class="form-control select2bs4" id="ketlunas" name="ketlunas"  style="width: 100%;">
                                        <option disabled selected value> -- Pilih Keterangan Lunas -- </option>
                                        <option value="MDRI AY"  {{ $penjualantbs->ketlunas == "MDRI AY" ? 'selected' : '' }}>MDRI AY</option>
                                        <option value="BRI AY" {{ $penjualantbs->ketlunas == "BRI AY" ? 'selected' : '' }}>BRI AY</option>
                                        <option value="MDRI ENISS" {{ $penjualantbs->ketlunas == "MDRI ENISS" ? 'selected' : '' }}>MDRI ENISS</option>
                                        <option value="BMD ATB" {{ $penjualantbs->ketlunas == "BMD ATB" ? 'selected' : '' }}>BMD ATB</option>
                                        <option value="BMD JK" {{ $penjualantbs->ketlunas == "BMD JK" ? 'selected' : '' }}>BMD JK</option>
                                        <option value="MDRI WARSONO" {{ $penjualantbs->ketlunas == "MDRI WARSONO" ? 'selected' : '' }}>MDRI WARSONO</option>
                                    </select>
                                    @error('ketlunas')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="status">Status Lunas:</label>
                                        <select class="form-control select2bs4" id="status" name="status" style="width: 100%;">
                                            <option disabled selected value> -- Pilih Status Lunas -- </option>
                                            <option value="Y" {{ $penjualantbs->status == "Y" ? 'selected' : '' }}>Yes</option>
                                            <option value="N" {{ $penjualantbs->status == "N" ? 'selected' : '' }}>No</option>
                                        </select>
                                        @error('status')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="grade">Grade:</label>
                                        <input type="text" name="grade" id="grade" class="form-control" value="{{$penjualantbs->grade}}" placeholder="Masukkan Grade">
                                        @error('grade')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="keterangan">Keterangan:</label>
                                        <input type="text" name="keterangan" id="keterangan" class="form-control" value="{{$penjualantbs->keterangan}}"  placeholder="Masukkan Keterangan">
                                    </div>
                                    @error('keterangan')
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function(){
            // Function to calculate net gross
            function calculateAll() {
                calculateNetGross();
                calculateNetWeigh();
                calculateTotal();
                calculatePPH();
                calculateNetto();
            }

            // Calculate all values when any input changes
            $('#weighin, #weighout, #netgross, #penalty, #harga, #pphpercentage, #fee').on('input', function(){
                calculateAll();
            });

            // Function to calculate net gross
            function calculateNetGross() {
                var weighIn = parseFloat($('#weighin').val()) || 0;
                var weighOut = parseFloat($('#weighout').val()) || 0;
                var netGross = weighIn - weighOut;
                $('#netgross').val(netGross);
            }

            // Function to calculate net weigh
            function calculateNetWeigh() {
                var netGross = parseFloat($('#netgross').val()) || 0;
                var penalty = parseFloat($('#penalty').val()) || 0;
                var netWeigh = netGross - penalty;
                $('#netweigh').val(netWeigh);
            }

            // Function to calculate total
            function calculateTotal() {
                var netGross = parseFloat($('#netgross').val()) || 0;
                var harga = parseFloat($('#harga').val()) || 0;
                var total = netGross * harga;
                $('#total').val(total);
            }

            // Function to calculate PPH
            function calculatePPH() {
                var total = parseFloat($('#total').val()) || 0;
                var pphPercentage = parseFloat($('#pphpercentage').val()) || 0;
                var pph = total * (pphPercentage / 100);
                $('#pph').val(pph);
            }

            // Function to calculate netto
            function calculateNetto() {
                var total = parseFloat($('#total').val()) || 0;
                var pph = parseFloat($('#pph').val()) || 0;
                var fee = parseFloat($('#fee').val()) || 0;
                var netto = total - pph - fee;
                $('#netto').val(netto);
            }
        });
    </script>

@endsection
