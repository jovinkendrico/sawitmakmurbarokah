@extends('layouts.app2')

@section('title', 'Invoice Penjualan TBS')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h3 class="card-title">Invoice Penjualan TBS</h3>
                </div>
                <div class="card-body">
                    <!-- Invoice details -->
                    <div class="row mb-4">
                        <div class="col-sm-6">
                            <h5>From:</h5>
                            <x-address/>
                        </div>
                        <div class="col-sm-6">
                            <h5>To:</h5>
                            <address id="fromSupplier">
                                {{$penjualantbs['supplier']['nama']}}<br>
                                {{$penjualantbs['supplier']['alamat']}}<br>
                                Phone: {{$penjualantbs['supplier']['notelp']}}<br>
                                Email: {{$penjualantbs['supplier']['email']}}
                            </address>
                            <address id="fromPKS" style="display: none;">
                                {{$penjualantbs['pks']['nama']}}<br>
                                {{$penjualantbs['pks']['alamat']}}<br>
                                Phone: {{$penjualantbs['pks']['notelp']}}<br>
                                Email: {{$penjualantbs['pks']['email']}}
                            </address>
                        </div>
                        <div class="col-md-12 mt-3">
                            <div class="bg-light p-2 rounded">
                                <h5 class="mb-0">Ref: <span class="text-muted">{{$penjualantbs->ref ? $penjualantbs->ref : '-'}}</span></h5>
                            </div>
                            @if ($penjualantbs->status == 'Y')
                                <x-paid-stamp/>
                            @endif
                        </div>
                    </div>
                    <!-- Invoice table -->
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Tanggal</th>
                                    <th>Deskripsi</th>
                                    <th>Weigh In</th>
                                    <th>Weigh Out</th>
                                    <th>Net Gross</th>
                                    <th>Penalty</th>
                                    <th>Net Weigh</th>
                                    <th>Harga</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>{{\Carbon\Carbon::parse($penjualantbs->tanggal)->format('d-m-Y')}}</td>
                                    <td>TBS {{$penjualantbs->grade}}</td>
                                    <td>{{number_format($penjualantbs->weighin,0,'.',',')}} Kg</td>
                                    <td>{{number_format($penjualantbs->weighout,0,'.',',')}} Kg</td>
                                    <td>{{number_format($penjualantbs->netgross,0,'.',',')}} Kg</td>
                                    <td>{{number_format($penjualantbs->penalty,0,'.',',')}} Kg</td>
                                    <td>{{number_format($penjualantbs->netweigh,0,'.',',')}} Kg</td>
                                    <td>Rp. {{number_format($penjualantbs->harga,0,'.',',')}}</td>
                                    <td>Rp. {{number_format($penjualantbs->total,0,'.',',')}}</td>
                                </tr>
                                <!-- Add more rows for other products/services -->
                            </tbody>
                        </table>
                    </div>

                    <!-- Invoice totals -->
                    <div class="row">
                        <div class="col-md-6">
                            <p class="lead">Payment Details:</p>
                            <!-- Add payment details here -->
                        </div>
                        <div class="col-md-6">
                            <p class="lead">Amount:</p>
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th style="width:50%">Subtotal:</th>
                                            <td>Rp. {{number_format($penjualantbs->total,2,'.',',')}}</td>
                                        </tr>
                                        <tr>
                                            <th>Tax ({{$penjualantbs->pphpercentage}}%):</th>
                                            <td>Rp. {{number_format($penjualantbs->pph,2,'.',',')}}</td>
                                        </tr>
                                        <tr>
                                            <th>Total:</th>
                                            <td>Rp. {{number_format($penjualantbs->netto,2,'.',',')}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4 no-print">
                        <div class="col-md-12 text-right">
                            <button class="btn btn-primary" id="toggleAddressBtn">Toggle Address</button>
                            <button class="btn btn-success" onclick="window.print()">
                                <i class="fas fa-print"></i> Print Invoice
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style type="text/css" media="print">
    @media print {
        /* Hide horizontal scrollbar for table */
        .table-responsive {
            overflow-x: hidden !important;
        }
        @page {
        size: landscape;
        }
        footer {
            display: none !important;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
        }

        .col-md-6 {
            width: 50%;
        }
    }
</style>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const fromSupplier = document.getElementById('fromSupplier');
        const fromPKS = document.getElementById('fromPKS');
        const toggleAddressBtn = document.getElementById('toggleAddressBtn');

        // Add event listener to the toggle button
        toggleAddressBtn.addEventListener('click', function() {
            // Toggle display of addresses
            if (fromSupplier.style.display === 'none') {
                fromSupplier.style.display = 'block';
                fromPKS.style.display = 'none';
                toggleAddressBtn.textContent = 'Show PKS Address';
            } else {
                fromSupplier.style.display = 'none';
                fromPKS.style.display = 'block';
                toggleAddressBtn.textContent = 'Show Supplier Address';
            }
        });
    });
</script>
@endsection
