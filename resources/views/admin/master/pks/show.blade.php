@extends('layouts.app2')

@section('title', 'PKS')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">PKS {{$pks->nama}}</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table">
                        <tbody>
                            <tr>
                                <th style="width: 20%">ID</th>
                                <td>{{$pks->id}}</td>
                            </tr>
                            <tr>
                                <th>Nama</th>
                                <td>{{$pks->nama}}</td>
                            </tr>
                            <tr>
                                <th>Alamat PKS</th>
                                <td>{{$pks->alamatpks}}</td>
                            </tr>
                            <tr>
                                <th>Alamat Kantor</th>
                                <td>{{$pks->alamatkantor}}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{$pks->email}}</td>
                            </tr>
                            <tr>
                                <th>Nomor Telepon</th>
                                <td>{{$pks->notelp}}</td>
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
