<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Table_product;

class ProductController extends Controller
{
    function index()
    {
    $data = Table_product::all();
    return view('product', ['products'=>$data]);
    }
    function details($id)
    {
        $data = Table_product::find($id);
        return view('detail', ['trending_products'=>$data]);
    }
}
