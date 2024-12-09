<?php

namespace App\Http\Controllers;

use App\Models\ProductsModel;
use Illuminate\Http\Request;

class ProductsController extends Controller
{

    public function index() {

    }

    public function getAllProducts() {
        $allProducts = ProductsModel::all();
        return view ('products', compact('allProducts'));
    }

    public function getFiveNewestProducts() {
        $fiveNewestProducts = ProductsModel::orderBy('id', 'desc')->take(5)->get();
        return view ('products', compact('fiveNewestProducts'));
    }
}
