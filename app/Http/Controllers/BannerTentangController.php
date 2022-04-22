<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\BannerTentang;
use DataTables;
use File;
use Image;
class BannerTentangController extends Controller
{
    public function index(){
        $batas = 4;
        $bannertentang = BannerTentang::orderBy('id','desc')->paginate($batas);
        $no = $batas * ($bannertentang->currentPage() - 1);
        return view('admin.banner_tentang.index', compact('bannertentang', 'no'));
     }
     public function create(){
        $bannertentang = BannerTentang::all();
        return view('admin.banner_tentang.create', compact('bannertentang'));
    }
    public function store(Request $request){
        $this->validate($request,[
            'judul_banner_tentang'=>'required',
            'foto'=>'required|image|mimes:jpeg,jpg,png'
        ]);
        $bannertentang = new BannerTentang;
        $bannertentang->judul_banner_tentang = $request->judul_banner_tentang;
        $foto = $request->foto;
        $namafile = time().'.'.$foto->getClientOriginalExtension();

        Image::make($foto)->resize(5000,4200)->save('thumb/'.$namafile);
        $foto->move('images/', $namafile);

        $bannertentang->foto = $namafile;
        $bannertentang->save();
        return redirect('/bannertentang')->with('pesan','Foto Berhasil Disimpan');
    }
    public function edit($id){
        $bannertentang = BannerTentang::find($id);
        return view('admin.banner_tentang.edit', compact('bannertentang'));
    }
    public function update(Request $request, $id){
        $bannertentang = BannerTentang::find($id);
        if ($request->has('foto')){
            $bannertentang->judul_banner_tentang = $request->judul_banner_tentang;
            $foto = $request->foto;
            $namafile = time().'.'.$foto->getClientOriginalExtension();

            Image::make($foto)->resize(5000,4200)->save('thumb/'.$namafile);
            $foto->move('images/',$namafile);

            $bannertentang->foto = $namafile;
        }
        else{
            $bannertentang->judul_banner_tentang = $request->judul_banner_tentang;
        }
        $bannertentang->update();
        return redirect('/bannertentang')->with('pesan','Data berhasil di update');
    }
    public function destroy($id){
        $bannertentang = BannerTentang::find($id);
        $namafile = $bannertentang->foto;
        File::delete('images/'.$namafile);
        File::delete('thumb/'.$namafile);
        $bannertentang->delete();
        return redirect('/bannertentang')->with('pesan','Foto Berhasil Di Hapus');
    }
}
