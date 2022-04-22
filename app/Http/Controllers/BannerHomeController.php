<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\BannerHome;
use DataTables;
use File;
use Image;

class BannerHomeController extends Controller
{
    public function index(){
        $batas = 4;
        $bannerhome = BannerHome::orderBy('id','desc')->paginate($batas);
        $no = $batas * ($bannerhome->currentPage() - 1);
        return view('admin.banner_home.index', compact('bannerhome', 'no'));
     }
     public function create(){
        $bannerhome = BannerHome::all();
        return view('admin.banner_home.create', compact('bannerhome'));
    }
    public function store(Request $request){
        $this->validate($request,[
            'judul_banner'=>'required',
            'foto'=>'required|image|mimes:jpeg,jpg,png'
        ]);
        $bannerhome = new BannerHome;
        $bannerhome->judul_banner = $request->judul_banner;
        $foto = $request->foto;
        $namafile = time().'.'.$foto->getClientOriginalExtension();

        Image::make($foto)->resize(5000,4200)->save('thumb/'.$namafile);
        $foto->move('images/', $namafile);

        $bannerhome->foto = $namafile;
        $bannerhome->save();
        return redirect('/bannerhome')->with('pesan','Foto Berhasil Disimpan');
    }
    public function edit($id){
        $bannerhome = BannerHome::find($id);
        return view('admin.banner_home.edit', compact('bannerhome'));
    }
    public function update(Request $request, $id){
        $bannerhome = BannerHome::find($id);
        if ($request->has('foto')){
            $bannerhome->judul_banner = $request->judul_banner;
            $foto = $request->foto;
            $namafile = time().'.'.$foto->getClientOriginalExtension();

            Image::make($foto)->resize(5000,4200)->save('thumb/'.$namafile);
            $foto->move('images/',$namafile);

            $bannerhome->foto = $namafile;
        }
        else{
            $bannerhome->judul_banner = $request->judul_banner;
        }
        $bannerhome->update();
        return redirect('/bannerhome')->with('pesan','Data berhasil di update');
    }
    public function destroy($id){
        $bannerhome = BannerHome::find($id);
        $namafile = $bannerhome->foto;
        File::delete('images/'.$namafile);
        File::delete('thumb/'.$namafile);
        $bannerhome->delete();
        return redirect('/bannerhome')->with('pesan','Foto Berhasil Di Hapus');
    }
}
