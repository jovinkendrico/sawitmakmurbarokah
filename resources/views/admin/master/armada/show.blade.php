@extends('layouts.app2')

@section('title', 'Karyawan')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Armada {{$armada->alias}}</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table">
                        <tbody>
                            <tr>
                                <th style="width: 20%">ID</th>
                                <td>{{ $armada->id }}</td>
                            </tr>
                            <tr>
                                <th>Nomor Polisi</th>
                                <td>{{ $armada->nopol }}</td>
                            </tr>
                            <tr>
                                <th>Alias</th>
                                <td>{{ $armada->alias }}</td>
                            </tr>
                            <tr>
                                <th>Nomor Rangka</th>
                                <td>{{ $armada->norangka }}</td>
                            </tr>
                            <tr>
                                <th>Nomor Mesin</th>
                                <td>{{ $armada->nomesin }}</td>
                            </tr>
                            <tr>
                                <th>Merk</th>
                                <td>{{ $armada->merk }}</td>
                            </tr>
                            <tr>
                                <th>Type</th>
                                <td>{{ $armada->type }}</td>
                            </tr>
                            <tr>
                                <th>Jenis</th>
                                <td>{{ $armada->jenis }}</td>
                            </tr>
                            <tr>
                                <th>Model</th>
                                <td>{{ $armada->model }}</td>
                            </tr>
                            <tr>
                                <th>Tahun Pembuatan</th>
                                <td>{{ $armada->tahunpembuatan }}</td>
                            </tr>
                            <tr>
                                <th>Berlaku Hingga</th>
                                <td>{{ \Carbon\Carbon::parse($armada->berlaku)->format('d-m-Y')}}</td>
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
