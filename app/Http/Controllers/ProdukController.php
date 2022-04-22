<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Produk;
use File;
use Image;
class ProdukController extends Controller
{
    public function index(){
        $batas = 4;
        $produk = Produk::orderBy('id','desc')->paginate($batas);
        $no = $batas * ($produk->currentPage() - 1);
        return view('admin.produk.index', compact('produk', 'no'));
     }
     public function create(){
         $produk = Produk::all();
         return view('admin.produk.create', compact('produk'));
     }
     public function store(Request $request){
         $this->validate($request,[
             'nama_produk'=>'required',
             'keterangan'=>'required',
             'foto'=>'required|image|mimes:jpeg,jpg,png'
         ]);
         $produk = new Produk;
         $produk->nama_produk = $request->nama_produk;
         $produk->keterangan = $request->keterangan;
         $foto = $request->foto;
         $namafile = time().'.'.$foto->getClientOriginalExtension();
 
         Image::make($foto)->resize(1000,950)->save('thumb/'.$namafile);
         $foto->move('images/', $namafile);
 
         $produk->foto = $namafile;
         $produk->save();
         return redirect('/produk')->with('pesan','Foto Berhasil Disimpan');
     }
     public function edit($id){
         $produk = Produk::find($id);
         return view('admin.produk.edit', compact('produk'));
     }
     public function update(Request $request, $id){
         $produk = Produk::find($id);
         if ($request->has('foto')){
             $produk->nama_produk = $request->nama_produk;
             $produk->keterangan = $request->keterangan;
             $foto = $request->foto;
             $namafile = time().'.'.$foto->getClientOriginalExtension();
 
             Image::make($foto)->resize(1000,950)->save('thumb/'.$namafile);
             $foto->move('images/',$namafile);
 
             $produk->foto = $namafile;
         }
         else{
             $produk->nama_produk = $request->nama_produk;
             $produk->keterangan       = $request->keterangan;
         }
         $produk->update();
         return redirect('/produk')->with('pesan','Data berhasil di update');
     }
     public function destroy($id){
         $produk = Produk::find($id);
         $namafile = $produk->foto;
         File::delete('images/'.$namafile);
         File::delete('thumb/'.$namafile);
         $produk->delete();
         return redirect('/produk')->with('pesan','Foto Berhasil Di Hapus');
     }
}
