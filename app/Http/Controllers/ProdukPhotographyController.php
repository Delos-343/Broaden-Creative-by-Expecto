<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\ProdukPhotography;
use File;
use Image;

class ProdukPhotographyController extends Controller
{
    public function index(){
        $batas = 4;
        $produkphotography = ProdukPhotography::orderBy('id','desc')->paginate($batas);
        $no = $batas * ($produkphotography->currentPage() - 1);
        return view('admin.produk_photography.index', compact('produkphotography', 'no'));
     }
     public function create(){
         $produkphotography = ProdukPhotography::all();
         return view('admin.produk_photography.create', compact('produkphotography'));
     }
     public function store(Request $request){
         $this->validate($request,[
             'nama_produk_photography'=>'required',
             'keterangan'=>'required',
             'foto'=>'required|image|mimes:jpeg,jpg,png'
         ]);
         $produkphotography = new ProdukPhotography;
         $produkphotography->nama_produk_photography = $request->nama_produk_photography;
         $produkphotography->keterangan = $request->keterangan;
         $foto = $request->foto;
         $namafile = time().'.'.$foto->getClientOriginalExtension();
 
         Image::make($foto)->resize(1000,950)->save('thumb/'.$namafile);
         $foto->move('images/', $namafile);
 
         $produkphotography->foto = $namafile;
         $produkphotography->save();
         return redirect('/produkphotography')->with('pesan','Foto Berhasil Disimpan');
     }
     public function edit($id){
         $produkphotography= ProdukPhotography::find($id);
         return view('admin.produk_photography.edit', compact('produkphotography'));
     }
     public function update(Request $request, $id){
         $produkphotography = ProdukPhotography::find($id);
         if ($request->has('foto')){
             $produkphotography->nama_produk_photography = $request->nama_produk_photography;
             $produkphotography->keterangan = $request->keterangan;
             $foto = $request->foto;
             $namafile = time().'.'.$foto->getClientOriginalExtension();
 
             Image::make($foto)->resize(1000,950)->save('thumb/'.$namafile);
             $foto->move('images/',$namafile);
 
             $produkphotography->foto = $namafile;
         }
         else{
             $produkphotography->nama_produk_photography = $request->nama_produk_photography;
             $produkphotography->keterangan       = $request->keterangan;
         }
         $produkphotography->update();
         return redirect('/produkphotography')->with('pesan','Data berhasil di update');
     }
     public function destroy($id){
         $produkphotography = ProdukPhotography::find($id);
         $namafile = $produkphotography->foto;
         File::delete('images/'.$namafile);
         File::delete('thumb/'.$namafile);
         $produkphotography->delete();
         return redirect('/produkphotography')->with('pesan','Foto Berhasil Di Hapus');
     }
}
