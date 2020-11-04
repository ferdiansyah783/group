<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    public function index()
    {
        // menampilkan data dari database
        $pegawai= DB::table('pegawai')->paginate(10);
        // alihkan data
        return view('index',['pegawai'=>$pegawai]);
    }

    public function tambah()
    {
        return view('tambah');
    }

    public function store(Request $request)
    {
        // insert data
        DB::table('pegawai')->insert([
            'pegawai_nama'=>$request->nama,
            'pegawai_jabatan'=>$request->jabatan,
            'pegawai_umur'=>$request->umur,
            'pegawai_alamat'=>$request->alamat
        ]);
        // alihkan halman ke halaman pegawai
        return redirect('/pegawai');
    }

    public function edit($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $pegawai=DB::table('pegawai')->where('pegawai_id',$id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('edit',['pegawai'=>$pegawai]);
    }

    public function update(Request $request)
    {
        // update data pegawai
        DB::table('pegawai')->where('pegawai_id',$request->id)->update([
            'pegawai_nama' => $request->nama,
            'pegawai_jabatan' => $request->jabatan,
            'pegawai_umur' => $request->umur,
            'pegawai_alamat' => $request->alamat
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/pegawai');
    }

    public function hapus($id)
    {
        // menghapus data pegawai yang dipilih
        DB::table('pegawai')->where('pegawai_id',$id)->delete();
        // alihkan halaman ke halaman pegawai
        return redirect('/pegawai');
    }

    public function formulir()
    {
        return view('formulir');
    }

    public function proses(Request $request)
    {
        $nama=$request->input('nama');
        $password=$request->input('password');
        return "nama: ".$nama.",password: ".$password;
    }
}
