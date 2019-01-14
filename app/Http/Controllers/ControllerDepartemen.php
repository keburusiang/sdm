<?php

namespace App\Http\Controllers;

use App\Pegawai;
use App\Departemen;
use Illuminate\Http\Request;

class ControllerDepartemen extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Departemens = Departemen::all();
       // $Departemens = Departemen::all();
        return view('departemen', compact('Departemens'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
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
        $Departemens = new Departemen();
        $Departemens->save();
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
        $Departemens = Departemen::where('kode_departemen',$id)->first();
        $Departemens->save();
        return redirect('/datadepartemen');
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
        $delete = Departemen::where('kode_departemen',$id)->first();
        $delete -> delete();
        return redirect("/datadepartemen");
    }
}
