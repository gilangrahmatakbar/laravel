<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
    	return view('register');
    }
    public function welcome1(){
    	return view('welcome1');
    }
    public function welcome11(Request $request){
    	$namaAw = $request["awal"];
    	$namaAkh = $request["akhir"];
    	$nama = $namaAw . " ". $namaAkh;

    	return view('welcome1',['nama'=> $nama]);
    }

}
