<?php

namespace App\Http\Controllers;

use App\Pegawai;
use App\Departemen;
use Illuminate\Http\Request;

class ControllerPegawai extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Pegawais = Pegawai::all();
       // $Departemens = Departemen::all();
        return view('index', compact('Pegawais'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Pegawais = Pegawai::all();
        $Departemens = Departemen::all();
        return view('create' , compact('Pegawais','Departemens'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*
        $Pegawais->supervisor = $request->supervisor;
        $Pegawais->departemen = $request->departemen;
        */
        $Pegawais = new Pegawai();
        $Pegawais->nama_depan = $request->nama_depan;
        $Pegawais->nama_belakang = $request->nama_belakang;
        $Pegawais->tanggal_lahir = $request->tanggal_lahir;
        $Pegawais->jenis_kelamin = $request->jenis_kelamin;
        $Pegawais->alamat = $request->alamat;
        $Pegawais->supervisor = $request->supervisor;
        $Pegawais->departemen= $request->departemen;
        $Pegawais->gaji = $request->gaji;
        $Pegawais->save();
        return redirect('/data');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $Pegawais = Pegawai::where('id_pegawai', $id)->first();
        $Departemens = Departemen::all();
        return view('edit',compact('Pegawais','Departemens'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        /*
        $Pegawais->supervisor = $request->supervisor;
        $Pegawais->departemen = $request->departemen;
        */
        $Pegawais = Pegawai::where('id_pegawai',$id)->first();
        $Pegawais->nama_depan = $request->nama_depan;
        $Pegawais->nama_belakang = $request->nama_belakang;
        $Pegawais->tanggal_lahir = $request->tanggal_lahir;
        $Pegawais->jenis_kelamin = $request->jenis_kelamin;
        $Pegawais->supervisor = $request->supervisor;
        $Pegawais->departemen = $request->departemen;
        $Pegawais->alamat = $request->alamat;
        $Pegawais->gaji = $request->gaji;
        $Pegawais->save();
        return redirect('/data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $delete = Pegawai::where('id_pegawai',$id)->first();
        $delete -> delete();
        return redirect("/data");
    }
}
