<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produk;

class ProductController extends Controller
{
    public function index()
    {
        $products = Produk::all();

        return response()->json($products);
    }
}
