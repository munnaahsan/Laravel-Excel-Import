<?php

namespace App\Http\Controllers;

use App\Imports\ProductsImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ProductImportController extends Controller
{
    public function show() {
        return view('products');
    }
    public function store(Request $request) {
          $file = $request->file('file')->store('import');

//         Excel::import(new ProductsImport, $file);
        $import = new ProductsImport;
        $import->import($file);

        dd($import->errors());
//        (new ProductsImport)->import($file);
        return back()->withStatus(' import finished.');

    }
}
