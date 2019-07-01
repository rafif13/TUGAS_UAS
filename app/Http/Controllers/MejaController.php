<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Meja;


class MejaController extends Controller
{
    public function index()
    {
        $mejas = Meja::orderBy('created_at', 'DESC')->get(); // 2
        // CODE DIATAS SAMA DENGAN > select * from `products` order by `created_at` desc 
        return view('meja.index', compact('mejas')); // 3
    }

    public function create()
    {
        return view('meja.create');
    }

    public function save(Request $request )
    {
    //Melakukan validasi data yang dikirim form inputan 

    $this->validate($request, [
        'produk'=> 'required|string|max:100',
        'penjelasan_barang'=>'required|string',
        'harga' => 'required|integer',
        'stok' =>'required|integer'
    ]);

    try{
        $meja = Meja::create([
            'produk' => $request-> produk,
            'penjelasan_barang' => $request-> penjelasan_barang,
            'harga' => $request-> harga,
            'stok' => $request-> stok
        ]);


        return redirect ('/meja')->with(['success' => '<strong>' . $meja-> title. '</strong> telah disimpan']);
    }catch(\Exception $e)  {

        return redirect ('/meja/new') ->with (['error'=>$e ->getMessage()]);
     }
}



    
}
