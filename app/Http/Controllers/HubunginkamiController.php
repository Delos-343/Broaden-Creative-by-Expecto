<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\hubunginkami;
use App\Mail\SendEmailGenb;
use Illuminate\Support\Facades\Mail;
class HubunginkamiController extends Controller
{
    public function index(){
        $batas = 4;
        $hubunginkami = Hubunginkami::orderBy('id','desc')->paginate($batas);
        $no = $batas * ($hubunginkami->currentPage() - 1);
        return view('admin.saran.index', compact('hubunginkami', 'no'));
     }
    public function utama()
    {
        return view('index');
    }
    public function create(array $data){
        $hubunginkami = Hubunginkami::create([
            'nama' => $data['nama'],
            'email' => $data['email'],
            'nomor_telp' => $data['nomor_telp'],
            'pesan' => $data['pesan'],
        ]);

        Mail::to($hubunginkami->email)->send(new SendMail($hubunginkami->nama));
        return $hubunginkami;
    }
    public function store(Request $request){
        $hubunginkami = new Hubunginkami;
        $hubunginkami->nama     = $request->nama;
        $hubunginkami->email    = $request->email;
        $hubunginkami->nomor_telp = $request->nomor_telp;
        $hubunginkami->pesan    = $request->pesan;
        $hubunginkami->save();
        return redirect('/');

    }
    
    public function search(Request $request){
        $batas = 5;
        $cari = $request->kata;
        $data_saran = Hubunginkami::where('nama','like',"%".$cari."%") -> paginate($batas);
        $no = $batas * ($data_saran->currentPage() - 1);
        return view('saran.search', compact('data_saran','no','cari'));
    }
    public function destroy($id){
        $hubunginkami = Hubunginkami::find($id);
        $hubunginkami->delete();
        return redirect('index');
    }
}
