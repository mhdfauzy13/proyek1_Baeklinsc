<?php

namespace App\Http\Controllers;

use App\Models\LayananDetail;
use Illuminate\Http\Request;

class LayananDetailController extends Controller
{
    public function destroy($id){
        $detail = LayananDetail::find($id);
        if($detail){
            $detail->delete();
            return redirect()->route('layanan.admin')->with('success', 'Record deleted successfully.');
        }
    }
}
