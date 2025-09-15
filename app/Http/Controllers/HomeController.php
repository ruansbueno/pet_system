<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::select('name', 'arquivo', 'price', 'weight')->limit(5)->get();
        return view('home', compact('products'));
    }
}
