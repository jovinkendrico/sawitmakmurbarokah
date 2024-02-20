
@extends('layouts.app2')

@section('title','Report Penjualan Brondolan')
@section('content')

<div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <!-- Main content -->
        <div class="invoice p-3 mb-3">
          <!-- title row -->
          <div class="row">
            <div class="col-12">
                <h3>
                    Laporan Penjualan Brondolan
                <small class="float-right">Periode: {{$laporanpenjualanbrondolan['periodebulan'] == "" ? '-' : $laporanpenjualanbrondolan['periodebulan']}} {{$laporanpenjualanbrondolan['periodetahun'] == "" ? '' : $laporanpenjualanbrondolan['periodetahun']}}</small>
                </h3>
              <h4>
                CV. Anugrah Tuah Barokah
                <small class="float-right">Rotasi: {{$laporanpenjualanbrondolan['rotasi'] == "" ? '' : $laporanpenjualanbrondolan['rotasi']}}</small>
              </h4>
            </div>
            <!-- /.col -->
          </div>
          <!-- info row -->
          <!-- /.row -->

          <!-- Table row -->
          <div class="row">
            <div class="col-12 table-responsive">
              <table class="table table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Tanggal</th>
                  <th>Truk</th>
                  <th>Bruto</th>
                  <th>Sortir</th>
                  <th>Netto</th>
                  <th>Harga</th>
                  <th>Total Harga</th>
                  <th>PPH</th>
                  <th>Fee</th>
                  <th>Netto</th>
                  <th>PKS</th>
                  <th>Supplier</th>
                  <th>Pelunasan</th>
                  <th>Tgl Lunas</th>
                  <th>Ket Lunas</th>
                  <th>Keterangan</th>
                </tr>
                </thead>
                <tbody>
                    @php
                        $netgross = 0;
                        $penalty = 0;
                        $netweigh = 0;
                        $harga = 0;
                        $total = 0;
                        $pph = 0;
                        $fee = 0;
                        $netto = 0;
                        $pelunasan = 0;
                    @endphp
                @foreach ($results as $result)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{\Carbon\Carbon::parse($result->tanggal)->format('d-m-y')}}</td>
                        <td>
                            @if ($result->id_armada == null)
                                -
                            @else
                            {{$result['truk']['alias']}}
                            @endif
                        </td>
                        <td>{{number_format($result->netgross,0,'.',',')}}</td>
                        <td>{{number_format($result->penalty,0,'.',',')}}</td>
                        <td>{{number_format($result->netweigh,0,'.',',')}}</td>
                        <td>{{number_format($result->harga, 0, '.', ',')}}</td>
                        <td>{{number_format($result->total, 0, '.', ',')}}</td>
                        <td>{{number_format($result->pph, 0, '.', ',')}}</td>
                        <td>{{number_format($result->fee, 0, '.', ',')}}</td>
                        <td>{{number_format($result->netto, 0, '.', ',')}}</td>
                        <td>
                            @if ($result->id_pks == null)
                                AGEN
                            @else
                            {{$result['pks']['alias']}}
                            @endif
                        </td>
                        <td>
                            @if ($result->id_supplier == null)
                                AGEN
                            @else
                            {{$result['supplier']['alias']}}
                            @endif
                        </td>
                        <td>{{number_format($result->pelunasan, 0, '.', ',')}}</td>
                        <td>{{\Carbon\Carbon::parse($result->tgllunas)->format('d-m')}}</td>
                        <td>{{$result->ketlunas}}</td>
                        <td>{{$result->keterangan}}</td>
                    </tr>
                    @php
                        $netgross += $result->netgross;
                        $penalty += $result->penalty;
                        $netweigh += $result->netweigh;
                        $harga += $result->harga;
                        $total += $result->total;
                        $pph += $result->pph;
                        $fee += $result->fee;
                        $netto += $result->netto;
                        $pelunasan += $result->pelunasan;
                    @endphp
                @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="3">Total</th>
                        <th>{{number_format($netgross,0,'.',',')}}</th>
                        <th>{{number_format($penalty,0,'.',',')}}</th>
                        <th>{{number_format($netweigh,0,'.',',')}}</th>
                        <th>{{number_format($harga, 0, '.', ',')}}</th>
                        <th>{{number_format($total, 0, '.', ',')}}</th>
                        <th>{{number_format($pph, 0, '.', ',')}}</th>
                        <th>{{number_format($fee, 0, '.', ',')}}</th>
                        <th>{{number_format($netto, 0, '.', ',')}}</th>
                        <th colspan="2"></th>
                        <th>{{number_format($pelunasan, 0, '.', ',')}}</th>
                        <th colspan="3"></th>
                    </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
          <div class="row mt-4 no-print">
            <div class="col-md-12 text-right">
                <button class="btn btn-success" onclick="printReport()">
                    <i class="fas fa-print"></i> Print Invoice
                </button>
            </div>
        </div>
          <!-- /.row -->
        </div>
        <!-- /.invoice -->
      </div><!-- /.col -->
    </div><!-- /.row -->
</div>
  <script>
     function printReport() {
        var titleRow = document.querySelector('.invoice > .row');
        var tableContent = document.querySelector('.table-responsive').innerHTML;
        var printContents = titleRow.outerHTML + tableContent;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        var style = document.createElement('style');
        style.innerHTML = '@media print { @page { size: landscape; } }';
        document.head.appendChild(style);
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>
@endsection
