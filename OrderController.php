<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function tabel_pesan(){
        return view('pemesanan');
    }

    public function formulir_proses(Request $request){
        //$token = $request->session()->token();
        //echo $token;

        $makanan = $request->input('makanan');
        $minuman = $request->input('minuman');

        return view('orderan',["makan"=>$makanan,"minum"=>$minuman]);
    }
}
