<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\ProdukBrandingDesign;
use File;
use Image;

class ProdukBrandingDesignController extends Controller
{
    public function index(){
        $batas = 4;
        $produkbrandingdesign = ProdukBrandingDesign::orderBy('id','desc')->paginate($batas);
        $no = $batas * ($produkbrandingdesign->currentPage() - 1);
        return view('admin.produk_brandingdesign.index', compact('produkbrandingdesign', 'no'));
     }
     public function create(){
         $produkbrandingdesign = ProdukBrandingDesign::all();
         return view('admin.produk_brandingdesign.create', compact('produkbrandingdesign'));
     }
     public function store(Request $request){
         $this->validate($request,[
             'nama_produk_brandingdesign'=>'required',
             'keterangan'=>'required',
             'foto'=>'required|image|mimes:jpeg,jpg,png'
         ]);
         $produkbrandingdesign = new ProdukBrandingDesign;
         $produkbrandingdesign->nama_produk_brandingdesign = $request->nama_produk_brandingdesign;
         $produkbrandingdesign->keterangan = $request->keterangan;
         $foto = $request->foto;
         $namafile = time().'.'.$foto->getClientOriginalExtension();
 
         Image::make($foto)->resize(1000,950)->save('thumb/'.$namafile);
         $foto->move('images/', $namafile);
 
         $produkbrandingdesign->foto = $namafile;
         $produkbrandingdesign->save();
         return redirect('/produkbrandingdesign')->with('pesan','Foto Berhasil Disimpan');
     }
     public function edit($id){
         $produkbrandingdesign = ProdukBrandingDesign::find($id);
         return view('admin.produk_brandingdesign.edit', compact('produkbrandingdesign'));
     }
     public function update(Request $request, $id){
         $produkbrandingdesign = ProdukBrandingDesign::find($id);
         if ($request->has('foto')){
             $produkbrandingdesign->nama_produk_brandingdesign = $request->nama_produk_brandingdesign;
             $produkbrandingdesign->keterangan = $request->keterangan;
             $foto = $request->foto;
             $namafile = time().'.'.$foto->getClientOriginalExtension();
 
             Image::make($foto)->resize(1000,950)->save('thumb/'.$namafile);
             $foto->move('images/',$namafile);
 
             $produkbrandingdesign->foto = $namafile;
         }
         else{
             $produkbrandingdesign->nama_produk_brandingdesign = $request->nama_produk_brandingdesign;
             $produkbrandingdesign->keterangan       = $request->keterangan;
         }
         $produkbrandingdesign->update();
         return redirect('/produkbrandingdesign')->with('pesan','Data berhasil di update');
     }
     public function destroy($id){
         $produkbrandingdesign = ProdukBrandingDesign::find($id);
         $namafile = $produkbrandingdesign->foto;
         File::delete('images/'.$namafile);
         File::delete('thumb/'.$namafile);
         $produkbrandingdesign->delete();
         return redirect('/produkbrandingdesign')->with('pesan','Foto Berhasil Di Hapus');
     }
}
