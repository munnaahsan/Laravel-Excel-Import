<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Excel;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::get();
        // dd($products);
        return view("products", compact('products'));
    }

    public function postImport(Request $req)
    {
        // dd($req);
        if($req->hasFile('file')) {
            $path = $req->file('file')->getRealPath();
            // dd($path);
            $data = Excel::selectSheetByIndex(0)->load($path)->get();
            return $data;
        }

    }
}
