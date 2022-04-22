<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Feedback;
class FeedbackController extends Controller
{
    public function index(){
        $batas = 4;
        $feedback = Feedback::orderBy('id','desc')->paginate($batas);
        $no = $batas * ($feedback->currentPage() - 1);
        return view('admin.feedback.index', compact('feedback', 'no'));
     }
     public function create(){
         return view('admin.feedback.create');
     }
     public function store(Request $request){
         $feedback = new Feedback;
         $feedback->nama        = $request->nama;
         $feedback->keterangan  = $request->keterangan;
         $feedback->save();
         return redirect('/feedback');
     }
     public function edit($id){
         $feedback = Feedback::find($id);
         return view('admin.feedback.edit', compact('feedback'));
     }
     public function update(Request $request, $id){
         $feedback = Feedback::find($id);
         $feedback->nama        = $request->nama;
         $feedback->keterangan  = $request->keterangan;
         $feedback->update();
         return redirect('/feedback');
     }
     public function destroy($id){
         $feedback = Feedback::find($id);
         $feedback->delete();
         return redirect('/feedback');
     }

}
