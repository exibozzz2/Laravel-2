<?php

namespace App\Http\Controllers;

use App\Models\ProductsModel;
use Illuminate\Http\Request;

class ProductsController extends Controller
{

    public function addProductView() {
            return view('addProduct');
        }

    public function addProductInsert(Request $request)  {

        $request->validate([
            "name" => "required|string|min:5",
            "description" => "required|string|max:256",
            "amount" => "required|numeric",
            "price" => "required|numeric",
            ]);

            ProductsModel::create([
                "name" => $request->get("name"),
                "description" => $request->get("description"),
                "amount" => $request->get("amount"),
                "price" => $request->get("price"),
            ]);

        return redirect("/admin/add-product");

    }

    public function getAllProducts() {
        $allProducts = ProductsModel::all();
        return view ('products', compact('allProducts'));
    }

    public function getAllProductsAdmin() {
        $allProductsAdmin = ProductsModel::all();
        return view ('allProductsAdmin', compact('allProductsAdmin'));
    }



    public function getFiveNewestProducts() {
        $fiveNewestProducts = ProductsModel::orderByDesc("id")->take(5)->get();
        return view ('products', compact('fiveNewestProducts'));
    }
}
