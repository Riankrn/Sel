<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class produkController extends Controller
{
    public function index(){
        $data = [
            'pageTitle' => 'oh jadi',
            'content' => 'ini adalah halaman produk.'
        ];

        return view('produk', compact('data'));
        
    }
}
