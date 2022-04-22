<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\ProdukSosialMedia;
use File;
use Image;
class ProdukSosialMediaController extends Controller
{
    public function index(){
        $batas = 4;
        $produksosialmedia = ProdukSosialMedia::orderBy('id','desc')->paginate($batas);
        $no = $batas * ($produksosialmedia->currentPage() - 1);
        return view('admin.produk_sosialmedia.index', compact('produksosialmedia', 'no'));
     }
     public function create(){
         $produksosialmedia = ProdukSosialMedia::all();
         return view('admin.produk_sosialmedia.create', compact('produksosialmedia'));
     }
     public function store(Request $request){
         $this->validate($request,[
             'nama_produk_sosialmedia'=>'required',
             'keterangan'=>'required',
             'foto'=>'required|image|mimes:jpeg,jpg,png'
         ]);
         $produksosialmedia = new ProdukSosialMedia;
         $produksosialmedia->nama_produk_sosialmedia = $request->nama_produk_sosialmedia;
         $produksosialmedia->keterangan = $request->keterangan;
         $foto = $request->foto;
         $namafile = time().'.'.$foto->getClientOriginalExtension();
 
         Image::make($foto)->resize(1000,950)->save('thumb/'.$namafile);
         $foto->move('images/', $namafile);
 
         $produksosialmedia->foto = $namafile;
         $produksosialmedia->save();
         return redirect('/produksosialmedia')->with('pesan','Foto Berhasil Disimpan');
     }
     public function edit($id){
         $produksosialmedia = ProdukSosialMedia::find($id);
         return view('admin.produk_sosialmedia.edit', compact('produksosialmedia'));
     }
     public function update(Request $request, $id){
         $produksosialmedia = ProdukSosialMedia::find($id);
         if ($request->has('foto')){
             $produksosialmedia->nama_produk_sosialmedia = $request->nama_produk_sosialmedia;
             $produksosialmedia->keterangan = $request->keterangan;
             $foto = $request->foto;
             $namafile = time().'.'.$foto->getClientOriginalExtension();
 
             Image::make($foto)->resize(1000,950)->save('thumb/'.$namafile);
             $foto->move('images/',$namafile);
 
             $produksosialmedia->foto = $namafile;
         }
         else{
             $produksosialmedia->nama_produk_sosialmedia = $request->nama_produk_sosialmedia;
             $produksosialmedia->keterangan       = $request->keterangan;
         }
         $produksosialmedia->update();
         return redirect('/produksosialmedia')->with('pesan','Data berhasil di update');
     }
     public function destroy($id){
         $produksosialmedia = ProdukSosialMedia::find($id);
         $namafile = $produksosialmedia->foto;
         File::delete('images/'.$namafile);
         File::delete('thumb/'.$namafile);
         $produksosialmedia->delete();
         return redirect('/produksosialmedia')->with('pesan','Foto Berhasil Di Hapus');
     }
}
