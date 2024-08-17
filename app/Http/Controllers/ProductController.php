<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;


class ProductController extends Controller
{
    public static $products = [
        ["id"=>"1", "name"=>"TV", "description"=>"Best TV", "price"=>50],
        ["id"=>"2", "name"=>"iPhone", "description"=>"Best iPhone", "price"=>2500],
        ["id"=>"3", "name"=>"Chromecast", "description"=>"Best Chromecast", "price"=>750],
        ["id"=>"4", "name"=>"Glasses", "description"=>"Best Glasses", "price"=>900]
    ];

    public function index(): View
    {
        $viewData = [];
        $viewData["title"] = "Products - Online Store";
        $viewData["subtitle"] =  "List of products";
        $viewData["products"] = ProductController::$products;
        return view('product.index')->with("viewData", $viewData);
    }

    public function show(string $id) : RedirectResponse|\Illuminate\View\View
    {
        // Verificar si el ID del producto es válido
        if (!array_key_exists($id - 1, ProductController::$products)) {
            return redirect()->route('home.index');
        }
        $viewData = [];
        $product = ProductController::$products[$id-1];
        $viewData["title"] = $product["name"]." - Online Store";
        $viewData["subtitle"] =  $product["name"]." - Product information";
        $viewData["product"] = $product;
        return view('product.show')->with("viewData", $viewData);
    }
    //D. Product creation (simulation)
    public function create(): View
    {
        $viewData = []; //to be sent to the view
        $viewData["title"] = "Create product";

        return view('product.create')->with("viewData",$viewData);
    }

    public function save(Request $request)
    {
        $request->validate([
            "name" => "required",
            "price" => "required|min:0.01"
        ]);
        dd($request->all());
        return redirect()->route('product.confirmation');
    }

    public function confirmation(): View
    {
        return view('product.confirmation');
    }

}