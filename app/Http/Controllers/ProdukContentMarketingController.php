<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\ProdukKontenMarketing;
use File;
use Image;

class ProdukContentMarketingController extends Controller
{
    public function index(){
        $batas = 4;
        $produkkontenmarketing = ProdukKontenMarketing::orderBy('id','desc')->paginate($batas);
        $no = $batas * ($produkkontenmarketing->currentPage() - 1);
        return view('admin.produk_contentmarketing.index', compact('produkkontenmarketing', 'no'));
     }
     public function create(){
         $produkkontenmarketing = ProdukKontenMarketing::all();
         return view('admin.produk_contentmarketing.create', compact('produkkontenmarketing'));
     }
     public function store(Request $request){
         $this->validate($request,[
             'nama_produk_contentmarketing'=>'required',
             'keterangan'=>'required',
             'foto'=>'required|image|mimes:jpeg,jpg,png'
         ]);
         $produkkontenmarketing = new ProdukKontenMarketing;
         $produkkontenmarketing->nama_produk_contentmarketing = $request->nama_produk_contentmarketing;
         $produkkontenmarketing->keterangan = $request->keterangan;
         $foto = $request->foto;
         $namafile = time().'.'.$foto->getClientOriginalExtension();
 
         Image::make($foto)->resize(1000,950)->save('thumb/'.$namafile);
         $foto->move('images/', $namafile);
 
         $produkkontenmarketing->foto = $namafile;
         $produkkontenmarketing->save();
         return redirect('/produkcontentmarketing')->with('pesan','Foto Berhasil Disimpan');
     }
     public function edit($id){
         $produkkontenmarketing = ProdukKontenMarketing::find($id);
         return view('admin.produk_contentmarketing.edit', compact('produkkontenmarketing'));
     }
     public function update(Request $request, $id){
         $produkkontenmarketing = ProdukKontenMarketing::find($id);
         if ($request->has('foto')){
             $produkkontenmarketing->nama_produk_contentmarketing = $request->nama_produk_contentmarketing;
             $produkkontenmarketing->keterangan = $request->keterangan;
             $foto = $request->foto;
             $namafile = time().'.'.$foto->getClientOriginalExtension();
 
             Image::make($foto)->resize(1000,950)->save('thumb/'.$namafile);
             $foto->move('images/',$namafile);
 
             $produkkontenmarketing->foto = $namafile;
         }
         else{
             $produkkontenmarketing->nama_produk_contentmarketing = $request->nama_produk_contentmarketing;
             $produkkontenmarketing->keterangan       = $request->keterangan;
         }
         $produkkontenmarketing->update();
         return redirect('/produkcontentmarketing')->with('pesan','Data berhasil di update');
     }
     public function destroy($id){
         $produkkontenmarketing = Produk::find($id);
         $namafile = $produkkontenmarketing->foto;
         File::delete('images/'.$namafile);
         File::delete('thumb/'.$namafile);
         $produkkontenmarketing->delete();
         return redirect('/produkcontentmarketing')->with('pesan','Foto Berhasil Di Hapus');
     }
}
