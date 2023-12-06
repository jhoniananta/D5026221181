<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HarddiskController extends Controller
{
    public function index()
    {
        $harddisk = DB::table('harddisk')->paginate();
        return view('indexHarddisk',['harddisk' => $harddisk]);
    }
    public function tambah(){

        // memanggil view tambah
        return view('tambahHarddisk');
    }

    public function store(Request $request){
        DB::table('harddisk')-> insert([
            'merkharddisk' => $request->merkharddisk,
            'stockharddisk' => $request->stockharddisk,
            'tersedia' => $request->has('is_checked') ? 'y' : 'n'
        ]);
        return redirect('/harddisk');
    }
    
    public function edit($id){
        // mengambil data harddisk berdasarkan id yang dipilih
        $harddisk = DB::table('harddisk')
                    ->where('kodeharddisk', $id) 
                    ->get();

        // passing data harddisk yang didapat ke view edit.blade.php
        return view('editHarddisk', ['harddisk' => $harddisk]);
    }

    public function update(Request $request){

        DB::table('harddisk')->where('kodeharddisk', $request->id) -> update([
            'merkharddisk' => $request->merkharddisk,
            'stockharddisk' => $request->stockharddisk,
            'tersedia' => $request->has('is_checked') ? 'y' : 'n'
        ]);
        //alihkan halaman ke halaman harddisk
        return redirect('/harddisk');
    }

    public function hapus($id){
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('harddisk')
            ->where('kodeharddisk', $id)
            ->delete();
        // alihkan ke halaman pegawai
        return redirect('/harddisk');
    }
    
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

        // mengambil data dari table pegawai sesuai pencarian data
		$harddisk = DB::table('harddisk')
                    ->where('merkharddisk','like',"%".$cari."%")
                    ->paginate();
    		// mengirim data pegawai ke view index
		return view('indexHarddisk',['harddisk' => $harddisk]);
	}

    public function view($id){
        // mengambil data pegawai berdasarkan id yang dipilih
        $harddisk = DB::table('harddisk')
                    ->where('kodeharddisk', $id) 
                    ->get();

        // passing data pegawai yang didapat ke view edit.blade.php
        return view('viewHarddisk', ['harddisk' => $harddisk]);
    }
}
