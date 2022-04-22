<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Portofolio;
use DataTables;
use File;
use Image;

class PortofolioController extends Controller
{
public function dashboard(){
    return view('admin.home');
}
    public function index(){
       $batas = 4;
       $portofolio = Portofolio::orderBy('id','desc')->paginate($batas);
       $no = $batas * ($portofolio->currentPage() - 1);
       return view('admin.portofolio.index', compact('portofolio', 'no'));
    }
    public function json(){
        return Datatables::of(Portofolio::all())->make(true);
    }
    public function create(){
        $portofolio = Portofolio::all();
        return view('admin.portofolio.create', compact('portofolio'));
    }
    public function store(Request $request){
        $this->validate($request,[
            'judul_portofolio'=>'required',
            'keterangan'=>'required',
            'foto'=>'required|image|mimes:jpeg,jpg,png'
        ]);
        $portofolio = new Portofolio;
        $portofolio->judul_portofolio = $request->judul_portofolio;
        $portofolio->keterangan = $request->keterangan;
        $foto = $request->foto;
        $namafile = time().'.'.$foto->getClientOriginalExtension();

        Image::make($foto)->resize(1000,900)->save('thumb/'.$namafile);
        $foto->move('images/', $namafile);

        $portofolio->foto = $namafile;
        $portofolio->save();
        return redirect('/portofolio')->with('pesan','Foto Berhasil Disimpan');
    }
    public function edit($id){
        $portofolio = Portofolio::find($id);
        return view('admin.portofolio.edit', compact('portofolio'));
    }
    public function update(Request $request, $id){
        $portofolio = Portofolio::find($id);
        if ($request->has('foto')){
            $portofolio->judul_portofolio = $request->judul_portofolio;
            $portofolio->keterangan = $request->keterangan;
            $foto = $request->foto;
            $namafile = time().'.'.$foto->getClientOriginalExtension();

            Image::make($foto)->resize(1000,900)->save('thumb/'.$namafile);
            $foto->move('images/',$namafile);

            $portofolio->foto = $namafile;
        }
        else{
            $portofolio->judul_portofolio = $request->judul_portofolio;
            $portofolio->keterangan       = $request->keterangan;
        }
        $portofolio->update();
        return redirect('/portofolio')->with('pesan','Data berhasil di update');
    }
    public function search(Request $request){
        $batas = 5;
        $cari = $request->kata;
        $data_portofolio = Portofolio::where('judul_portofolio','like',"%".$cari."%")->paginate($batas);
        $no = $batas * ($data_portofolio->currentPage() - 1);
        return view('portofolio.search', compact('data_portofolio','no','cari'));
    }
    public function destroy($id){
        $portofolio = Portofolio::find($id);
        $namafile = $portofolio->foto;
        File::delete('images/'.$namafile);
        File::delete('thumb/'.$namafile);
        $portofolio->delete();
        return redirect('/portofolio')->with('pesan','Foto Berhasil Di Hapus');
    }
}
