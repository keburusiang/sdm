@extends('master/master')
@section('title', 'Edit Data')
@section('content')
 <div class="container">
 	<div class="raw">
 		<div class="col">
 			<br>
	 		<h1 align="center">Edit Data</h1> <hr>
                       <h6 align="center">Fauzan Awanda Alviansyah | 17523147</h6>			
 		</div>
 	</div>
 	<div class="card">	
        <form method="POST" action="/data/{{$Pegawais->id_pegawai}}">
            {{ csrf_field() }}
            @method('PUT')
 		<div class="card-body">
                            <div class="form-group">
                                <label>Nama Depan</label>
                                <input class="form-control" type="text" name="nama_depan" value="{{$Pegawais->nama_depan}}">
                            </div>
                            <div class="form-group">
                            	<label>Nama Belakang</label>
                            	<input type="text" class="form-control" name="nama_belakang" value="{{$Pegawais->nama_belakang}}">
                            </div>
                            <div class="form-group">
                            	<label>Tanggal Lahir</label> <br>
                            	<input class="form-control" type="date" name="tanggal_lahir" value="{{$Pegawais->tanggal_lahir}}">
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
                                <input type="text" name="alamat" class="form-control" value="{{$Pegawais->alamat}}">
                            </div>
                            <div class="form-group">
                                <label>Departemen</label>
                                <select class="form-control" name="departemen">
                                    <option value="{{$Pegawais->kode_departemen}}" readonly="">-- select --</option>
                                    @foreach($Departemens as $depa)
                                    <option value="{{$depa->kode_departemen}}">{{$depa->nama_departemen}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Gaji</label>
                                <input type="text" name="gaji" class="form-control" value="{{$Pegawais->gaji}}">
                            </div>
        </div>
        <div class="card-footer">
                    <div>
                        <button class="btn btn-success" type="submit">Update</button>
                        <a class="btn btn-danger" href="/data">Cancel</a>

                    </div>
                </div>
        </form>
 	</div>
 </div>
@endsection