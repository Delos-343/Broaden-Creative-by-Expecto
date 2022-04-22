<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\BannerPortofolio;
use DataTables;
use File;
use Image;

class BannerPortofolioController extends Controller
{
    public function index(){
        $batas = 4;
        $bannerportofolio = BannerPortofolio::orderBy('id','desc')->paginate($batas);
        $no = $batas * ($bannerportofolio->currentPage() - 1);
        return view('admin.banner_portofolio.index', compact('bannerportofolio', 'no'));
     }
     public function create(){
        $bannerportofolio = BannerPortofolio::all();
        return view('admin.banner_portofolio.create', compact('bannerportofolio'));
    }
    public function store(Request $request){
        $this->validate($request,[
            'judul_banner_portofolio'=>'required',
            'foto'=>'required|image|mimes:jpeg,jpg,png'
        ]);
        $bannerportofolio = new BannerPortofolio;
        $bannerportofolio->judul_banner_portofolio = $request->judul_banner_portofolio;
        $foto = $request->foto;
        $namafile = time().'.'.$foto->getClientOriginalExtension();

        Image::make($foto)->resize(5000,4200)->save('thumb/'.$namafile);
        $foto->move('images/', $namafile);

        $bannerportofolio->foto = $namafile;
        $bannerportofolio->save();
        return redirect('/bannerportofolio')->with('pesan','Foto Berhasil Disimpan');
    }
    public function edit($id){
        $bannerportofolio = BannerPortofolio::find($id);
        return view('admin.banner_portofolio.edit', compact('bannerportofolio'));
    }
    public function update(Request $request, $id){
        $bannerportofolio = BannerPortofolio::find($id);
        if ($request->has('foto')){
            $bannerportofolio->judul_banner_portofolio = $request->judul_banner_portofolio;
            $foto = $request->foto;
            $namafile = time().'.'.$foto->getClientOriginalExtension();

            Image::make($foto)->resize(5000,4200)->save('thumb/'.$namafile);
            $foto->move('images/',$namafile);

            $bannerportofolio->foto = $namafile;
        }
        else{
            $bannerportofolio->judul_banner_portofolio = $request->judul_banner_portofolio;
        }
        $bannerportofolio->update();
        return redirect('/bannerportofolio')->with('pesan','Data berhasil di update');
    }
    public function destroy($id){
        $bannerportofolio = BannerPortofolio::find($id);
        $namafile = $bannerportofolio->foto;
        File::delete('images/'.$namafile);
        File::delete('thumb/'.$namafile);
        $bannerportofolio->delete();
        return redirect('/bannerportofolio')->with('pesan','Foto Berhasil Di Hapus');
    }
}
