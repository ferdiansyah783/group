<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        $nama='ferdi';
        $pelajaran=['algoritma & dll','kalkukus','pemograman web'];
        return view('biodata',['nama'=>$nama,'maktul'=>$pelajaran]);
    }
}
