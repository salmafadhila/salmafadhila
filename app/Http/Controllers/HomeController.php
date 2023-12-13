<?php

namespace App\Http\Controllers;

use App\Models\mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
     public function home(){
        return view('welcome');
    }
    public function About(){
        return'About Us';
    }
    public function contact(){
        return('Nama : Salma Fadhila <br> Nim : D212011028 <br> Kelas : KA7B <br> Email : salmagm015@gmail.com');
    }

public function index()
{
    $data = DB::table('mahasiswas')->get();
    return view("mahasiswa.index")->with('data', $data);

}

}