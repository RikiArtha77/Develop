<?php

namespace App\Http\Controllers;

use App\Models\komunitas;
use App\Models\packages;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    //deklarasi variabel title yg akan tampil pada view
    $title="Daftar Barang";
    //(object) digunakan untuk instansiasikan array menjadi object
    //agar data dapat ditampilkan dalam object $item->nik
    //jika tidak (object), maka data dapat ditampilkan menggunakan $item['nik']
    $barang=[(object)[
    'id_penjual'=>1,
    'nama'=>'Pepsi',
    'harga' => '7000',
    'deskripsi'=> 'Dingin Dan Segar',
    'foto' => 'assets/images/pepsi.png'
    ],(object)[
    'id_penjual'=>2,
    'nama'=>'Capucino',
    'harga' => '16000',
    'deskripsi'=> 'Hangat Dan Nikmat',
    'foto' => 'assets/images/capucino.png'
    ],(object)[
    'id_penjual'=>3,
    'nama'=>'Coca Cola',
    'harga' => '9000',
    'deskripsi'=> 'Dingin Dan Nikmat',
    'foto' => 'assets/images/kombinasi.png'
    ]];
    //dapat juga disimpan dalam sebuah collection data
    //sehingga data petani dapat menggunakan beberapa fungsi collection
    $index=packages::all();
    //mengirimkan seluruh variabel untuk ditampilkan pada view
    return view('admin.daftarbarang',compact('title','index'));
    } 

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title="Buat Data";
        $komunitas=komunitas::all();
        return view('admin.buatbarang',compact('title','komunitas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $package=packages::find($id);
            $package->delete();
            return redirect('barang');
        }catch (\throwable $e) {
            echo $e->getMessage();
        }
    }
}
