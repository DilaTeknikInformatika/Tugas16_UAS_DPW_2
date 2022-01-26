<?php

namespace App\Http\Controllers;

use App\Models\Provinsi;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\Desa;
use App\Models\Produk;
use App\Models\Cart;
use App\Models\Checkout;

class ClientController extends Controller
{



  function showproducts()
  {
    
    $data['list_produk'] = Produk::paginate(2);
    return view('client.products', $data);
  }

  function filter()
  {
    $nama = request('nama');
    $data['nama'] = $nama;
    $data['list_produk'] = Produk::where('nama', 'like', "%$nama%")->paginate(2);

    return view('client.products', $data);
  }

  function filter2()
  {
    $harga_min = request('harga_min');
    $harga_max = request('harga_max');
    $data['harga_min'] = $harga_min;
    $data['harga_max'] = $harga_max;

    $data['list_produk'] = Produk::whereBetween('harga', [$harga_min, $harga_max])->paginate(2);
    return view('client.products', $data);
  }


  function showhome()
  {
    return view('client.home');
  }
  function showcontact()
  {
    return view('client.contact');
  }
  function showabout()
  {
    return view('client.about');
  }

  function showcheckout()
  {
    return view('client.checkout');
  }
 function showclient()
  {
    return view('client.client');
  }

  function showdetail(Produk $produk)
  {

    $data['produk'] = $produk;
    return view('client.detail', $data);
  }

  public function showAlamat()
  {
    $data['list_provinsi'] = Provinsi::all();
    $data['list_kabupaten'] = Kabupaten::all();
    $data['list_kecamatan'] = Kecamatan::all();
    $data['list_desa'] = Desa::all();
    return view('client.alamat', $data);
  }

  function checkout(){
    return view('client.checkout');
  }

  function postcheckout(){
    $produk = new Checkout;
    $produk->firtname = request('firtname');
    $produk->lastname = request('lastname');
    $produk->address = request('address');
    $produk->phone = request('phone');
    $produk->email = request('email');
    // dd(request()->all());
    $produk->save();

    return redirect('cart');
  }
} 