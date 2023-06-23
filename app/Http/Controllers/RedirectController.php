<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedirectController extends Controller
{
    public function index(){
        if(auth()->user()->role == 'admin'){
            return redirect('/admin/layanan');
        }else{
            return redirect('/layanan');

        }
    }
}
