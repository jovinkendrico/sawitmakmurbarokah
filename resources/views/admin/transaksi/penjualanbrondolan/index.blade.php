@extends('layouts.app2')

@section('title', 'Penjualan Brondolan')
@section('content')
@if(Session::has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Data Penjualan Brondolan</h3>
                    <a href="{{ route('admin.transaksi.penjualanbrondolan.create') }}" class="btn btn-success btn-sm float-right" title="Add New Penjualan Brondolan">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add New
                    </a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tanggal</th>
                                <th>Truk</th>
                                <th>Net Weigh</th>
                                <th>Harga</th>
                                <th>Total</th>
                                <th>PPH</th>
                                <th>Fee</th>
                                <th>Netto</th>
                                <th>PKS</th>
                                <th>Supplier</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($penjualanbrondolans as $penjualanbrondolan)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{\Carbon\Carbon::parse($penjualanbrondolan->tanggal)->format('d-m-Y')}}</td>
                                <td>{{$penjualanbrondolan->id_truk ? $penjualanbrondolan['truk']['nopol'] : "NIHIL" }}</td>
                                <td>{{number_format($penjualanbrondolan->netweigh,0,'.',',')}} Kg</td>
                                <td>Rp. {{number_format($penjualanbrondolan->harga, 0, '.', ',')}}</td>
                                <td>Rp. {{number_format($penjualanbrondolan->total, 0, '.', ',')}}</td>
                                <td>Rp. {{number_format($penjualanbrondolan->pph, 0, '.', ',')}}</td>
                                <td>Rp. {{number_format($penjualanbrondolan->fee, 0, '.', ',')}}</td>
                                <td>Rp. {{number_format($penjualanbrondolan->netto, 0, '.', ',')}}</td>
                                <td>{{$penjualanbrondolan->id_pks ?  $penjualanbrondolan['pks']['alias'] : 'AGEN'}}</td>
                                <td>{{$penjualanbrondolan->id_supplier ? $penjualanbrondolan['supplier']['alias'] : 'AGEN'}}</td>
                                <td class="text-center">
                                    @php
                                        $iconClass = ($penjualanbrondolan->status == 'N') ? 'fas fa-times text-danger' : 'fas fa-check text-success';
                                        echo "<i class='$iconClass'></i>";
                                    @endphp
                                  </td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            ...
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item text-primary" href="{{ route('admin.transaksi.penjualanbrondolan.show',$penjualanbrondolan->id) }}"><i class="fas fa-folder">
                                            </i>View</a>
                                            <a class="dropdown-item text-info" href="{{ route('admin.transaksi.penjualanbrondolan.edit',$penjualanbrondolan->id) }}"> <i class="fas fa-pencil-alt">
                                            </i>Edit</a>
                                            <form method="post" action="{{ route('admin.transaksi.penjualanbrondolan.delete',$penjualanbrondolan->id) }}" accept-charset="UTF-8" style="display:inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="dropdown-item text-danger"><i class="fas fa-trash"></i>Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
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
