@extends('master/master')
@section('title', 'Liat Data Pegawai')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col">
                       <h1 align="center">Data Pegawai</h1><hr>
                       <h6 align="center">Fauzan Awanda Alviansyah | 17523147</h6>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col table-responsive">
                        <table class="table table-striped">
                            <tr>
                            	<th>No.</th>
                                <th>Nama Depan</th>
                                <th>Nama Belakang</th>
                                <th>Tanggal Lahir</th>
                                <th>Jenis Kelamin</th>
                                <th>Kode Departemen</th>
                                <th>Departemen</th>
                                <th>Action</th>
                            </tr>
                             @php
							    $no = 1;
							 @endphp
                            @foreach($Pegawais as $isi)
                            <tr>
                                <td>{{$no++}}</td>
                            	<td>{{ $isi->nama_depan }}</td>
                                <td>{{ $isi->nama_belakang }}</td> 
                                <td>{{ $isi->tanggal_lahir }}</td>                               
                                <td>{{ $isi->jenis_kelamin }}</td>
                                <td>{{ $isi->departemen }}</td>
                                <td>{{ $isi->Departemen['nama_departemen']}}</td>
                                <td>
                                    <div style="display: flex;">
                                        <a class="btn btn-primary btn-sm" href="{{route('data.edit',$isi->id_pegawai)}}">Edit</a>
                                        <form class="_delete_form" style="margin-left: 2px;" action="{{ route('data.destroy', $isi->id_pegawai) }}" method="post">
                                            {{csrf_field()}} {{method_field('DELETE')}}
                                        <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <a href="/data/create" class="btn btn-success">Tambah Pegawai</a>
                <a href="/datadepartemen" class="btn btn-info">Data Manager</a>
            </div>
        </div>
    </div>
@endsection