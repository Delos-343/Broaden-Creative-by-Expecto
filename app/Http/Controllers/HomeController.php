<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\hubunginkami;
class HomeController extends Controller
{
    public function index(){
        return view('admin.home');
    }
    
}
