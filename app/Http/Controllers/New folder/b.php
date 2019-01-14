<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Pelapor;
class PelaporsController extends Controller
{
    public function register(Request $request){
        return view('auth/register');
    }



    public function registerPost(Request $request){
        $user = Auth::User();
        $this->validate($request, [
            'namaDpn' => 'required|min:4',
            'namaBlk' => 'required|min:4',
            'tanggalLhr' => 'required',
            'notelepon' => 'required',
            'email' => 'required|min:4|email|unique:pelapors',
            'password' => 'required',
            'confirmation' => 'required|same:password',
        ]);
        $dataUser = new User();
        $data =  new Pelapor();
        $data->nama_depan = $request->namaDpn;
        $data->nama_belakang = $request->namaBlk;
        $data->email = $request->email;
        $data->notelepon = $request->notelepon;
        $data -> user_id = $user->id;
        $data->tanggallahir = $request->tanggalLhr;
        $dataUser->username = $request->username;
        $dataUser->password = bcrypt($request->password);
        $data->save();
        $dataUser->save();
        return redirect('auth/login')->with('alert-success','Kamu berhasil Register');
    }
}
