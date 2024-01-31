@extends('layouts.app2')

@section('title', 'Blok')
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
                    <h3 class="card-title">Data Blok</h3>
                    <a href="{{ route('admin.master.blok.create') }}" class="btn btn-success btn-sm float-right" title="Add New Blok">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add New
                    </a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Luas</th>
                                <th>Jlh Pokok</th>
                                <th>Tahun Tanam</th>
                                <th style="width: 20%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $luas = 0;
                                $jlhpokok = 0;
                            @endphp
                            @foreach ($bloks as $blok)
                            <tr>
                                @php
                                    $luas += $blok->luas;
                                    $jlhpokok += $blok->jlhpokok;
                                @endphp
                                <td>{{$loop->iteration}}</td>
                                <td>{{$blok->nama}}</td>
                                <td>{{$blok->luas}} Ha</td>
                                <td>{{$blok->jlhpokok}}</td>
                                <td>{{$blok->tahuntanam}}</td>
                                <td class="project-actions text-right">
                                    <a class="btn btn-primary btn-sm" href="{{route('admin.master.blok.show',$blok->id)}}">
                                        <i class="fas fa-folder">
                                        </i>
                                        View
                                    </a>
                                    <a class="btn btn-info btn-sm" href="{{route('admin.master.blok.edit',$blok->id)}}">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Edit
                                    </a>
                                    <form method="post" action="{{route('admin.master.blok.delete',$blok->id)}}" accept-charset="UTF-8" style="display:inline">
                                      @csrf
                                      @method('DELETE')
                                      <button type="submit" class="btn btn-danger btn-sm">
                                          <i class="fas fa-trash"></i>Delete
                                      </button>
                                  </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan="2">Total:</th>
                                <th>{{$luas}} Ha</th>
                                <th>{{$jlhpokok}}</th>
                                <th colspan="2"></th>
                            </tr>
                        </tfoot>
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
