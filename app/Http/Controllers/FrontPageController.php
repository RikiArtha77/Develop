<?php

namespace App\Http\Controllers;

use App\Models\packages;
use Illuminate\Http\Request;

class FrontPageController extends Controller
{
    function index(){
        return view('frontpage.landingpage');
    }

    function produk(){
        return view('frontpage.produk');
    }

    function kontak(){
        return view('frontpage.kontak');
    }

    function cart(){
        return view('frontpage.cart');
    }

    function package(){
        $package=packages::all();
        return view('frontpage.package', compact('package'));
    }

    function detailpackage($slug){
        $package=packages::where('slug',$slug)->first();
        $title="Detail Package";
        return view ('frontpage.detailpackage', compact('title','package'));
    }
}
