<?php
namespace App\Http\Controllers;
use App\Models\Produk;

class ProdukController extends Controller{
    function index(){
        $data['list_produk'] = produk::all();
        return view('produk.index',$data);
    }
    function Create(){
        return view('produk.create');
    }
    function Store(){
        $produk = new produk;
        $produk->Nama_produk = request('nama');
        $produk->Harga = request('harga');
        $produk->Berat = request('berat');
        $produk->Stok = request('stok');
        $produk->deskripsi = request('deskripsi');
        $produk->save();

        return redirect('produk')->with('success', 'data berhasil ditambahkan');
        
    }
    function Show(produk $produk){
        $data['produk'] = $produk;
        return view('produk.show',$data);
        
    }
    function edit(produk $produk){
        $data['produk'] = $produk;
        return view('edit',$data);
       
    }
    function update(produk $produk){
        $produk->Nama_produk = request('nama');
        $produk->Harga = request('harga');
        $produk->Berat = request('berat');
        $produk->Stok = request('stok');
        $produk->deskripsi = request('deskripsi');
        $produk->save();

        return redirect('produk');
       
    }
    function destroy(produk $produk){
        $produk->delete();

        return redirect('produk')->with('danger', 'data berhasil dihapus');
       
    }
}