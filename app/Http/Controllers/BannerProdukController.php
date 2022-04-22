<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\BannerProduk;
use DataTables;
use File;
use Image;
class BannerProdukController extends Controller
{
    public function index(){
        $batas = 4;
        $bannerproduk = BannerProduk::orderBy('id','desc')->paginate($batas);
        $no = $batas * ($bannerproduk->currentPage() - 1);
        return view('admin.banner_produk.index', compact('bannerproduk', 'no'));
     }
     public function create(){
        $bannerproduk = BannerProduk::all();
        return view('admin.banner_produk.create', compact('bannerproduk'));
    }
    public function store(Request $request){
        $this->validate($request,[
            'judul_banner_produk'=>'required',
            'foto'=>'required|image|mimes:jpeg,jpg,png'
        ]);
        $bannerproduk = new BannerProduk;
        $bannerproduk->judul_banner_produk = $request->judul_banner_produk;
        $foto = $request->foto;
        $namafile = time().'.'.$foto->getClientOriginalExtension();

        Image::make($foto)->resize(5000,4200)->save('thumb/'.$namafile);
        $foto->move('images/', $namafile);

        $bannerproduk->foto = $namafile;
        $bannerproduk->save();
        return redirect('/bannerproduk')->with('pesan','Foto Berhasil Disimpan');
    }
    public function edit($id){
        $bannerproduk = BannerProduk::find($id);
        return view('admin.banner_produk.edit', compact('bannerproduk'));
    }
    public function update(Request $request, $id){
        $bannerproduk = BannerProduk::find($id);
        if ($request->has('foto')){
            $bannerproduk->judul_banner_produk = $request->judul_banner_produk;
            $foto = $request->foto;
            $namafile = time().'.'.$foto->getClientOriginalExtension();

            Image::make($foto)->resize(5000,4200)->save('thumb/'.$namafile);
            $foto->move('images/',$namafile);

            $bannerproduk->foto = $namafile;
        }
        else{
            $bannerproduk->judul_banner_produk = $request->judul_banner_produk;
        }
        $bannerproduk->update();
        return redirect('/bannerproduk')->with('pesan','Data berhasil di update');
    }
    public function destroy($id){
        $bannerproduk = BannerProduk::find($id);
        $namafile = $bannerproduk->foto;
        File::delete('images/'.$namafile);
        File::delete('thumb/'.$namafile);
        $bannerproduk->delete();
        return redirect('/bannerproduk')->with('pesan','Foto Berhasil Di Hapus');
    }
}
