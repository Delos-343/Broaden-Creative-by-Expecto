<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Klien;
use DataTables;
use File;
use Image;

class KlienController extends Controller
{
    public function index(){
        $batas = 4;
        $klien = Klien::orderBy('id','desc')->paginate($batas);
        $no = $batas * ($klien->currentPage() - 1);
        return view('admin.klien.index', compact('klien', 'no'));
     }
     public function json(){
         return Datatables::of(Klien::all())->make(true);
     }
     public function create(){
         $klien = Klien::all();
         return view('admin.klien.create', compact('klien'));
     }
     public function store(Request $request){
         $this->validate($request,[
             
             'keterangan'=>'required',
             'foto'=>'required|image|mimes:jpeg,jpg,png'
         ]);
         $klien = new Klien;
         $klien->keterangan = $request->keterangan;
         $foto = $request->foto;
         $namafile = time().'.'.$foto->getClientOriginalExtension();
 
         Image::make($foto)->resize(1000,900)->save('thumb/'.$namafile);
         $foto->move('images/', $namafile);
 
         $klien->foto = $namafile;
         $klien->save();
         return redirect('/klien')->with('pesan','Data Berhasil Disimpan');
     }
     public function edit($id){
         $klien = Klien::find($id);
         return view('admin.klien.edit', compact('klien'));
     }
     public function update(Request $request, $id){
         $klien = klien::find($id);
         if ($request->has('foto')){
             $klien->keterangan = $request->keterangan;
             $foto = $request->foto;
             $namafile = time().'.'.$foto->getClientOriginalExtension();
 
             Image::make($foto)->resize(1000,900)->save('thumb/'.$namafile);
             $foto->move('images/',$namafile);
 
             $klien->foto = $namafile;
         }
         else{
             
             $klien->keterangan       = $request->keterangan;
         }
         $klien->update();
         return redirect('/klien')->with('pesan','Data berhasil di update');
     }
     public function search(Request $request){
         $batas = 5;
         $cari = $request->kata;
         $data_portofolio = Portofolio::where('');
     }
     public function destroy($id){
         $klien = Klien::find($id);
         $namafile = $klien->foto;
         File::delete('images/'.$namafile);
         File::delete('thumb/'.$namafile);
         $klien->delete();
         return redirect('/klien')->with('pesan','Data Berhasil Di Hapus');
     }
}
