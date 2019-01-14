@extends('master/master')
@section('title', 'Tambah Data')
@section('content')
 <div class="container">
 	<div class="card">	
 		<div class="card-header">
            <div class="row">
                <div class="col">
                    <h1 align="center">Tambah Data</h1><hr>
                       <h6 align="center">Fauzan Awanda Alviansyah | 17523147</h6>            
                </div>
            </div>
 		</div>
        <form method="POST" action="/data">
            {{ csrf_field() }}
            @method('POST')
 		<div class="card-body">
                            <div class="form-group">
                                <label>Nama Depan</label>
                                <input class="form-control" type="text" name="nama_depan">
                            </div>
                            <div class="form-group">
                            	<label>Nama Belakang</label>
                            	<input type="text" class="form-control" name="nama_belakang">
                            </div>
                            <div class="form-group">
                            	<label>Tanggal Lahir</label> <br>
                            	<input type="date" class="form-control" name="tanggal_lahir" >
                            </div>
                            <div class="form-group">
	                            		<label>Jenis Kelamin</label> <br>
	                            		<div class="form-check form-check-inline">
		                                  <input class="form-check-input" type="radio" name="jenis_kelamin" value="p">
		                                  <label class="form-check-label" >Pria</label>
		                                </div>
		                                <div class="form-check form-check-inline">
		                                  <input class="form-check-input" type="radio" name="jenis_kelamin" value="w">
		                                  <label class="form-check-label" >Wanita</label>
		                                </div>
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" name="alamat" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Supervisor</label>
                                <select class="form-control" name="supervisor">
                                    @foreach($Pegawais as $pega)
                                    <option value="{{$pega->id_pegawai}}">{{$pega->nama_depan}} {{$pega->nama_belakang}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Departemen</label>
                                <select class="form-control" name="departemen">
                                    @foreach($Departemens as $depa)
                                    <option value="{{$depa->kode_departemen}}">{{$depa->nama_departemen}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Gaji</label>
                                <input type="text" name="gaji" class="form-control">
                            </div>
        </div>
        <div class="card-footer">
                    <div>
                        <button class="btn btn-success" type="submit">Submit</button>
                        <a class="btn btn-danger" href="/data">Cancel</a>
                        <a href="/data" class="btn btn-info">Liat Data</a>
                    </div>
                </div>
        </form>
 	</div>
 </div>
@endsection