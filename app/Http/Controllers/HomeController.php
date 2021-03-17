<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\ProductBrand;


class HomeController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();
        $brands = ProductBrand::all();
        return view('pages.home', compact('products', 'categories', 'brands'));
    }

    public function ProductDetail($id_product)
    {
        $product = Product::find($id_product);
        return view('pages.product_detail', compact('product'));
    }

    public function Search(Request $request)
    {
        $key = $request->input('key');
        $products = Product::query()->where('product_name', 'like', "%{$key}%")->get();
        $categories = Category::all();
        $brands = ProductBrand::all();
        return view('pages.search', compact('products', 'categories', 'brands'));
    }

    public function ProductByCategory($category_id)
    {
    
        $products = Product::where('category_id', $category_id)->orderBy('category_id', 'desc')->get();
        $categories = Category::all();
        $brands = ProductBrand::all();

        return view('pages.danhmuc', compact('products', 'categories', 'brands'));
    }

    public function ProductByBrand($id)
    {
        $products = Product::where('brand_id', $id)->orderBy('brand_id', 'desc')->get();
        $categories = Category::all();
        $brands = ProductBrand::all();

        return view('pages.danhmuc', compact('products', 'categories', 'brands'));
    }
    
}
