<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; //harus ada di Laravel 8
use Illuminate\Support\Facades\DB;
class NilaiController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
        $nilaikuliah = DB::table('nilaikuliah')->paginate(10);

       // $pegawai = DB::table('pegawai')->get() ;

    	// mengirim data pegawai ke view index
    	return view('nilaikuliah.nilaikuliah',['nilaikuliah' => $nilaikuliah]);

    }

    // method untuk menampilkan view form tambah pegawai
	public function tambah()
	{

		// memanggil view tambah
		return view('nilaikuliah.tambah');

	}

// method untuk insert data ke table pegawai
public function store(Request $request)
{
	// insert data ke table pegawai
	DB::table('nilaikuliah')->insert([
		'NRP' => $request->NRP,
		'NilaiAngka' => $request->NilaiAngka,
		'SKS' => $request->SKS
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/nilaikuliah');

}

// update data pegawai

// method untuk edit data pegawai
public function read($id)
{
	// mengambil data pegawai berdasarkan id yang dipilih
	$nilaikuliah = DB::table('nilaikuliah')->where('ID',$id)->get();

	// passing data pegawai yang didapat ke view edit.blade.php
	return view('nilaikuliah.read',['nilaikuliah' => $nilaikuliah]);

}

// method untuk hapus data pegawai
public function hapus($id)
{
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('nilaikuliah')->where('ID',$id)->delete();

	// alihkan halaman ke halaman pegawai
	return redirect('/nilaikuliah');
}

public function cari(Request $request)
{
    // menangkap data pencarian
    $cari = $request->cari;

        // mengambil data dari table pegawai sesuai pencarian data
    $nilaikuliah = DB::table('nilaikuliah')
    ->where('NRP','like',"%".$cari."%")
    ->paginate();

        // mengirim data pegawai ke view index
    return view('nilaikuliah.nilaikuliah',['nilaikuliah' => $nilaikuliah]);

}
}
