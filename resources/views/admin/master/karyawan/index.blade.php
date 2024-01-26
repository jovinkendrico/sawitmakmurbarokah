@extends('layouts.app2')

@section('title', 'Karyawan')
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
                    <h3 class="card-title">Data Karyawan</h3>
                    <a href="{{ route('admin.master.karyawan.create') }}" class="btn btn-success btn-sm float-right" title="Add New Cash Masuk">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add New
                    </a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NIK</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Status</th>
                                <th>Jabatan</th>
                                <th style="width: 20%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($karyawans as $karyawan)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $karyawan->nik }}</td>
                                <td>{{ $karyawan->nama }}</td>
                                <td>{{ $karyawan->jk == 'l' ? 'Laki-Laki' : 'Perempuan' }}</td>
                                <td>{{ $karyawan->status == 'y' ? 'Aktif' : 'Non-Aktif' }}</td>
                                <td>{{ $karyawan->jabatan }}</td>
                                <td class="project-actions text-right">
                                    <a class="btn btn-primary btn-sm" href="{{route('admin.master.karyawan.show',$karyawan->id)}}">
                                        <i class="fas fa-folder">
                                        </i>
                                        View
                                    </a>
                                    <a class="btn btn-info btn-sm" href="{{route('admin.master.karyawan.edit',$karyawan->id)}}">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Edit
                                    </a>
                                    <form method="post" action="{{route('admin.master.karyawan.delete',$karyawan->id)}}" accept-charset="UTF-8" style="display:inline">
                                      @csrf
                                      <button type="submit" class="btn btn-danger btn-sm">
                                          <i class="fas fa-trash"></i>Delete
                                      </button>
                                  </form>
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
