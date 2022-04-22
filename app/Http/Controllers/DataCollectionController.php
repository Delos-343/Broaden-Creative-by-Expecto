<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Datacollection;
class DataCollectionController extends Controller
{
    public function create(){
         return view('datacollection');
     }
    
    public function store(Request $request){
        $datacollection = new Datacollection;
        $datacollection->namalengkap = $request->namalengkap;
        $datacollection->tgllahir  = $request->tgllahir;
        $datacollection->email  = $request->email;
        $datacollection->nomortelp  = $request->nomortelp;
        $datacollection->jeniskelamin  = $request->jeniskelamin;
        $datacollection->provinsi  = $request->provinsi;
        $datacollection->kotakabupaten  = $request->kotakabupaten;
        $datacollection->kecamatan  = $request->kecamatan;
        $datacollection->kelurahan  = $request->kelurahan;
        $datacollection->pekerjaan  = $request->pekerjaan;
        $datacollection->sosialmedia  = $request->sosialmedia;
        $datacollection->pengeluaranperbulan  = $request->pengeluaranperbulan;
        $datacollection->save();
        return view('datacollection');
    }
}
