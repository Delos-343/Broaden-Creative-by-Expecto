<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Tentang;
use File;
use Image;

class TentangController extends Controller
{
    public function index(){
        $batas = 4;
        $tentang = Tentang::orderBy('id','desc')->paginate($batas);
        $no = $batas * ($tentang->currentPage() - 1);
        return view('admin.tentang.index', compact('tentang', 'no'));
     }
     public function create(){
         $tentang = Tentang::all();
         return view('admin.tentang.create', compact('tentang'));
     }
     public function store(Request $request){
         $this->validate($request,[
             'deskripsi'=>'required',
             'foto'=>'required|image|mimes:jpeg,jpg,png'
         ]);
         $tentang = new Tentang;
         $tentang->deskripsi = $request->deskripsi;
         $foto = $request->foto;
         $namafile = time().'.'.$foto->getClientOriginalExtension();
 
         Image::make($foto)->resize(1000,950)->save('thumb/'.$namafile);
         $foto->move('images/', $namafile);
 
         $tentang->foto = $namafile;
         $tentang->save();
         return redirect('/tentang')->with('pesan','Data Berhasil Disimpan');
     }
     public function edit($id){
         $tentang = Tentang::find($id);
         return view('admin.tentang.edit', compact('tentang'));
     }
     public function update(Request $request, $id){
         $tentang = Tentang::find($id);
         if ($request->has('foto')){
             $tentang->deskripsi = $request->deskripsi;
             $foto = $request->foto;
             $namafile = time().'.'.$foto->getClientOriginalExtension();
 
             Image::make($foto)->resize(1000,950)->save('thumb/'.$namafile);
             $foto->move('images/',$namafile);
 
             $tentang->foto = $namafile;
         }
         else{
             $tentang->deskripsi = $request->deskripsi;
         }
         $tentang->update();
         return redirect('/tentang')->with('pesan','Data berhasil di update');
     }
     public function destroy($id){
         $tentang = Tentang::find($id);
         $namafile = $tentang->foto;
         File::delete('images/'.$namafile);
         File::delete('thumb/'.$namafile);
         $tentang->delete();
         return redirect('/tentang')->with('pesan','Data Berhasil Di Hapus');
     }
}
