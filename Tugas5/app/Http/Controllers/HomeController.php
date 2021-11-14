<?php
namespace App\Http\Controllers;


class HomeController extends Controller{
   
    function showberanda(){
        return view('beranda');
    }
    function showkatagori(){
        return view('katagori');
    }
    function test($produk,$hargamin = 0,$hargamax = 0){
        if($produk == 'hijab'){
            echo "Tampilkan produk hijab";
        }elseif($produk == 'Pakaian'){
            echo "Tampilkan Produk Pakaian";

        }
        echo "<br>";
        echo "harga Min adalah $hargamin <br>";
        echo "harga Max adalah $hargamax <br>";

    }

   
    function showlogout(){
        return view('logout');
    }
    function showprofil(){
        return view('profil');
    }
    
    
    
}