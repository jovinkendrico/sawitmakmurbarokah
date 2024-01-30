@extends('layouts.app2')
@section('title', 'Armada')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Armada</h3>
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

                        <form method="POST" action="{{route('admin.master.armada.store')}}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="nopol">Nomor Polisi:</label>
                                        <input type="text" name="nopol" id="nopol" class="form-control" placeholder="Masukkan Nomor Polisi">
                                        @error('nopol')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="alias">Alias:</label>
                                        <input type="text" name="alias" id="alias" class="form-control" placeholder="Masukkan alias">
                                        @error('alias')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="norangka">Nomor Rangka:</label>
                                        <input type="text" name="norangka" id="norangka" class="form-control" placeholder="Masukkan Nomor Rangka">
                                        @error('norangka')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="nomesin">Nomor Mesin:</label>
                                        <input type="text" name="nomesin" id="nomesin" class="form-control" placeholder="Masukkan Nomor Mesin">
                                        @error('nomesin')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="merk">Merk:</label>
                                        <input type="text" name="merk" id="merk" class="form-control" placeholder="Masukkan Merk">
                                        @error('merk')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="type">Type:</label>
                                        <input type="text" name="type" id="type" class="form-control" placeholder="Masukkan Type">
                                        @error('type')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="jenis">Jenis:</label>
                                        <input type="text" name="jenis" id="jenis" class="form-control" placeholder="Masukkan Jenis">
                                        @error('jenis')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="model">Model:</label>
                                        <input type="text" name="model" id="model" class="form-control" placeholder="Masukkan Model">
                                        @error('model')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="tahunpembuatan">Tahun Pembuatan:</label>
                                        <input type="number" min="1900" max="2045" step="1" name="tahunpembuatan" id="tahunpembuatan" class="form-control" placeholder="Masukkan Tahun Pembuatan">
                                        @error('tahunpembuatan')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="berlaku">Berlaku Hingga:</label>
                                    <input type="date" name="berlaku" id="berlaku" class="form-control">
                                    @error('berlaku')
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
