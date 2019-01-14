@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Anak IT -  Register</h1>
            <hr>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ url('/registerPost') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="username">Username :</label>
                    <input type="text"  class="form-control" id="username" name="username">
                </div>
                <div class="form-group">
                    <label for="namaDpn">Nama Depan :</label>
                    <input type="text"  class="form-control" id="namaDpn" name="namaDpn">
                </div>
                <div class="form-group">
                    <label for="namaBlk">Nama Belakang :</label>
                    <input type="text"  class="form-control" id="namaBlk" name="namaBlk">
                </div>
                <div class="form-group">
                    <label for="email">Email :</label>
                    <input type="text" class="form-control" id="email" name="email">
                </div>  
                <div class="form-group">
                    <label for="notelepon">Nomer Telepon :</label>
                    <input type="text" class="form-control" id="notelepon" name="notelepon">
                </div>
                <div class="form-group">
                    <label for="tanggalLhr">Tanggal Lahir :</label>
                    <input type="date"  class="form-control" id="tanggalLhr" name="tanggalLhr">
                </div>
                <div class="form-group">
                    <label for="password">Password :</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="form-group">
                    <label for="password">Password Confirmation :</label>
                    <input type="password" class="form-control" id="confirmation" name="confirmation">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection