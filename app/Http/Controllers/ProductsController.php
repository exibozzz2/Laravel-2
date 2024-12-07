<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{

    public function index() {

        $brands = [
            "Toyota" => ["Corolla", "Camry", "RAV4"],
            "Honda" => ["Civic", "Accord", "CR-V"],
            "Ford" => ["Focus", "Mustang", "Explorer"],
            "Chevrolet" => ["Impala", "Malibu", "Tahoe"],
            "Nissan" => ["Altima", "Rogue", "Sentra"],
            "BMW" => ["3 Series", "X5", "Z4"],
            "Mercedes" => ["C-Class", "E-Class", "GLA"],
            "Audi" => ["A4", "Q5", "R8"],
            "Volkswagen" => ["Golf", "Passat", "Tiguan"],
            "Hyundai" => ["Elantra", "Santa Fe", "Tucson"],
            "Kia" => ["Optima", "Sorento", "Soul"],
            "Subaru" => ["Outback", "Impreza", "Forester"],
            "Mazda" => ["Mazda3", "CX-5", "MX-5"],
            "Volvo" => ["S60", "XC90", "V60"],
            "Porsche" => ["911", "Cayenne", "Macan"],
            "Jaguar" => ["XE", "F-PACE", "XJ"],
            "Ferrari" => ["488", "Roma", "F8"],
            "Lamborghini" => ["Huracan", "Aventador", "Urus"],
            "Tesla" => ["Model S", "Model 3", "Model X"],
            "Mitsubishi" => ["Lancer", "Outlander", "Eclipse Cross"]
        ];


        return view('products', compact('brands'));
    }
}
