<?php

namespace App\Http\Controllers;

use App\Models\produk;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function produk(){
        $produk = produk::all();
        return view('produk', compact('produk'));
    }

    public function create(){
        return view('tmbh');
    }

    public function creating(Request $request){
        $this->validate($request,[
            'gambar' => 'image|max:1024',
        ]);
        $gambar = $request->file('gambar');
        $img_name = Str::random(10) .'.jpg';
        if ($gambar){
            produk::create([
                'judulproduk' => $request->judulproduk,
                'deskripsiproduk' => $request->deskripsiproduk,
                'harga' => $request->harga,
                'gambar' => $img_name,
            ]);
            $gambar->storeAs('public/gambar',$img_name);
            return redirect('/produk');
        }
        else{
            return redirect()->back();
        }

    }

    

    public function edit($id){
        $produk = produk::find($id);

        return view('edit', compact('produk'));
    }

    public function editing($id, Request $request){
        $produk = produk::find($id);
        $produk->update($request->all());
        return redirect('/produk');
    }

    public function delete($id){
        $produk = produk::find($id);
        $produk->delete();
        return redirect('/produk');
    }
}
