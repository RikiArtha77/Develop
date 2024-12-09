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
        $title="Daftar Barang";
        //memanggin instance Petani sebagai inisialisasi dari data petani
        $package=new packages;
        //melakukan pengecekan kondisi jika ditemukan adanya kata kunci
        //kata kunci diterima menggunakan method GET[s]
        if(isset($_GET['s'])){
        $s=$_GET['s'];
        //melakukan query like berdasarkan param nama
        $package=$package->where('package_name', 'like', "%$s%");
        }
        //menambahkan filter pencarian
        //jika ditemukan adanya filter berupa id_kelompok
        if(isset($_GET['komunitas_id'])&&$_GET['komunitas_id']!=''){
        $package=$package->where('komunitas_id', $_GET['komunitas_id']);
        }
        $package=$package->paginate(3);
        $komunitas=komunitas::all();
        return view('admin.daftarbarang',compact('title','package','komunitas')); 
            }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Buat Data";
        $komunitas = komunitas::all();

        return view('admin.inputbarang', compact('title', 'komunitas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Pesan error kustom
        $message = [
            'required' => 'Kolom :attribute harus lengkap',
            'numeric' => 'Kolom :attribute harus angka',
            'file' => 'Perhatikan format dan ukuran data'
        ];

        // Validasi input
        $validasi = $request->validate([
            'package_code' => 'required|numeric',
            'komunitas_id' => 'required',
            'package_name' => 'required',
            'package_priice' => 'required|numeric',
            'package_desk' => 'required',
            'gambar' => 'required|mimes:png,jpg|max:1024',
        ], $message);

        try{
            // Simpan file gambar
            $fileName = time().$request->file('gambar')->getClientOriginalName();

            $path = $request->file('gambar')->storeAs('photos', $fileName, 'public');

            // Tambahkan path gambar ke data yang divalidasi
            $validasi['gambar'] = $path;

            // Simpan data ke database
            $response = packages::create($validasi);
            return redirect('barang');
        }catch (\Exception $e) {
            // Tangani error dengan pengembalian ke halaman sebelumnya
            echo $e->getMessage();
        }
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
        $title = "Buat Data";
        $komunitas = komunitas::all();
        $package=packages::find($id);;
        return view('admin.inputbarang', compact('title', 'komunitas','package'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Pesan error kustom
        $message = [
            'required' => 'Kolom :attribute harus lengkap',
            'numeric' => 'Kolom :attribute harus angka',
            'file' => 'Perhatikan format dan ukuran data'
        ];

        // Validasi input
        $validasi = $request->validate([
            'package_code' => 'required|numeric',
            'komunitas_id' => 'required',
            'package_name' => 'required',
            'package_priice' => 'required|numeric',
            'package_desk' => '',
            'gambar' => ''
        ], $message);

        try{
            if($request->file('gambar')){
                // Simpan file gambar
            $fileName = time().$request->file('gambar')->getClientOriginalName();

            $path = $request->file('gambar')->storeAs('photos', $fileName, 'public');

            // Tambahkan path gambar ke data yang divalidasi
            $validasi['gambar'] = $path;

            }

            $response = packages::find($id)->update($validasi);
            return redirect('barang');
        }catch (\Exception $e) {
            // Tangani error dengan pengembalian ke halaman sebelumnya
            echo $e->getMessage();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $package = packages::findOrFail($id);
            $package->delete();

            return redirect('barang')->with('success', 'Data berhasil dihapus!');
        } catch (\Throwable $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
