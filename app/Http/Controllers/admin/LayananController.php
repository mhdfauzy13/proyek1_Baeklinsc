<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Layanan;
use App\Models\LayananDetail;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function index(){
        $layanan = Layanan::all();
        $angka = 1;
        return view('admin/layanan/layanan',[
            'layanan' => $layanan,
            'angka'=> $angka,
        ]
        );
    }
    public function create(){
        return view('admin/layanan/create'
        );
    }
    public function store(Request $request){
      
        $layanan = new Layanan(); 
        $layanan->nama = $request->nama_layanan;
        $layanan->keterangan = $request->keterangan_layanan;
        $layanan->gambar = $request->gambar;
        $layanan->save();

        $loop = 0;
        foreach ($request->varian as $varian) {
            $layananDetail = new LayananDetail();
    $layananDetail->layanan_id = $layanan->id;
    $layananDetail->nama = $request->varian[$loop];
    $layananDetail->harga = $request->harga_varian[$loop];
    $layananDetail->save();
    
            $loop++;
        }
         return redirect()->route('layanan.admin')->with('success', 'Record deleted successfully.');

    }

    public function edit($id)
{
    $layanan = Layanan::with('details')->find($id);
    $angka = 1;
   // dd($layanan->details);
    return view('admin.layanan.edit', [
        'layanan' => $layanan,
        'angka' => $angka,
    ]);
}


    public function destroy($id){
        $layanan = Layanan::find($id);

    // Remove related LayananDetail records
    $layanan->details()->delete();

    // Delete the Layanan record
    $layanan->delete();
         return redirect()->route('layanan.admin')->with('success', 'Record deleted successfully.');

    }
}
