@extends('layouts.app2')

@section('title', 'Blok')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Blok {{$blok->nama}}</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table">
                        <tbody>
                            <tr>
                                <th style="width: 20%">ID</th>
                                <td>{{$blok->id}}</td>
                            </tr>
                            <tr>
                                <th>Nama</th>
                                <td>{{$blok->nama}}</td>
                            </tr>
                            <tr>
                                <th>Luas</th>
                                <td>{{$blok->luas}} Ha</td>
                            </tr>
                            <tr>
                                <th>Jlh Pokok</th>
                                <td>{{$blok->jlhpokok}}</td>
                            </tr>
                            <tr>
                                <th>Tahun Tanam</th>
                                <td>{{$blok->tahuntanam}}</td>
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
