<?php

namespace App\Http\Controllers;
use App\Models\Produk;
use App\Models\Provinsi;
use Config;


class HomeController extends Controller{

    function showindex(){
        return view('frontview.index');
    }

    function showshop(){
        $data['list_produk'] =  Produk::all();
        return view('frontview.shop', $data);
    }
    function showprodukdetail(){
        return view('frontview.produk-detail');
    }

    function showcheckout(){
        return view('frontview.checkout');
    }

    function showdetail(){
        return view('frontview.detail');
    }

    function showcart(){
        return view('frontview.cart');
    }

    function showcontact(){
        return view('frontview.contact');
    }

    function showdashboard(){
        return view('backview.dashboard');
    }

    function showkategori(){
        return view('backview.kategori');
    }

    function showsupplier(){
        return view('backview.supplier');
    }

    function showcolegan(){
        return view('backview.colegan');
    }

    function showproduk(){
        return view('backview.produk');
    }

    function showpromo(){
        return view('backview.promo');
    }

    function showuser(){
        return view('backview.user');
    }

    public function testCollection()
    {
        $list_clothes = ['Tshirt', 'Shirt', 'Sweater', 'Dress', 'Jacket', 'Suit', 'Trousers' ];
        $list_clothes = collect($list_clothes);
        $list_produk = Produk::all();

        // Sorting
        //Sort By Harga Terendah
        //dd($list_produk->sortBy('harga'));
        //Sort By Harga Tertinggi
        //dd($list_produk->sortByDesc('harga'));

        // Filter

        //$filtered = $list_produk->filter(function($item){
             //return $item->harga > 20000;
        //});

        //dd($filtered);

        //$sum = $list_produk->sum('stok');
        //dd($sum);

        $data['list'] = Produk::paginate(3);
        return view('test-collection', $data);
        
        dd($list_clothes, $list_produk);
    }

    function testAjax(){
        $data['list_provinsi'] = Provinsi::all();
        return view('test-ajax', $data);
    }
}