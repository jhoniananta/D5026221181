<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = DB::table('mahasiswa')->paginate();
        return view('indexMahasiswa',['mahasiswa' => $mahasiswa]);
    }
    public function edit($id){
        // mengambil data harddisk berdasarkan id yang dipilih
        $mahasiswa = DB::table('mahasiswa')
                    ->where('NRP', $id) 
                    ->get();

        // passing data mahasiswa yang didapat ke view editMahasiswa.blade.php
        return view('editMahasiswa', ['mahasiswa' => $mahasiswa]);
    }

    public function update(Request $request){

        DB::table('mahasiswa')->where('NRP', $request->id) -> update([
            'NRP' => $request->NRP,
            'Nama' => $request->Nama,
            'Jurusan' => $request->Jurusan,
            'IPK'=>$request->IPK
        ]);
        //alihkan halaman ke halaman mahasiswa
        return redirect('/mahasiswa');
    }

    public function view($id){
        // mengambil data mahasiswa berdasarkan NRP yang dipilih
        $mahasiswa = DB::table('mahasiswa')
                    ->where('NRP', $id) 
                    ->get();

        // passing data mahasiswa yang didapat ke viewMahasiswa.blade.php
        return view('viewMahasiswa', ['mahasiswa' => $mahasiswa]);
    }   
}
