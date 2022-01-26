<?php
namespace App\Http\Controllers;
use App\Models\Provinsi;
class HomeController extends Controller{

    function showBeranda(){
        return view('admin.beranda');
    }
/*
    function showProduk(){
        return view('admin.produk.index');
    }

    function showtemplate(){
        return view('admin.template.app');
    }

     function showkategori(){
        return view('admin.kategori.index');
    }  

    function showuser(){
        return view('admin.user.index');
       }

       function test($produk, $hargaMin = 0, $hargaMax = 0){
        if($produk == 'jam tangan'){
          echo "Tampilkan Produk jam tangan";
        }elseif($produk == 'gelang'){
          echo "Produk gelang";
        }
      echo "<br>";
      echo "Harga Min adalah $hargaMin <br>";
      echo "Harga Max adalah $hargaMax <br>";
      }
    */
  public function showAlamat()
  {
    $data['list_provinsi'] = Provinsi::all();
    return view('client.alamat', $data);
  }
}