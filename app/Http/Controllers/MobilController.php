<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; //harus ada di Laravel 8
use Illuminate\Support\Facades\DB;

class MobilController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
        $mobil = DB::table('mobil')->paginate(10);

       // $pegawai = DB::table('pegawai')->get() ;

    	// mengirim data pegawai ke view index
    	return view('mobil.mobil',['mobil' => $mobil]);

    }

    // method untuk menampilkan view form tambah pegawai
	public function tambah()
	{

		// memanggil view tambah
		return view('mobil.tambah');

	}

// method untuk insert data ke table pegawai
public function store(Request $request)
{
	// insert data ke table pegawai
	DB::table('mobil')->insert([
		'kodemobil'=> $request->kodemobil,
		'merkmobil' => $request->merkmobil,
		'stockmobil' => $request->stockmobil,
		'tersedia' => $request->tersedia
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/mobil');

}

// update data pegawai
public function update(Request $request)
{
	// update data pegawai
	DB::table('mobil')->where('kodemobil',$request->id)->update([
		'kodemobil'=> $request->kodemobil,
		'merkmobil' => $request->merkmobil,
		'stockmobil' => $request->stockmobil,
		'tersedia' => $request->tersedia
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/mobil');
}
// method untuk edit data pegawai
public function edit($id)
{
	// mengambil data pegawai berdasarkan id yang dipilih
	$mobil = DB::table('mobil')->where('kodemobil',$id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('mobil.edit',['mobil' => $mobil]);

}

// method untuk hapus data pegawai
public function hapus($id)
{
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('mobil')->where('kodemobil',$id)->delete();

	// alihkan halaman ke halaman pegawai
	return redirect('/mobil');
}

public function cari(Request $request)
{
    // menangkap data pencarian
    $cari = $request->cari;

        // mengambil data dari table pegawai sesuai pencarian data
    $mobil = DB::table('mobil')
    ->where('merkmobil','like',"%".$cari."%")
    ->paginate();

        // mengirim data pegawai ke view index
    return view('mobil.mobil',['mobil' => $mobil]);

}
}
