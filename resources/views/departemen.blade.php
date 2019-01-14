@extends('master/master')
@section('title', 'Liat Data Departemen')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col">
                       <h1 align="center">Data Departemen</h1> <hr>
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
                                <th>Kode Departemen</th>
                                <th>Nama Departemen</th>
                                <th>Nama Depan</th>
                                <th>Nama Belakang</th>
                            </tr>
                             @php
							    $no = 1;
							 @endphp
                            @foreach($Departemens as $isi)
                            <tr>
                                <td>{{$no++}}</td>
                            	<td>{{ $isi->kode_departemen }}</td>
                                <td>{{ $isi->nama_departemen }}</td> 
                                <td>{{ $isi->Manajer['nama_depan']}}</td>                               
                                <td>{{ $isi->Manajer['nama_belakang']}}</td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <a href="/data" class="btn btn-info">Data Pegawai</a>
            </div>
        </div>
    </div>
@endsection